<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompahiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compahias')->insert([
            [
                'nome' => 'LATAM',
            ],
            [
                'nome' => 'GOL',
            ],
            [
                'nome' => 'KRT'
            ],
        ]);
    }
}
