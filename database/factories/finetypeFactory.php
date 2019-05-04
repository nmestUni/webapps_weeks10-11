<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\FineType;
use Faker\Generator as Faker;

$factory->define(FineType::class, function (Faker $faker) {
    return [
        'fineName' => $faker->realText(rand(20, 50), rand(4, 5))
    ];
});



