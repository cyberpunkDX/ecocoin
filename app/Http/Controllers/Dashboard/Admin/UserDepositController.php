<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserDepositController extends Controller
{
    public function index(string $userUUID)
    {
        $user = User::where('uuid', $userUUID)->firstOrFail();
        $data = [
            'title' => 'User Deposits',
            'user' => $user,
            'deposits' => $user->account->deposits()->latest()->get()
        ];

        return view('dashboard.admin.user.deposit.index', $data);
    }

    public function show(string $userUUID, $depositUUID)
    {
        $user = User::where('uuid', $userUUID)->firstOrFail();
        $deposit = Deposit::where('uuid', $depositUUID)->where('account_id', $user->account->id)->firstOrFail();

        $data = [
            'title' => 'User Deposit Detail',
            'user' => $user,
            'deposit' => $deposit
        ];

        return view('dashboard.admin.user.deposit.show', $data);
    }

    public function cancel(string $userUUID, $depositUUID)
    {
        DB::beginTransaction();
        try {
            $user = User::where('uuid', $userUUID)->firstOrFail();
            $deposit = Deposit::where('uuid', $depositUUID)->where('account_id', $user->account->id)->firstOrFail();
            $deposit->status = 'cancelled';
            $deposit->save();
            DB::commit();

            return redirect()->route('admin.user.deposit.index', $userUUID)->with('success', 'Deposit cancelled successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('admin.user.deposit.index', $userUUID)->with('error', 'Something went wrong');
        }
    }

    public function complete(string $userUUID, $depositUUID)
    {
        DB::beginTransaction();
        try {
            $user = User::where('uuid', $userUUID)->firstOrFail();
            $deposit = Deposit::where('uuid', $depositUUID)->where('account_id', $user->account->id)->firstOrFail();
            $deposit->status = 'completed';
            $deposit->save();
            DB::commit();

            return redirect()->route('admin.user.deposit.index', $userUUID)->with('success', 'Deposit completed successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('admin.user.deposit.index', $userUUID)->with('error', 'Something went wrong');
        }
    }
    public function delete(string $userUUID, $depositUUID)
    {
        DB::beginTransaction();
        try {
            $user = User::where('uuid', $userUUID)->firstOrFail();
            $deposit = Deposit::where('uuid', $depositUUID)->where('account_id', $user->account->id)->firstOrFail();
            $deposit->delete();
            DB::commit();
            return redirect()->route('admin.user.deposit.index', $userUUID)->with('success', 'Deposit deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('admin.user.deposit.index', $userUUID)->with('error', 'Something went wrong');
        }
    }
}
