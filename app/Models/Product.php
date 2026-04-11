<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
        'category_id', 'created_by', 'name', 'slug', 'sku',
        'description', 'price', 'sale_price', 'image',
        'stock', 'unit', 'status', 'is_featured'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Full image URL helper
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('products/' . $this->image) : null;
    }
}