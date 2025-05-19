<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
// trong app/Models/Category.php
public function products()
{
    return $this->hasMany(Product::class, 'category_id');
}

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
