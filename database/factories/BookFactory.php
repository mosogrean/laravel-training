<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Book;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'writer' => $faker->name,
        'book_name' => $faker->word,
        'price' => 50,
        'type' => $faker->text,
    ];
});
