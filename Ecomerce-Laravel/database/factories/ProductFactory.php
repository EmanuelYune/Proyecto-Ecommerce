<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
            'nombre' => $faker->word,
            'descripcion' => $faker->sentence(10),
            'precio' => $faker->randomFloat(2,5,150),
            'stock' => $faker->randomDigitNotNull,
            'imagen' => $faker->imageURL(700,400),
            'category_id' => $faker->numberBetween(1,5)
    ];
});
