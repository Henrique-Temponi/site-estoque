<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Compahia;
use App\Destino;
use App\Flight;
use Faker\Generator as Faker;

$factory->define(Flight::class, function (Faker $faker) {
    return [
        'voo' => $faker->regexify('[A-Z]{5}'),
        'destino_id' => $faker->randomElement( Destino::all()->pluck('id')->toArray() ),
        'compahia_id' => $faker->randomElement( Compahia::all()->pluck('id')->toArray() ),
        'turno' => $faker->numberBetween(1,3),
    ];
});
