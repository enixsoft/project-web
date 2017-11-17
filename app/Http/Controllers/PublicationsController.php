<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Publications;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;             // added due to using in function

class PublicationsController extends Controller
{

   public function getview()
    {
        $user = Auth::user();
        $publications = DB::table('publications')->select('publications.zamestnanec_id','publications.ISBN','publications.title', 'publications.sub_title', 'publications.all_authors','publications.type', 'publications.publisher', 'publications.pages','publications.year', 'publications.code')->where('publications.zamestnanec_id', '=', $user->zamestnanec_id)
            ->first();
            
        return view("publications", ['publications' => $publications]);
    }

}

 



?>
