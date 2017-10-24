<?php

use Illuminate\Database\Seeder;

class DatabazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('databaza')->insert([
        	'meno' => "Test",
        	'priezvisko' => "Testovy",
        	'email' => "test@ukf.sk",
        	'heslo' => bcrypt('secret'),
        	'vek' => 30,
        ]);
    }
}
