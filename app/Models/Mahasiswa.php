<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nim',
        'nama',
        'jurusan',
        'alamat',
        'email',
        'telepon'
    ];

    protected $table = 'mahasiswas';
}
