<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Publications;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;             // added due to using in function

class PublicationsController extends Controller
{

   public function getview()
    {
    	//$stlpec1 = "Zamestnanec_ID";
        $stlpec1 = "poradove ID";
      	$stlpec2 = "ISBN";
      	$stlpec3 = "Názov";
      	$stlpec4 = "Vydavateľ";

       // $variable1 = "zamestnanec_id";
      	$variable1 = "id";
      	$variable2 = "ISBN";
      	$variable3 = "title";
      	$variable4 = "publisher";

        $autentifikacia = Auth::user();
        $user = DB::table('publications')->select('publications.id','publications.ISBN','publications.title', 'publications.publisher')->where('publications.zamestnanec_id', '=', $autentifikacia->zamestnanec_id)
            ->get();
            
       	if(count($user)>0)
        {
            return view("publications", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
        }

        else
       	{
       		 return view("publications", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
       	}
    }

}

 



?>
