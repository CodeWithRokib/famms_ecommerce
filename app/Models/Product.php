<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'subcategory_name',
        'name',
        'price',
        'quantity',
        'description',
        'code',
        'discount',
        'image',
        'status',
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}