<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Activities;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;             // added due to using in function

class ActivitiesController extends Controller
{

   public function getview()
    {
    	$stlpec1 = "ID";
      	$stlpec2 = "Dátum";
      	$stlpec3 = "Typ";
      	$stlpec4 = "Autori";

      	$variable1 = "zamestnanec_id";
      	$variable2 = "date";
     	 $variable3 = "type";
      	$variable4 = "all_authors";



        $autentifikacia = Auth::user();
        $user = DB::table('activities')->select('activities.zamestnanec_id','activities.date','activities.type', 'activities.all_authors')->where('activities.zamestnanec_id', '=', $autentifikacia->zamestnanec_id)
            ->get();

    //    return view("activities", ['activities' => $activities]);


        if(count($user)>0)
        {
            return view("activities", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
        }

        else
       	{
       		 return view("activities", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
       	}
    }

}

 



?>
