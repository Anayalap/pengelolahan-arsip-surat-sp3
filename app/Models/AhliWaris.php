<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AhliWaris extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_surat',
        'id_pegawai',
        'id_surat',
        'tgl_surat',
        'pengirim',
        'perihal',
        'cetakan_surat',
    ];


}
