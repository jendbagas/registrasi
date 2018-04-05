<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['registrasi_ulang_id','nama','jurusan_id','tanggal_lahir','no_hp','alamat'];

}
