<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['nama','nisn','tmpt_lahir','tgl_lahir','jns_kelamin','alamat','no_hp','jns_anggota','nama_gambar'];

    public function members()
    {
        return $this->hasMany(Transaction::class,'member_id','id');
    }
}
