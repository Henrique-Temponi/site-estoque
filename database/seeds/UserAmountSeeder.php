<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_amount_month')->insert([
            'Jan' => 0,
        ]);
    }
}
