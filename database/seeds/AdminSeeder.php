<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'zamestnanec_id' => null,
            'username' => "peterkondrla",
            'password' => bcrypt('heslo123'),
            'email' => "peter@peter.sk",
            'role' => "admin",
            'remember_token' => null,         
        ]);
    }
}

