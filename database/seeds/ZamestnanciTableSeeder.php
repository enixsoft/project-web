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

            
            $json = file_get_contents("https://ukfprofil.teacher.sk/get-teachers");
           
            $data = json_decode($json);

            foreach($data as $obj)
            {
                Zamestnanec::create(array('id' =>$obj->id,
                    'name' => $obj->name,
                    'department' => $obj->department,
                    'dep_acronym' => $obj->dep_acronym,
                    'faculty' => $obj->faculty,
                    'faculty_acronym' => $obj->faculty_acronym,
                    'description' => $obj->description,
                    'comments_allowed' => 0
                ));
            }
    }
}
