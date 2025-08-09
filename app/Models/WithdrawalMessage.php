<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class WithdrawalMessage extends Model
{
    public function user() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class); 
    }
}
