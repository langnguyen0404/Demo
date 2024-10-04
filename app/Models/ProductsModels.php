<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModels extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id',
        'img',
        'name',
        'price',
        'quantity',
        'category_id',
    ];

    public function scopeAllProducts($query)
    {
        return $query;
    }
    public function scopeNewProducts($query, $limit)
    {
        return $query->orderBy('id', 'desc')->limit($limit)->get();
    }
    public function  scopeBestSellerProducts($query,$limit)
    {
        return $query->where('sold', '>=', 40)->orderBy('sold', 'desc')->limit($limit)->get();
    }
    public function  scopeViewsProducts($query,$limit)
    {
        return $query->where('view', '>', 50)->orderBy('view', 'desc')->limit($limit)->get();
    }
}