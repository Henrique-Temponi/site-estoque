<?php

use Illuminate\Database\Seeder;
use App\Flight;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $flight = new Flight();
        // $flight->user_id = 1;
        // $flight->compania = 'LATAM';
        // $flight->origem = 'Belo Horizonte';
        // $flight->destino = 'Sao Paulo';
        // $flight->horas = 1;
        // $flight->save();

        DB::table('Flights')->insert([
            [
                'user_id'   => 1,
                'compania'  => 'OPEDC',
                'origem'    => 'BH',
                'destino'   => 'SP',
                'horas'     => 1,
            ],
            [
                'user_id'   => 1,
                'compania'  => 'FAKEN',
                'origem'    => 'FH',
                'destino'   => 'SC',
                'horas'     => 3,
            ],
            [
                'user_id'   => 2,
                'compania'  => 'JUDSC',
                'origem'    => 'LE',
                'destino'   => 'VF',
                'horas'     => 1,
            ],
            [
                'user_id'   => 1,
                'compania'  => 'PEACD',
                'origem'    => 'OK',
                'destino'   => 'PW',
                'horas'     => 1,
            ]
        ]);
    }
}
