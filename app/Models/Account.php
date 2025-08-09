<?php

namespace App\Models;

use App\Models\Card;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }
    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
