<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    //
       protected $fillable = [
        'order_id',
        'product_id',
        'name',
        'image',
        'price',
        'quantity',
        'subtotal',
    ];

    public function order()
{
    return $this->belongsTo(Order::class);
}

}
