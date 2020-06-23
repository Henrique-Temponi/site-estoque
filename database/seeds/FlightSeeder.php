<?php

use Illuminate\Database\Seeder;
use App\Flight;

class FlightSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flight = new Flight();
        $flight->user_id = 1;
        $flight->compania = 'LATAM';
        $flight->origem = 'Belo Horizonte';
        $flight->destino = 'Sao Paulo';
        $flight->horas = 1;
        $flight->save();
    }
}
