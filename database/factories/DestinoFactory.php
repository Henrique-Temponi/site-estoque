<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Destino;
use Faker\Generator as Faker;

$factory->define(Destino::class, function (Faker $faker) {
    return [
        'nome' => $faker->word(),
        'abreviacao' => $faker->regexify('[A-Z]{2}'),
    ];
});
