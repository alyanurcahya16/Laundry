<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar1',
        'gambar2',
        'video_url',
        'tittle',
        'description',
        'link',
        'experience',
    ];
}
