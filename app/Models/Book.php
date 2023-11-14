<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['rak_id','judul','pengarang','penerbit','thn_terbit','eksemplar'];

    public function rak()
    {
        return $this->belongsTo(Rak::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
