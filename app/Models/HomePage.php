<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $fillable = [
        'service1',
        'content1',
        'image1',
        'service2',
        'content2',
        'image2',
        'service3',
        'content3',
        'image3',
        'service4',
        'content4',
        'image4',
        'set_product_title',
        'set_product_subtitle',
        'set_product_description',
        'sale_product_title',
        'sale_product_subtitle',
        'sale_product_description',
        'coupon_title',
        'coupon_subtitle',
        'coupon_description',
        'about_title',
        'about_subtitle',
        'about_description',
        'image_about',
        'why_title',
        'why_subtitle',
        'why1',
        'content_why1',
        'image_why1',
        'why2',
        'content_why2',
        'image_why2',
        'why3',
        'content_why3',
        'image_why3',
        'why4',
        'content_why4',
        'image_why4',
        'why5',
        'content_why5',
        'image_why5',
        'why6',
        'content_why6',
        'image_why6',
        'img_why',
        'product_title',
        'product_subtitle',
        'product_description',
        'feedback_title',
        'feedback_subtitle',
        'feedback_description',
        'blog_title',
        'blog_subtitle',
        'blog_description',
        'partner_title',
        'partner_subtitle',
        'partner_description',
    ];
}
