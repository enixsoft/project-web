<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'zamestnanec_id' => "1087",
            'username' => "peterkondrla",
            'password' => bcrypt('heslo123'),
            'email' => "peter@peter.sk",
            'role' => "admin",
            'remember_token' => null,         
        ]);
    }
}
