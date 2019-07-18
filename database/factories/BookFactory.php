<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(\App\Book::class, function (Faker $faker) {
    return [
        'writer' => $faker->name,
        'book_name' => $faker->word,
        'price' => 50,
        'type' => $faker->name,
    ];
});
