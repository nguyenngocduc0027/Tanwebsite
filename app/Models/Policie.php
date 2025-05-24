<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policie extends Model
{
    use HasFactory;
     protected $fillable = [
        'title',
        'slug',
        'content',
        'blog'
    ];

    // Nếu muốn dùng slug để lấy route
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
