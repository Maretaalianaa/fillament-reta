<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;
    protected $fillable = ['kategori','nama_gambar'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
