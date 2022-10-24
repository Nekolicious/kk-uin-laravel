<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KK extends Model
{
    use HasFactory;

    protected $table = 'kk';
    protected $primarykey = 'kk_id';
    protected $fillable = ['code','name'];

    public function users()
    {
        return $this->hasMany(User::class, 'kk_id', 'kk_id');
    }
}
