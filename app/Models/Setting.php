<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'facebook',
        'shoppe',
        'lazada',
        'tiktok',
        'subtitle',
        'momo',
        'zalopay',
        'qrcode',
        'visa',
        'bank',
        'logo',
        'favicon',
        'seo_author',
        'seo_keywords',
        'seo_site_name',
        'seo_title',
        'seo_image',
        'seo_description'
    ];
}
