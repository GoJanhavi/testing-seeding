<?php

use Faker\Generator as Faker;

$factory->define(\App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['Ford','Honda','Toyota']),
        'model' => $faker->word,
        'year' => $faker->biasedNumberBetween(1908,2018, 'sqrt'),
    ];
});
