<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = ['email', 'name', 'nipnim', 'notelp', 'kk_id', 'nipnim', 'password', 'is_admin', 'is_approve'];
    
    public function kk()
    {
        return $this->hasOne(KK::class, 'kk_id', 'kk_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
