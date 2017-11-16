<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Projects;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;             // added due to using in function

class ProjectController extends Controller
{

   public function getview()
    {
        $user = Auth::user();
        $projects = DB::table('projects')->select('projects.zamestnanec_id','projects.title','projects.year_from', 'projects.year_end', 'projects.reg_number')->where('projects.zamestnanec_id', '=', $user->zamestnanec_id)
            ->first();
        return view("projects", ['projects' => $projects]);
    }

}

 



?>
