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
                'email' => 'dev@dev.com',
                'password' => bcrypt('dev'),
                'admin' => TRUE,
            ],
            [
                'name'  => 'dev2',
                'email' => 'dev2@dev.com',
                'password' => bcrypt('dev2'),
                'admin' => FALSE,
            ]
        ]);
    }
}
