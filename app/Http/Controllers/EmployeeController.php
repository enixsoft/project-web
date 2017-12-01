<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Auth;


use App\Models\Publications;


use Validator;



use DB;             // added due to using in function


class EmployeeController extends Controller
{

 public function detail_about_record($over_id)
    {

            $controller="EmployeeController@update_record";
                
            $nazov_popisu = "Zamestnanci";
            $tabulka = 'zamestnanci';


            $stlpec1 = "ID zamestnanca";
            $stlpec2 = "Meno";
            $stlpec3 = "Katedra"; 
            $stlpec4 = "Skratka katedry"; 
            $stlpec5 = "Fakulta"; 
            $stlpec6 = "Skratka fakulty"; 
            $stlpec7 = "Popis";
            $stlpec8 = "Doplňujúci popis";
            $stlpec9 = "Konzultačné hodiny";
            $stlpec10 = "Vzdelanie";
            



            $premenna0 = "id";

            $premenna1 = "id";
            $premenna2 = "name";
            $premenna3 = "department";
            $premenna4 = "dep_acronym";
            $premenna5 = "faculty";
            $premenna6 = "faculty_acronym";
            $premenna7 = "description";
            $premenna8 = "description";
            $premenna9 = "consultation_hours";
            $premenna10 = "education";
                          


    
            $zaznam = DB::table("zamestnanci")
            ->where('id', '=', $over_id)
            ->get();

             $profile = DB::table("profile")
            ->where('zamestnanec_id', '=', $over_id)
            ->get();

            foreach ($zaznam as $z)
            {
              $premenna0=$z->id;
              $commentsAllowed=$z->comments_allowed;

              $comments = DB::table("comments")
                  ->join('users', 'comments.user_who_commented_id', '=', 'users.id')
                  ->where('commented_on_id', '=', $over_id)
                  ->select('comments.comment', 'comments.created_at', 'users.username')
                  ->orderBy('comments.created_at', 'desc')
                  ->get();



              




            }


           


     
          
         return view("details.employee", compact('controller', 'comments', 'commentsAllowed', 'zaznam', 'profile', 'nazov_popisu', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'stlpec5', 'stlpec6', 'stlpec7', 'stlpec8', 'stlpec9', 'stlpec10', 'premenna0', 'premenna1', 'premenna2', 'premenna3', 'premenna4', 'premenna5', 'premenna6', 'premenna7', 'premenna8', 'premenna9', 'premenna10'));
        
    }



     public function get_employee_publications($over_id)
    {

        $resultCategory="publications";    
        

        $stlpec1 = "Názov";
        $stlpec2 = "ISBN";
        $stlpec3 = "Autori";
        $stlpec4 = "Vydavateľ";

      //  $variable1 = "zamestnanec_id";
        $variable0 = "id";
        $variable1 = "title";
        $variable2 = "ISBN";
        $variable3 = "all_authors";
        $variable4 = "publisher";

   //   $variable4 = "publisher";



        $user = DB::table('publications') ->select('id', 'ISBN','title', 'all_authors', 'publisher')       // SQL query
            ->where('zamestnanec_id', '=', $over_id)
            ->get();
           

             

     return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable0', 'variable1', 
              'variable2', 'variable3', 'variable4', 'resultCategory'));
        
    }

    public function get_employee_projects($over_id)
    {

      $resultCategory="projects";

      $stlpec1 = "Názov";
      $stlpec2 = "ID Zamestnanca";
      $stlpec3 = "Od roku";
      $stlpec4 = "Do roku";

      $variable0 = "id";
      $variable1 = "title";
      $variable2 = "zamestnanec_id";
      $variable3 = "year_from";
      $variable4 = "year_end";




        $user = DB::table('projects') ->select('zamestnanec_id', 'id', 'title','year_from', 'year_end')       // SQL query
            ->where('zamestnanec_id', '=', $over_id)   
            ->get();
           

             

            return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable0', 'variable1', 
              'variable2', 'variable3', 'variable4', 'resultCategory'));
        
    }


        public function get_employee_activities($over_id)
    {

      $resultCategory="activities";

       
      $stlpec1 = "ID";
      $stlpec2 = "Dátum";
      $stlpec3 = "Typ";
      $stlpec4 = "Autori";

      $variable0 = "id_aktivita";
      $variable1 = "ID";
      $variable2 = "date";
      $variable3 = "type";
      $variable4 = "all_authors";



        $user = DB::table('activities') ->select('id_aktivita', 'ID', 'date','type', 'all_authors')       // SQL query
            ->where('zamestnanec_id', '=', $over_id)   
            ->get();
           
           

             

         return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable0', 'variable1', 
              'variable2', 'variable3', 'variable4', 'resultCategory'));
        
    }







    public function update_record(Request $request)
    {
        //$previous_room = url()->previous();
        /*
          $validator = Validator::make($request->all(), [
            'textarea1' => 'required|string|min:2|max:750',        //set it to whatever you like
            'textarea2' => 'required|string|min:2|max:750',
            //'textarea_three' =>  'required|string|min:2|max:750'
        ]);
            */



       $textAreas =  array ($textarea1 = $request->get('textarea1'),       
       $textarea2 = $request->get('textarea2'), 
       $textarea3 = $request->get('textarea3'),
       $textarea4 = $request->get('textarea4'),
       $textarea5 = $request->get('textarea5'),
       $textarea6 = $request->get('textarea6')
                            );

       foreach ($textAreas as $key => &$value) 
       {
                      
              if (is_null($value)) 
               {
                  $value = "";
        
               }
        
       }




          DB::table('zamestnanci')
            ->where('zamestnanci.id', '=', $request->get('id'))
            ->update(['zamestnanci.id' => $request->get('id'), 'zamestnanci.name' => $textAreas[0], 'zamestnanci.department' => $textAreas[1],
              'zamestnanci.dep_acronym' => $textAreas[2], 'zamestnanci.faculty' => $textAreas[3], 'zamestnanci.faculty_acronym' => $textAreas[4],
              'zamestnanci.description' => $textAreas[5]


          ]);



       return Redirect::back();
}

   

    



       




}