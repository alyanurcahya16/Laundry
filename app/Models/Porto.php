<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porto extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'gambar', 'lokasi', 'nama', 'link'];
}
