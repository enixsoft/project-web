<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use Auth;

use App\Models\Publications;


use Validator;

use Redirect;

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
            


            $premenna0 = "id";

            $premenna1 = "id";
            $premenna2 = "name";
            $premenna3 = "department";
            $premenna4 = "dep_acronym";
            $premenna5 = "faculty";
            $premenna6 = "faculty_acronym";
            $premenna7 = "description";       


    
            $zaznam = DB::table("zamestnanci")
            ->where('id', '=', $over_id)
            ->get();

            foreach ($zaznam as $z)
            {
              $premenna0=$z->id;
            }
        


     
          
         return view("details.employee", compact('controller', 'zaznam', 'nazov_popisu', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'stlpec5', 'stlpec6', 'stlpec7', 'premenna0', 'premenna1', 'premenna2', 'premenna3', 'premenna4', 'premenna5', 'premenna6', 'premenna7'));
        
    }



    public function update_record(Request $request)
    {
        //$previous_room = url()->previous();

          $validator = Validator::make($request->all(), [
            'textarea1' => 'required|string|min:2|max:750',        //set it to whatever you like
            'textarea2' => 'required|string|min:2|max:750',
            //'textarea_three' =>  'required|string|min:2|max:750'
        ]);


  //      switch ($previous_room) {

    //    case 'http://localhost/project-web/public/'.'publications':

          DB::table('zamestnanci')
            ->where('zamestnanci.id', '=', $request->get('id'))
            ->update(['zamestnanci.id' => $request->get('id'), 'zamestnanci.name' => $request->get('textarea1'), 'zamestnanci.department' => $request->get('textarea2'),
              'zamestnanci.dep_acronym' => $request->get('textarea3'), 'zamestnanci.faculty' => $request->get('textarea4'), 'zamestnanci.faculty_acronym' => $request->get('textarea5'),
              'zamestnanci.description' => $request->get('textarea6'),


          ]);



       return Redirect::back();
}

   

    



       




}