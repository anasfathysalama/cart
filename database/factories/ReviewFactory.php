<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Cart;
use App\Model\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'cart_id' => function () {
            return Cart::all()->random();
        },
        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(0, 5),
    ];
});
