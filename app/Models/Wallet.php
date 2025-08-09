<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'uuid',
        'name',
        'address',
        'image',
        'logo',
        'price',
        'network'
    ];
}
