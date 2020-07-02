<?php

use App\Airport;
use Illuminate\Database\Seeder;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            ['name' => 'GRU'],
            ['name' => 'BRU'],
            ['name' => 'VAR'],
        ];

        // $airport = new Airport($dados);
        // $airport->save();

        Airport::insert($dados);
    }
}
