<?php
namespace App\Http\Controllers;
use App\Models\User;

use App\Models\Zamestnanec;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

use Auth;

use Illuminate\Support\Facades\Input;
use App\Models\Publications;


use Validator;

use Redirect;

use DB;             

class SearchController extends Controller
{
	 public function searchProject(Request $request)     

     {

      $resultCategory="projects";

      $stlpec1 = "Názov";
      $stlpec2 = "ID Zamestnanca";
      $stlpec3 = "Od roku";
      $stlpec4 = "Do roku";

      $variable0 = "id";
      $variable1 = "title";
      $variable2 = "zamestnanec_id";
      $variable3 = "year_from";
      $variable4 = "year_end";


       $Zamestnanec = Input::get('zamestnanec');
       $Title = Input::get('title'); 
       $Year_from = Input::get('year_from');
       $Year_end = Input::get('year_end');
       $Reg_number = Input::get('reg_number');



        $user = DB::table('projects') ->select('zamestnanec_id', 'id', 'title','year_from', 'year_end')       // SQL query
            ->where('zamestnanec_id', 'like','%'.$Zamestnanec.'%')
            ->where('title', 'like', '%'.$Title.'%')
            ->where('year_from', 'like', '%'.$Year_from.'%')
            ->where('year_end', 'like', '%'.$Year_end.'%')
            ->get();
           

             

            return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable0', 'variable1', 
              'variable2', 'variable3', 'variable4', 'resultCategory'));

    }

     public function searchPublication(Request $request)     

     {


       $resultCategory="publications";

     //   $stlpec1 = "Zamestnanec_ID";

        $stlpec1 = "Názov";
        $stlpec2 = "ISBN";
        $stlpec3 = "Autori";
        $stlpec4 = "Vydavateľ";

      //  $variable1 = "zamestnanec_id";
        $variable0 = "id";
        $variable1 = "title";
        $variable2 = "ISBN";
        $variable3 = "all_authors";
        $variable4 = "publisher";

   //   $variable4 = "publisher";


       $isbn = Input::get('ISBN');
       $Title = Input::get('title'); 
       $Sub_title = Input::get('sub_title');
       $Author = Input::get('author');
       $Type = Input::get('type');
       $Publisher = Input::get('publisher');
       $Pages = Input::get('pages');
       $Year = Input::get('year');
       $Code = Input::get('code');



        $user = DB::table('publications') ->select('id', 'ISBN','title', 'all_authors', 'publisher')       // SQL query
            ->where('ISBN', 'like','%'.$isbn.'%')
            ->where('title', 'like', '%'.$Title.'%')
            ->where('sub_title', 'like', '%'.$Sub_title.'%')
            ->where('all_authors', 'like', '%'.$Author.'%')
            ->where('type', 'like', '%'.$Type.'%')
            ->where('publisher', 'like', '%'.$Publisher.'%')
            ->where('pages', 'like', '%'.$Pages.'%')
            ->where('year', 'like', '%'.$Year.'%')
            ->where('code', 'like', '%'.$Code.'%')
            ->get();
           

             

     return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable0', 'variable1', 
              'variable2', 'variable3', 'variable4', 'resultCategory'));

    }



      public function searchEmployee(Request $request)     

     {


     $resultCategory="employees";
      
      $stlpec1 = "Meno";
      $stlpec2 = "Katedra";
      $stlpec3 = "Fakulta";
      $stlpec4 = "Popis";

      $variable0 = "id";
      $variable1 = "name";
      $variable2 = "department";
      $variable3 = "faculty";
      $variable4 = "description";


       $Fulltext = Input::get('fulltext'); 
       $Name = Input::get('name');
       $Department = Input::get('department'); 
       $Faculty = Input::get('faculty');
       $Description = Input::get('description');

       //povodne vyhladavanie

          if (is_null($Fulltext)) 
          {
            $user = DB::table('zamestnanci') ->select('id', 'name', 'department','faculty', 'description')       // SQL query
            ->where('name', 'like','%'.$Name.'%')
            ->where('department', 'like', '%'.$Department.'%')
            ->where('faculty', 'like', '%'.$Faculty.'%')
            ->where('description', 'like', '%'.$Description.'%')
            ->get();
        
          }

          else //Full-text vyhladavanie         
          {
  
                
            $user=Zamestnanec::search($Fulltext)     
            ->get();
         }

           

             

      
      return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable0', 'variable1', 
              'variable2', 'variable3', 'variable4', 'resultCategory'));

  	}

  	public function searchActivity(Request $request)     

     {

  	 $resultCategory="activities";

      
      $stlpec1 = "ID";
      $stlpec2 = "Dátum";
      $stlpec3 = "Typ";
      $stlpec4 = "Autori";

      $variable0 = "id_aktivita";
      $variable1 = "ID";
      $variable2 = "date";
      $variable3 = "type";
      $variable4 = "all_authors";


       $Zamestnanec_id = Input::get('zamestnanec_id');
       $Date = Input::get('date'); 
       $Title = Input::get('title');
       $Country = Input::get('country');
       $Type = Input::get('type');
       $Category = Input::get('category');
       $All_authors = Input::get('all_authors');
       



        $user = DB::table('activities') ->select('id_aktivita', 'ID', 'date','type', 'all_authors')       // SQL query
            ->where('zamestnanec_id', 'like','%'.$Zamestnanec_id.'%')
            ->where('date', 'like', '%'.$Date.'%')
            ->where('title', 'like', '%'.$Title.'%')
            ->where('country', 'like', '%'.$Country.'%')
            ->where('type', 'like', '%'.$Type.'%')
            ->where('category', 'like', '%'.$Category.'%')
            ->where('all_authors', 'like', '%'.$All_authors.'%')
            ->get();
           

             

         return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable0', 'variable1', 
              'variable2', 'variable3', 'variable4', 'resultCategory'));

     }

        public function searchUsers()     

     {

      $autentifikacia = Auth::user();
       

        
  

      $resultCategory="users";

      
      $stlpec1 = "Prihl. meno";
      $stlpec2 = "ID používateľa";
      $stlpec3 = "E-mail";
      $stlpec4 = "Práva";

      $variable0 = "id";
      $variable1 = "username";
      $variable2 = "id";
      $variable3 = "email";
      $variable4 = "role";
       

         if($autentifikacia->role=="admin")
        {

        $user = DB::table('users') ->select('id', 'username', 'email', 'role')      // SQL query
                ->get();
        }


        $user = null;

             

         return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable0', 'variable1', 
              'variable2', 'variable3', 'variable4', 'resultCategory'));

     }








    
}
