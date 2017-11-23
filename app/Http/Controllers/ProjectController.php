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

}

 



?>
