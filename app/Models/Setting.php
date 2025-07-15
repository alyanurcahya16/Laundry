<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'facebook',
        'instagram',
        'tiktok',
        'nomor',
        'alamat',
        'email',
        'company_name',
        'company_description',
    ];
}
