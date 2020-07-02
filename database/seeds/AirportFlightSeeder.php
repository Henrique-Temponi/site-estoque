<?php

use App\Flight;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportFlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airports_flights')->insert([
            [
                'flight_id'   => 1,
                'airport_id'  => 1,
            ],
            [
                'flight_id'   => 1,
                'airport_id'  => 2,
            ],
            [
                'flight_id'   => 2,
                'airport_id'  => 2,
            ],
            [
                'flight_id'   => 2,
                'airport_id'  => 3,
            ],
            [
                'flight_id'   => 3,
                'airport_id'  => 1,
            ],
            [
                'flight_id'   => 3,
                'airport_id'  => 1,
            ],
            [
                'flight_id'   => 4,
                'airport_id'  => 2,
            ],
            [
                'flight_id'   => 1,
                'airport_id'  => 3,
            ]
        ]);

        dd(Flight::find(1)->airports);
    }

}
