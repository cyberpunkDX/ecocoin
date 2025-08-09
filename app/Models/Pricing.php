<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = [
        'uuid',
        'name',
        'minimum',
        'maximum',
        'features',
    ];
    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }
}
