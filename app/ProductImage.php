<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //PrductImage Pertenece a un Products
   public function products(){
       return $this->belongsTo(Product::class);
   }
}
