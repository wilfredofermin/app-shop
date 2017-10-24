<?php

use Faker\Generator as Faker;
use App\Product;
$factory->define(Product::class, function (Faker $faker) {
    return [
    'name'=>substr($faker->sentence(3),0,-1),// Usamos substr para eliminar el ultimo caracter( 0: es el primier caracter -1: al ultimo)
    'description'=>$faker->sentence(10),
    'long_description'=>$faker->text(),
    'price'=>$faker->randomFloat(2,5,150),
     'category_id'=>$faker->numberBetween(1,5)
    ];
});
