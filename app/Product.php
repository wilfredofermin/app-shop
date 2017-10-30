<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Product pertence a una Category
    public function category(){
        return $this->belongsTo(Category::class);
    }
    //Producto puede tener varias images
    Public function images(){
        return $this->hasMany(ProductImage::class);
    }

}
