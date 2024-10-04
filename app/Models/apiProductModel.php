<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apiProductModel extends Model
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
    public function apiCategoriesModel(){
        return $this->belongsTo(apiCategoriesModel::class);
    }

}