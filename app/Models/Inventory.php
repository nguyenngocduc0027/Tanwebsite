<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'total_quantity',
        'in_quantity',
        'out_quantity',
        'order_quantity',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
