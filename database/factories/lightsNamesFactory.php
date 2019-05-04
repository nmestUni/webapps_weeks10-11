<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\lightsname;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(lightsname::class, function (Faker $faker) {
    return [
        'name' =>  Str::random(10),
        'address' => $faker->address,
    ];
});
