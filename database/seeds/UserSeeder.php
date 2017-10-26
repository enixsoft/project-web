<?php

use Illuminate\Database\Seeder;

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
            'meno' => "Jozef",
            'priezvisko' => "Mrkvicka",
            'pristupove_prava' => "admin",
            'vek' => 30,
        ]);
    }
}