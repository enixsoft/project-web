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
            'username' => "fero",
            'password' => bcrypt('heslo123'),
            'email' => "fero@fero.sk",
            'role' => "admin",
            'remember_token' => null,         
        ]);
    }
}
