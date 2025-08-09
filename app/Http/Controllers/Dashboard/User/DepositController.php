<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Models\Wallet;
use App\Models\Pricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function index(Request $request){
        $wallets = Wallet::all();
        $amount = $request->amount;
        $user = Auth::user();
        $data = [
            'title' => 'Deposit a minimum of '. formatAmount($amount),
            'wallets' => $wallets,
            'user' => $user,
            'amount' => $amount
        ];

        return view('dashboard.user.deposit.index', $data);
    }

    public function checkout($walletUuid){

        $wallet = Wallet::where('uuid', $walletUuid)->first();
        $user = Auth::user();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        $data = [
            'title' => 'Choose a payment gateway',
            'wallet' => $wallet,
            'user' => $user,
        ];

        return view('dashboard.user.deposit.checkout', $data);
    }
}
