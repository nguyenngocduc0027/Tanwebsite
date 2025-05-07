<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'type_id',
        'level_id',
        'code',
        'status',
        'price',
        'sale_price',
        'description',
        'document',
        'brand',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class)->orderBy(column: 'position');
    }

    public function thumbnail()
    {
        return $this->hasOne(ProductImage::class)->where('is_thumbnail', true);
    }
    public function favoritedByUsers()
{
    return $this->belongsToMany(User::class, 'favorite_products')->withTimestamps();
}
}
