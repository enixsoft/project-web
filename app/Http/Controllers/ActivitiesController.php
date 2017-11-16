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
        $user = Auth::user();
        $activities = DB::table('activities')->select('activities.zamestnanec_id','activities.ID','activities.date', 'activities.title', 'activities.country','activities.type', 'activities.category', 'activities.all_authors')->where('activities.zamestnanec_id', '=', $user->zamestnanec_id)
            ->first();
        return view("activities", ['activities' => $activities]);
    }

}

 



?>
