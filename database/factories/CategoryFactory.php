<?php

use Faker\Generator as Faker;
use App\Category;
$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'=>ucfirst($faker->sentence(5)), // con ucfirst obtengo el primer caracter en mayusculas.
        'description'=>$faker->sentence(10),

    ];
});
