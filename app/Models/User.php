<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Account;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'uuid',
        'role',
        'name',
        'email',
        'email_code',
        'email_code_expires_at',
        'email_verified_at',
        'dial_code',
        'phone',
        'image',
        'gender',
        'date_of_birth',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function account()
    {
        return $this->hasOne(Account::class);
    }

    public function investments()
    {
        return $this->hasMany(Investment::class);
    }
    public function withdrawalMessage()
    {
        return $this->hasOne(WithdrawalMessage::class);
    }
}
