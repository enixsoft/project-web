<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Publications;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;             // added due to using in function

class PublicationController extends Controller
{

   public function getview()
    {
    	//$stlpec1 = "Zamestnanec_ID";
       
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



     public function detail_about_record($over_id)
    {

            $controller="PublicationController@update_record";
                
            $nazov_popisu = "Zamestnanci";
            $tabulka = 'zamestnanci';


            $stlpec1 = "ID publikácie";            
            $stlpec2 = "ISBN";
            $stlpec3 = "Názov";
            $stlpec4 = "Podtitul"; 
            $stlpec5 = "Autori"; 
            $stlpec6 = "Typ"; 
            $stlpec7 = "Vydavateľ"; 
            $stlpec8 = "Počet strán"; 
            $stlpec9 = "Rok vydania"; 
            $stlpec10 = "Kód"; 
            


            $premenna0 = "zamestnanec_id";

            $premenna1 = "id";
            $premenna2 = "ISBN";
            $premenna3 = "title";
            $premenna4 = "sub_title";
            $premenna5 = "all_authors";
            $premenna6 = "type";
            $premenna7 = "publisher";
            $premenna8 = "pages";
            $premenna9 = "year";
            $premenna10 = "code";
            



    
            $zaznam = DB::table("publications")
            ->where('id', '=', $over_id)
            ->get();

            foreach ($zaznam as $z)
            {
              $premenna0=$z->zamestnanec_id;
            }
        


     
          
         return view("details.publication", compact('controller', 'zaznam', 'nazov_popisu', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'stlpec5', 'stlpec6', 'stlpec7', 'stlpec8', 'stlpec9', 'stlpec10', 'premenna0', 'premenna1', 'premenna2', 'premenna3', 'premenna4', 'premenna5', 'premenna6', 'premenna7', 'premenna8', 'premenna9', 'premenna10'));
        
    }



    public function update_record(Request $request)
    {
        //$previous_room = url()->previous();

          $validator = Validator::make($request->all(), [
            'textarea1' => 'required|string|min:2|max:750',        //set it to whatever you like
            'textarea2' => 'required|string|min:2|max:750',
            'textarea3' => 'required|string|min:2|max:750',
            'textarea4' => 'required|string|min:2|max:750',
            'textarea5' => 'required|string|min:2|max:750',
            'textarea6' => 'required|string|min:2|max:750',
            'textarea7' => 'required|string|min:2|max:750',
            'textarea8' => 'required|string|min:2|max:750',
            'textarea9' => 'required|string|min:2|max:750'
            //'textarea_three' =>  'required|string|min:2|max:750'
        ]);


  //      switch ($previous_room) {

    //    case 'http://localhost/project-web/public/'.'publications':

          DB::table('publications')
            ->where('publications.id', '=', $request->get('id'))
            ->update(['publications.id' => $request->get('id'), 'publications.ISBN' => $request->get('textarea1'), 'publications.title' => $request->get('textarea2'),
              'publications.sub_title' => $request->get('textarea3'), 'publications.all_authors' => $request->get('textarea4'), 'publications.type' => $request->get('textarea5'),
              'publications.publisher' => $request->get('textarea6'), 'publications.pages' => $request->get('textarea7'), 'publications.year' => $request->get('textarea8'),
              'publications.code' => $request->get('textarea9')



          ]);



       return Redirect::back();
}


}

 



?>
