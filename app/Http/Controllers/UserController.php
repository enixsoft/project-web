<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request; 

class UserController extends Controller
{
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





}





?>
