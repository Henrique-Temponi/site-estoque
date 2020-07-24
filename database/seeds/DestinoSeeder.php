<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinos')->insert([
            [
                'nome' => 'Rio De Janeiro',
                'abreviacao' => 'RJ'
            ],
            [
                'nome' => 'Belo Horizonte',
                'abreviacao' => 'BH'
            ],
            [
                'nome' => 'Sao Paulo',
                'abreviacao' => 'SP'
            ],
        ]);
    }
}
