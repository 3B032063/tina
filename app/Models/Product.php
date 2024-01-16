<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    public function getImageUrlAttribute()
    {
        return Storage::disk('public')->url($this->attributes['image']);
    }

    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
        'status',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }


    public function OrderItem()
    {
        return $this->hasMany(OrderItem::class);
    }
}
