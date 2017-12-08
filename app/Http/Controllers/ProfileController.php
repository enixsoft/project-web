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

        return redirect()->action('EmployeeController@detail_about_record', ['over_id' => $user->zamestnanec_id]);

    
    }

  

}

 



?>
