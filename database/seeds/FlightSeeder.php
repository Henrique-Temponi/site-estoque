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
                'voo'  => 'HDYED',
                'destino_id'   => 1,
                'compahia_id' => 2,
                'turno' => 1,
            ],
            [
                'voo'  => 'LDKEM',
                'destino_id'   => 2,
                'compahia_id' => 3,
                'turno' => 1,
            ],
            [
                'voo'  => 'POEMD',
                'destino_id'   => 1,
                'compahia_id' => 1,
                'turno' => 3,
            ],
            [
                'voo'  => 'UWNRO',
                'destino_id'   => 3,
                'compahia_id' => 3,
                'turno' => 2,
            ],
        ]);
    }
}
