<?php

use Illuminate\Database\Seeder;
use App\Models\Zamestnanec;

class ZamestnanciTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

            $json = File::get("public/json.txt");
            $data = json_decode($json);

            foreach($data as $obj)
            {
                Zamestnanec::create(array('id' =>$obj->id,
                    'name' => $obj->name,
                    'department' => $obj->department,
                    'dep_acronym' => $obj->dep_acronym,
                    'faculty' => $obj->faculty,
                    'faculty_acronym' => $obj->faculty_acronym,
                    'description' => $obj->description));
            }
    }
}
