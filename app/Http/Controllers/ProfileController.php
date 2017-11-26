<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;
use DB;             // added due to using in function

class ProfileController extends Controller
{

   public function getview()
    {
        $user = Auth::user();
        $profile = DB::table('profile')->select('profile.zamestnanec_id','profile.description','profile.consultation_hours', 'profile.education')->where('profile.zamestnanec_id', '=', $user->zamestnanec_id)
            ->first();
        return view("profile", ['profile' => $profile]);
    }

    public function update_record(Request $request)
    {
         $user = Auth::user();

         /*
        $validator = Validator::make($request->all(), [
            'description' => 'required|string|min:2|max:750', //set it to whatever you like
            'consultation_hours' => 'required|string|min:2|max:750',
            'education' =>  'required|string|min:2|max:750'
        ]);
        */

       $textAreas =  array ($textarea1 = $request->get('textarea1'),       
       $textarea2 = $request->get('textarea2'), 
       $textarea3 = $request->get('textarea3')
                            );


     //NULL znefunkcni vyhladavanie 

      foreach ($textAreas as $key => &$value) 
       {
                      
              if (is_null($value)) 
               {
                  $value = "";
        
               }
        
       }





       
            DB::table('profile')
            ->where('profile.zamestnanec_id', '=', $user->zamestnanec_id)
            ->update(['profile.description' => $textAreas[0], 'profile.consultation_hours' => $textAreas[1], 'profile.education' => $textAreas[2]]);


          return back()->with('success', 'Thank you for your hard work!');
         
     }

}

 



?>
