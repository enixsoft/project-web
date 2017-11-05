<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Input;
use App\Models\Zamestnanec;
use App\Models\Profile;
use App\Models\Publications;
use App\Models\Projects;
use App\Models\Activities;


class MultiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        //
            

            $arrayidzamestnanci = DB::select('select id from zamestnanci where id < 2416 or id > 2416', [1]);

            //
            //2416 NEFUNGUJE
            //

            foreach($arrayidzamestnanci as $idzam)          
            {           
                  

            $pdescription="";
            $pconsultation_hours="";
            $peducation="";

            $json = file_get_contents("https://ukfprofil.teacher.sk/get-teacher/".$idzam->id);
            //$json = File::get("public/json.txt");
            //$currentid = 1440;
            $data = json_decode($json, true);

            

            
            if(isset($data['profile']['description']))
            {   
                $pdescription=$data['profile']['description'];
            }

            if(isset($data['profile']['consultation_hours']))
            {   
                $pconsultation_hours=$data['profile']['consultation_hours'];
            }

            if(isset($data['profile']['education']))
            {   
                $peducation=$data['profile']['education'];
            }
            

            
            
            
            Profile::create(array('zamestnanec_id' => $idzam->id,
                    'description' => $pdescription,
                    'consultation_hours' => $pconsultation_hours,
                    'education' => $peducation));

         foreach($data['publications'] as $publikacia)
            {

            $pISBN="";
            $ptitle="";
            $psub_title="";
            $pall_authors="";
            $ptype="";
            $ppublisher="";
            $ppages="";
            $pyear="";
            $pcode="";


            if(isset($publikacia['ISBN']))
            {
              $pISBN=$publikacia['ISBN'];
            }
             if(isset($publikacia['title']))
            {
              $ptitle=$publikacia['title'];
            }
             if(isset($publikacia['sub_title']))
            {
              $psub_title=$publikacia['sub_title'];
            }
             if(isset($publikacia['all_authors']))
            {
              $pall_authors=$publikacia['all_authors'];
            }
             if(isset($publikacia['type']))
            {
              $ptype=$publikacia['type'];
            }
             if(isset($publikacia['publisher']))
            {
              $ppublisher=$publikacia['publisher'];
            }
             if(isset($publikacia['pages']))
            {
              $ppages=$publikacia['pages'];
            }
             if(isset($publikacia['year']))
            {
              $pyear=$publikacia['year'];
            }
             if(isset($publikacia['code']))
            {
              $pcode=$publikacia['code'];
            }                           
            




            Publications::create(array('zamestnanec_id' => $idzam->id,
                    'ISBN' => $pISBN,
                    'title' => $ptitle,
                    'sub_title' => $psub_title,
                    'all_authors' => $pall_authors,
                    'type' => $ptype,
                    'publisher' => $ppublisher,
                    'pages' => $ppages,
                    'year' => $pyear,
                    'code' => $pcode
                ));
            
              
            } 
            

           foreach($data['projects'] as $project)
            {

            
            $ptitle="";
            $pyear_from="";
            $pyear_end="";
            $preg_number="";
     


            if(isset($project['title']))
            {
              $ptitle=$project['title'];
            }
             if(isset($project['year_from']))
            {
              $pyear_from=$project['year_from'];
            }
             if(isset($project['year_end']))
            {
              $pyear_end=$project['year_end'];
            }
            if(isset($project['reg_number']))
            {
              $preg_number=$project['reg_number'];
            }
                 
                 
            




            Projects::create(array('zamestnanec_id' => $idzam->id,
                    'title' => $ptitle,
                    'year_from' => $pyear_from,
                    'year_end' => $pyear_end,
                    'reg_number' => $preg_number                
                ));
            
              
            }


            foreach($data['activities'] as $activity)
            {

            
            $aID="";
            $adate="";
            $atitle="";
            $acountry="";
            $atype="";
            $acategory="";
            $aall_authors="";
            
     

            if(isset($activity['ID']))
            {
              $aID=$activity['ID'];
            }
             if(isset($activity['date']))
            {
              $adate=$activity['date'];
            }
             if(isset($activity['title']))
            {
              $atitle=$activity['title'];
            }
            if(isset($activity['country']))
            {
              $acountry=$activity['country'];
            }
            if(isset($activity['type']))
            {
              $atype=$activity['type'];
            }
                 
            if(isset($activity['category']))
            {
              $acategory=$activity['category'];
            }
                 
            if(isset($activity['all_authors']))
            {
              $aall_authors=$activity['all_authors'];
            }
                 
                 
                 
            




            Activities::create(array('zamestnanec_id' => $idzam->id,
                    'ID' => $aID,
                    'date' => $adate,
                    'title' => $atitle,
                    'country' => $acountry,
                    'type' => $atype,
                    'category' => $acategory, 
                    'all_authors' => $aall_authors           
                ));
            
              
            }                        



    }
}

}

