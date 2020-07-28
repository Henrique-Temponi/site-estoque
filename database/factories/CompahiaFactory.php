<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Compahia;
use Faker\Generator as Faker;

$factory->define(Compahia::class, function (Faker $faker) {
    return [
        'nome' => $faker->word(),
    ];
});
