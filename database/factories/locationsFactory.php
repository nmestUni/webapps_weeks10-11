<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\location;
use Faker\Generator as Faker;

$factory->define(location::class, function (Faker $faker) {
    return [
        'lightNameId' => $faker->unique()->numberBetween($min = 1, $max = 100),
        'coordinateX' => $faker->randomFloat(2, 0, 50),
        'coordinateY' => $faker->randomFloat(2, 0, 50),
    ];
});
