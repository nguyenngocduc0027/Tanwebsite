<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'customer_name', 'customer_email',
        'customer_phone', 'customer_address', 'total_amount','customer_note', 'status'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
