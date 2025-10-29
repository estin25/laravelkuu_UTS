<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kategori'];

    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }
}
