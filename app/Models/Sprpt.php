<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprpt extends Model
{
    use HasFactory;
    // Nama tabel yang sesuai
    protected $table = 'sprpt'; 

    protected $fillable = [
        'no_surat',
        'nip_pegawai',
        'tgl_surat',
        'perihal',
        'cetakan_surat',
    ];
}
