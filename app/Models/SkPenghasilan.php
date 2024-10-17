<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkPenghasilan extends Model
{
   
    // Nama tabel yang sesuai
    protected $table = 'sk_penghasilan'; 

    protected $fillable = [
        'no_surat',
        'nip_pegawai',
        'tgl_surat',
        'perihal',
        'cetakan_surat',
    ];
}
