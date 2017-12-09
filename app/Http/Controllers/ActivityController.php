<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Activities;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;             // added due to using in function

use Illuminate\Support\Facades\Input;

class ActivityController extends Controller
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


     public function detail_about_record($over_id)
    {

            $controller="ActivityController@update_record";
                
          


            $stlpec1 = "ID Aktivity";            
            $stlpec2 = "ID";
            $stlpec3 = "Dátum";
            $stlpec4 = "Názov"; 
            $stlpec5 = "Krajina"; 
            $stlpec6 = "Typ"; 
            $stlpec7 = "Kategória"; 
            $stlpec8 = "Autori"; 
            
         
            


            $premenna0 = "zamestnanec_id";

            $premenna1 = "id_aktivita";
            $premenna2 = "ID";
            $premenna3 = "date";
            $premenna4 = "title";
            $premenna5 = "country";
            $premenna6 = "type";
            $premenna7 = "category";
            $premenna8 = "all_authors";

            



    
            $zaznam = DB::table("activities")
            ->where('id_aktivita', '=', $over_id)
            ->get();

            foreach ($zaznam as $z)
            {
              $premenna0=$z->zamestnanec_id;
            }
        


     
          
         return view("details.activity", compact('controller', 'zaznam', 'nazov_popisu', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'stlpec5', 'stlpec6', 'stlpec7', 'stlpec8', 'premenna0', 'premenna1', 'premenna2', 'premenna3', 'premenna4', 'premenna5', 'premenna6', 'premenna7', 'premenna8'));
        
    }



    public function update_record(Request $request)
    {
        //$previous_room = url()->previous();
        /*
          $validator = Validator::make($request->all(), [
            'textarea1' => 'required|string|min:2|max:750',        //set it to whatever you like
            'textarea2' => 'required|string|min:2|max:750',
            'textarea3' => 'required|string|min:2|max:750',
            'textarea4' => 'required|string|min:2|max:750',
            'textarea5' => 'required|string|min:2|max:750',
            'textarea6' => 'required|string|min:2|max:750',
            'textarea7' => 'required|string|min:2|max:750',
          
   
            //'textarea_three' =>  'required|string|min:2|max:750'
        ]);

        */
               $textAreas =  array ($textarea1 = $request->get('textarea1'),       
       $textarea2 = $request->get('textarea2'), 
       $textarea3 = $request->get('textarea3'),
       $textarea4 = $request->get('textarea4'),
       $textarea5 = $request->get('textarea5'),
       $textarea6 = $request->get('textarea6'),
       $textarea7 = $request->get('textarea7')
                            );


     //NULL znefunkcni vyhladavanie 

      foreach ($textAreas as $key => &$value) 
       {
                      
              if (is_null($value)) 
               {
                  $value = "";
        
               }
        
       }
  

          DB::table('activities')
            ->where('activities.id_aktivita', '=', $request->get('id'))
            ->update(['activities.id_aktivita' => $request->get('id'), 'activities.ID' => $textAreas[0], 'activities.date' => $textAreas[1],
              'activities.title' => $textAreas[2], 'activities.country' => $textAreas[3], 'activities.type' => $textAreas[4],
              'activities.category' => $textAreas[5], 'activities.all_authors' => $textAreas[6]




          ]);



       return Redirect::back();
    }

    
    public function search_activity(Request $request)
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


       $Zamestnanec_id = Input::get('zamestnanec_id');
       $Date = $request->date; 
       $Title = $request->title;
       $Country = $request->country;
       $Type = $request->type;
       $Category = $request->category;
       $All_authors = Input::get('all_authors');
       



        $user = DB::table('activities') ->select('id_aktivita', 'ID', 'date','type', 'all_authors')       // SQL query
            ->where('zamestnanec_id', 'like','%'.$Zamestnanec_id.'%')
            ->where('date', 'like', '%'.$Date.'%')
            ->where('title', 'like', '%'.$Title.'%')
            ->where('country', 'like', '%'.$Country.'%')
            ->where('type', 'like', '%'.$Type.'%')
            ->where('category', 'like', '%'.$Category.'%')
            ->where('all_authors', 'like', '%'.$All_authors.'%')
            ->get();
           

             

         return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable0', 'variable1', 
              'variable2', 'variable3', 'variable4', 'resultCategory'));


    }


}

 



?>
