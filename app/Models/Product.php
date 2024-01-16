<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
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
