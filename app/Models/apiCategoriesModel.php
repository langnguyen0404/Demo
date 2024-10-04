<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apiCategoriesModel extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'id',
        'name',
    ];
    public function apiCategoriesModel(){
        return $this->belongsTo(apiCategoriesModel::class);
    }

}