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

        
        return app('App\Http\Controllers\EmployeeController')->detail_about_record($user->zamestnanec_id);

    }

  

}

 



?>
