<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'item',
        'jumlah',
        'catatan',
        'jumlah_kg',
    ];
    
}
