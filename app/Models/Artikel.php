<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $primarykey = 'artikel_id';

    protected $fillable = ['header','title','slug','body','kategori_id','author_id'];

    public function author() {
        return $this->hasOne(User::class, 'user_id', 'author_id');
    }

    public function kategori() {
        return $this->hasOne(Kategori::class, 'kategori_id', 'kategori_id');
    }
}
