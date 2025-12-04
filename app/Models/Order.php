<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    //
  use HasFactory;

    // Mass-assignable fields
    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_address',
        'customer_say',
        'total',
        'status',
    ];

    // Optionally cast fields
    protected $casts = [
        'total' => 'decimal:2',
    ];
public function items()
{
    return $this->hasMany(OrderItem::class);
}
}
