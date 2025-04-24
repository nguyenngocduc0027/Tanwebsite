<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'date',
        'subtitle',
        'author_id',
        'content',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
