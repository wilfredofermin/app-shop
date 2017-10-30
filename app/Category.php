<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Una category tiene muchos Products
   public function products(){
       return $this->hasMany(Product::class);
   }
}
