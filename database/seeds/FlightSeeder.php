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

        DB::table('flights')->insert([
            [
                'voo'  => 'ESDEC',
                'destino'   => 'ES',
            ],
            [
                'voo'  => 'YEUDC',
                'destino'   => 'XC',
            ],
            [
                'voo'  => 'YEET',
                'destino'   => 'RT',
            ],
            [
                'voo'  => 'FACVR',
                'destino'   => 'HG',
            ],
            [
                'voo'  => 'EOSPC',
                'destino'   => 'BH',
            ],
            [
                'voo'  => 'EOSPC',
                'destino'   => 'HC',
            ],
            [
                'voo'  => 'EOSPC',
                'destino'   => 'BH',
            ],
            [
                'voo'  => 'EOSPC',
                'destino'   => 'BH',
            ],
            [
                'voo'  => 'EOSPC',
                'destino'   => 'ED',
            ],
            [
                'voo'  => 'EOSPC',
                'destino'   => 'BH',
            ],
            [
                'voo'  => 'EOSPC',
                'destino'   => 'FE',
            ],
            [
                'voo'  => 'EEAPC',
                'destino'   => 'HG',
            ],
            [
                'voo'  => 'EOSCE',
                'destino'   => 'BH',
            ],
            [
                'voo'  => 'XAESC',
                'destino'   => 'BV',
            ],
            [
                'voo'  => 'EEASC',
                'destino'   => 'ES',
            ],
            [
                'voo'  => 'POESC',
                'destino'   => 'UI',
            ],
        ]);
    }
}
