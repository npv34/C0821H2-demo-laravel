<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $users = [
        [
            'id' => 1,
            'name' => 'Thinh',
            'email' => 'thinh@gmail.com'
        ],
        [
            'id' => 2,
            'name' => 'Son',
            'email' => 'son@gmail.com'
        ],
        [
            'id' => 3,
            'name' => 'Quan',
            'email' => 'quan@gmail.com'
        ],
        [
            'id' => 4,
            'name' => 'Chien',
            'email' => 'chien@gmail.com'
        ]
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
