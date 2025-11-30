<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status'
    ];
   
    // Auto-generate slug on create
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = static::generateSlug($category->name);
        });
    }
    
    // Generate unique slug
    public static function generateSlug($name)
    {
        $slug = Str::slug($name);
        $count = static::where('slug', 'LIKE', "{$slug}%")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }

    // Relationship: A Category has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
