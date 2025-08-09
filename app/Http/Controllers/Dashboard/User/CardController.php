<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Models\Card;
use App\Models\User;
use App\Enum\CardType;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $account = $user->account;
        $cards = Card::where('account_id', $account->id)->latest()->get();
        $cardTypes = CardType::cases();


        $data = [
            'title' => 'Card Application',
            'user'  => $user,
            'cards' => $cards,
            'cardTypes' => $cardTypes,
        ];
        return view('dashboard.user.card.index', $data);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $request->validate([
                'type' => 'required|string|max:255',
                'residential_address' => 'required|string|max:255',
                'amount' => 'required|numeric',
                'email' => 'required|email|max:255',
            ]);
    
            $user = Auth::user();
            $account = $user->account;
    
            if (!$account || $account->balance < $request->amount) {
                return to_route('user.withdraw.index')->with('error', 'Insufficient balance or account not found.');
            }
    
            $data = [
                'uuid' => Str::uuid(),
                'account_id' => $account->id,
                'name' => $request->name,
                'type' => $request->type,
                'residential_address' => $request->residential_address,
                'email' => $request->email,
                'balance' => $request->amount,
            ];
    
            $createdCard = Card::create($data);
    
            if ($createdCard) {
                Transaction::create([
                    'uuid' => Str::uuid(),
                    'account_id' => $account->id,
                    'amount' => $request->amount,
                    'type' => 'withdrawal',
                    'description' => 'Card purchase '.$request->amount,
                    'status' => 'pending',
                ]);
                DB::commit();
                return redirect()->back()->with('success', 'Card request submitted successfully. Please wait for approval.');
            }else {
                DB::rollBack();
                return redirect()->back()->with('error', 'Failed to create card. Please try again.');
            }
    
            
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        
    }
}
