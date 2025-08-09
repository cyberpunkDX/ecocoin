<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Models\Wallet;
use App\Models\Withdrawal;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WithdrawalController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $withdrawals = $user->account ? $user->account->withdrawals : collect([]);
        $wallets = Wallet::all();

        $data = [
            'title' => "Make Withdrawals",
            'user' => $user,
            'withdrawals' => $withdrawals,
            'wallets' => $wallets
        ];

        return view('dashboard.user.withdraw.index', $data);
    }

    /**
     * Handle cryptocurrency withdrawal
     */
    public function cryptoWithdrawalPreview(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'numeric'],
            'wallet_name' => ['required', 'string'],
            'wallet_address' => ['required', 'string'],
            'wallet_address_network' => ['nullable', 'string'],
        ]);

        $user = Auth::user();
        $account = $user->account;

        if (!$account || $account->balance < $request->amount) {
            return to_route('user.withdraw.index')->with('error', 'Insufficient balance or account not found.');
        }

        
            DB::beginTransaction();

            $withdrawal = Withdrawal::create([
                'uuid' => Str::uuid(),
                'account_id' => $account->id,
                'wallet_name' => $request->wallet_name,
                'wallet_address' => $request->wallet_address,
                'wallet_address_network' => $request->wallet_address_network,
            ]);

            if ($withdrawal) {
                $transaction = Transaction::create([
                    'uuid' => Str::uuid(),
                    'account_id' => $account->id,
                    'amount' => $request->amount,
                    'type' => 'withdrawal',
                    'description' => $request->wallet_name.' withdrawal to ' . $request->wallet_address,
                    'status' => 'pending',
                ]);
            }

            $data = [
                'title' => "Withdrawal Preview",
                "withdrawal" => $withdrawal,
                "transaction" => $transaction,
                "account" => $account,
            ];

            if ($transaction) {
                DB::commit();
                return view('dashboard.user.withdraw.crypto.preview', $data)->with('success', 'Withdrawal Initiated Successfully. Awaiting confirmation.');
            } else {
                DB::rollBack();
                return to_route('user.withdraw.index')->with('error', 'Failed to initiate withdrawal. Please try again.');
            }
        
    }

    public function bankWithdrawalPreview(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'numeric'],
            'account_name' => ['required', 'string'],
            'account_number' => ['required', 'string'],
            'bank_name' => ['required', 'string'],
            'routing_number' => ['nullable', 'string'],
        ]);

        $user = Auth::user();
        $account = $user->account;


        if (!$account || $account->balance < $request->amount) {
            return to_route('user.withdraw.index')->with('error', 'Insufficient balance or account not found.');
        }

        try {
            DB::beginTransaction();

            $withdrawal = Withdrawal::create([
                'uuid' => Str::uuid(),
                'account_id' => $account->id,
                'account_name' => $request->account_name,
                'account_number' => $request->account_number,
                'bank_name' => $request->bank_name,
                'routing_number' => $request->routing_number,
            ]);

            if ($withdrawal) {
                // Create the associated transaction
                $transaction = Transaction::create([
                    'uuid' => Str::uuid(),
                    'account_id' => $account->id,
                    'amount' => $request->amount,
                    'type' => 'withdrawal',
                    'description' => 'Bank Transfer to ' . $request->account_name,
                    'status' => 'pending',
                ]);
            }
                        
            $data = [
                'title' => "Withdrawal Preview",
                "withdrawal" => $withdrawal,
                "transaction" => $transaction,
                "account" => $account,
            ];

            if ($transaction) {
                DB::commit();
                return view('dashboard.user.withdraw.bank.preview', $data)->with('success', 'Withdrawal Initiated Successfully. Awaiting confirmation.');
            } else {
                DB::rollBack();
                return to_route('user.withdraw.index')->with('error', 'Failed to initiate withdrawal. Please try again.');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return to_route('user.withdraw.index')->with('error', 'An error occurred while processing your withdrawal. Please try again.');
        }
    }

    public function proceedWithdrawal(Request $request){
        try {
            $account = Auth::user()->account;

            $transaction = Transaction::where('uuid', $request->transaction_uuid)->first();
            if (!$transaction) {
                return to_route('user.withdraw.index')->with('error', 'Transaction not found.');
            }
            if ($transaction->status !== 'pending') {
                return to_route('user.withdraw.index')->with('error', 'Transaction already processed.');
            }
            if ($account->successful_withdrawals === true) {
                $account->decrement('balance', $transaction->amount);

                $transaction->status = "success";
                $transaction->save();
                
                return to_route('user.withdraw.index')->with('success', 'Withdrawal Successful');
            } else {
                $transaction->status = "failed";
                $transaction->save();
                return to_route('user.withdraw.index')->with('error', 'Failed to initiate withdrawal. Please try again.');
            }
            
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
