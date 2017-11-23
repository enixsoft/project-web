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

class UserController extends Controller
{
    /*
    public function showAction($id)
    {
    	$user = User::find($id);
    	return view("update", ['user' => $user ]);
    }

    public function insertAction(Request $request)
    {
    	$firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('Email');
        $age = $request->input('age');

        $user = new User();
        $user->meno = $firstname;
        $user->priezvisko = $lastname;
        $user->email = $email;
        $user->vek = $age;
        $user->heslo = "";
        $user->save();
        return response()->view('adduser');                  
    }


     public function updateAction($id, Request $request)
    {
    	$user = User::where("id", "=", $id)->first();
    	$user->update(["vek" => $request->input('age'),
        'meno' => $request->input('firstname'),
        'priezvisko' => $request->input('lastname'),
         'email' => $request->input('Email')]);
         return redirect()->action('UserController@showAllAction');   
    }

        public function deleteAction($id)
    {
    	$user = User::find($id);
    	$user->delete();
        return redirect()->action('UserController@showAllAction');
    }

   public function showAllAction()
    {
    	$users = User::all();
    	return view("users", ['users' => $users]);
    }

   public function AddUserForm()
    {
      return view('adduser');
    }

*/

    public function showAllAction()
    {

    }


    public function login(Request $req)
    {
        $username = $req->input('meno');
        $password = $req->input('priezvisko');


        echo $checkLogin = DB::table('users')->where(['meno'=>$username,'priezvisko'=>$password])->get();
        if(count($checkLogin)>0)
        {
            $users = User::all();								// This variable is used in Users table view
            return view("all_records", ['users' => $users]);
        }

        else
        {
            echo "Name ".$username;
            echo "Surname ".$password;
            echo "Login not succeed!!!";
        }


    }

    public function store(Request $request)
    {
         $autentifikacia = Auth::user();


        $validator = Validator::make($request->all(), [
            'description' => 'required|string|min:2|max:750', //set it to whatever you like
            'consultation_hours' => 'required|string|min:2|max:750',
            'education' =>  'required|string|min:2|max:750'
        ]);

       
/*
            DB::table('profile')->insert(array(
                'profile.zamestnanec_id' => $autentifikacia->zamestnanec_id,
                'profile.description' => $request->get('description'),
                'profile.consultation_hours' => $request->get('consultation_hours'),
                'profile.education' => $request->get('education'),
            )) ->where('profile.zamestnanec_id', '=', $autentifikacia->zamestnanec_id);

*/
            DB::table('profile')
            ->where('profile.zamestnanec_id', '=', $autentifikacia->zamestnanec_id)
            ->update(['profile.description' => $request->get('description'), 'profile.consultation_hours' => $request->get('consultation_hours'), 'profile.education' => $request->get('education')]);


          return back()->with('success', 'Thank you for your hard work!');
         
     }


    public function detail_about_record($over_id)
    {

        //$previous_room = url()->previous();

      // switch ($previous_room) {

     //  case 'http://localhost/project-web/public/'.'publications':
                
            $nazov_popisu = "Publikácie";
            $tabulka = 'publications';


            $stlpec1 = "ID záznamu";
            $stlpec2 = "Názov";
            $stlpec3 = "Všetci autori"; 

            $premenna1 = "id";
            $premenna2 = "title";
            $premenna3 = "all_authors";        //  break;
/*
        case 'http://localhost/project-web/public/'.'projects';

           
            $nazov_popisu = "Projekty";
            $tabulka = 'projects';

            $stlpec1 = "ID projektu";
            $stlpec2 = "Názov";
            $stlpec3 = "Rok Vydania"; 

            $premenna1 = "id";
            $premenna2 = "title";
            $premenna3 = "year_from";  break;

            default:
                
                return view("details_of_record");
                break;
        }
*/


    
            $zaznam = DB::table("publications")
            ->where('id', '=', $over_id)
            ->get();
        


        if(count($zaznam)>0)
        {        
          return view("details_of_record", compact('zaznam', 'nazov_popisu', 'stlpec1', 'stlpec2', 'stlpec3', 'premenna1', 'premenna2', 'premenna3'));
        }

        else
        {
          
         return view("details_of_record", compact('zaznam', 'nazov_popisu', 'stlpec1', 'stlpec2', 'stlpec3', 'premenna1', 'premenna2', 'premenna3'));
          //  dd($profile->ISBN);
        }
    }



    public function update_record(Request $request)
    {
        //$previous_room = url()->previous();

          $validator = Validator::make($request->all(), [
            'textarea_one_id_record' => 'required|string|min:2|max:750',        //set it to whatever you like
            'textarea_two' => 'required|string|min:2|max:750',
            'textarea_three' =>  'required|string|min:2|max:750'
        ]);


  //      switch ($previous_room) {

    //    case 'http://localhost/project-web/public/'.'publications':

          DB::table('publications')
            ->where('publications.id', '=', $request->get('textarea_one_id_record'))
            ->update(['publications.id' => $request->get('textarea_one_id_record'), 'publications.title' => $request->get('textarea_two'), 'publications.all_authors' => $request->get('textarea_three')]);
/*
        break;

         case 'http://localhost/project-web/public/'.'projects':


          DB::table('projects')
            ->where('projects.id', '=', $request->get('textarea_one_id_record'))
            ->update(['projects.id' => $request->get('textarea_one_id_record'), 'projects.title' => $request->get('textarea_two'), 'projects.year_from' => $request->get('textarea_three')]);

        break;
        
         */


     //   }   


       return Redirect::back();
}


   

    



       




}