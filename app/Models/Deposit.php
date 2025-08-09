<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function pricing()
    {
        return $this->belongsTo(Pricing::class);
    }
}
