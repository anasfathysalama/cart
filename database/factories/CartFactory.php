<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Cart;
use Faker\Generator as Faker;

$factory->define(Cart::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->paragraph,
        'price' => $faker->numberBetween(100, 700),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(5, 20),
    ];
});
