<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => "admin",
            'email' => "admin".'@test.com',
            'password' => Hash::make('12345'),
            "rol" => 1
        ]);

        DB::table('users')->insert([
            'name' => "admin2",
            'email' => "admin2".'@test.com',
            'password' => Hash::make('123456'),
            "rol" => 2
        ]);

    }
}
