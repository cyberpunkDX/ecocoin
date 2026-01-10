<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'user_id',
        'file',
        'title',
        'description',
        'type',
    ];

    /**
     * Get the user that owns the media.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
