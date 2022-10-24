<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primarykey = 'kategori_id';
    protected $fillable = ['nama'];

    public function artikel() {
        return $this->hasMany(Artikel::class, 'kategori_id', 'kategori_id');
    }
}
