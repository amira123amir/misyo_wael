<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\Category;
use APP\Models\CartProduct;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'size',
        'quantity',
        'color',
        'material',
        'type',
        'price',
        'discount',
        'category_id',
        

    ];

    
    public function category(){
        return  $this->belongsTo(Category::class);
    }

    public function carts(){
        return  $this->hasMany(CartProduct::class);
    }



}