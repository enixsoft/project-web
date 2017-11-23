<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Projects;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;             // added due to using in function

class ProjectController extends Controller
{

   public function getview()
    {
  		 // $stlpec1 = "Zamestnanec_ID";

        $stlpec1 = "Poradové ID";
      	$stlpec2 = "Názov";
      	$stlpec3 = "Rok Vydania";
      	$stlpec4 = "Registračné číslo";

      	//$variable1 = "zamestnanec_id";

        $variable1 = "id";
      	$variable2 = "title";
      	$variable3 = "year_from";
      	$variable4 = "reg_number";

        $autentifikacia = Auth::user();
        $user = DB::table('projects')->select('projects.id','projects.title','projects.year_from', 'projects.reg_number')->where('projects.zamestnanec_id', '=', $autentifikacia->zamestnanec_id)
            ->get();
        
        if(count($user)>0)
        {
            return view("projects", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
        }

        else
       	{
       		 return view("projects", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
       	}
    }



         public function detail_about_record($over_id)
    {

            $controller="ProjectController@update_record";
                
            $nazov_popisu = "Zamestnanci";
            $tabulka = 'zamestnanci';


            $stlpec1 = "ID projektu";            
            $stlpec2 = "Názov";
            $stlpec3 = "Od roku";
            $stlpec4 = "Do roku"; 
            $stlpec5 = "Registračné číslo"; 
         
            


            $premenna0 = "zamestnanec_id";

            $premenna1 = "id";
            $premenna2 = "title";
            $premenna3 = "year_from";
            $premenna4 = "year_end";
            $premenna5 = "reg_number";

            



    
            $zaznam = DB::table("projects")
            ->where('id', '=', $over_id)
            ->get();

            foreach ($zaznam as $z)
            {
              $premenna0=$z->zamestnanec_id;
            }
        


     
          
         return view("details.project", compact('controller', 'zaznam', 'nazov_popisu', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'stlpec5', 'premenna0', 'premenna1', 'premenna2', 'premenna3', 'premenna4', 'premenna5'));
        
    }



    public function update_record(Request $request)
    {
        //$previous_room = url()->previous();

          $validator = Validator::make($request->all(), [
            'textarea1' => 'required|string|min:2|max:750',        //set it to whatever you like
            'textarea2' => 'required|string|min:2|max:750',
            'textarea3' => 'required|string|min:2|max:750',
            'textarea4' => 'required|string|min:2|max:750'
          
   
            //'textarea_three' =>  'required|string|min:2|max:750'
        ]);


  //      switch ($previous_room) {

    //    case 'http://localhost/project-web/public/'.'publications':

          DB::table('projects')
            ->where('projects.id', '=', $request->get('id'))
            ->update(['projects.id' => $request->get('id'), 'projects.title' => $request->get('textarea1'), 'projects.year_from' => $request->get('textarea2'),
              'projects.year_end' => $request->get('textarea3'), 'projects.reg_number' => $request->get('textarea4')



          ]);



       return Redirect::back();
}


}

 



?>
