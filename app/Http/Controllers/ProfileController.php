<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Routing\Controller;
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

}

 



?>
