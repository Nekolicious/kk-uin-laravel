<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User as Authenticable;

class User extends Authenticable
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = ['name', 'nipnim', 'email', 'notelp', 'kk','password', 'is_admin', 'status'];
}
