<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'productname',
        'size',
        'description',
        'price',
        'stock',
        'image',
        'slug',
        'brand',
        'weight',
        'tax',
        'color',
        'sku',
        'category_id',
    ];
    public function category()
{
    return $this->belongsTo(Category::class);
}
public function images()
{
    return $this->hasMany(ProductImage::class);
}
}