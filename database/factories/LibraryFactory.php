<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Library;
use Faker\Generator as Faker;

$factory->define(Library::class, function (Faker $faker) {
    return [
        'titel' => $faker->realText(10),
        'beschreibung' => $faker->realText(30)
    ];
});
