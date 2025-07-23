<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrasiHotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perusahaan',
        'nama_hotel',
        'nama_pic',
        'nomor_pic',
        'nik_pic',
        'alamat_hotel',
        'jabatan_pic',
    ];
}
