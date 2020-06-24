<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $usuario = new User();
        // $usuario->name = "dev";
        // $usuario->password = bcrypt("dev");
        // $usuario->save();

        DB::table('users')->insert([
            [
                'name'  => 'dev',
                'password' => bcrypt('dev'),
            ],
            [
                'name'  => 'dev2',
                'password' => bcrypt('dev2'),
            ]
        ]);
    }
}
