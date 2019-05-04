<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\car;
use Faker\Generator as Faker;

$factory->define(car::class, function (Faker $faker) {
    return [
        'stateNumber' => $faker->numerify("##")."-".$faker->lexify("???")."-".$faker->numerify("##"),
        'idNumber' => $faker->numerify(str_repeat('#', 11)),
        'color' => $faker->hexColor,
    ];
});
