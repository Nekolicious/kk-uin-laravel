<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primarykey = 'dosen_id';
    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }
}
