<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Auth;


use App\Models\Publications;


use Validator;



use DB;             // added due to using in function


class CommentController extends Controller
{
	 public function create_comment(Request $request)
    {
    	       
    	$comment_text_area = $request->get('comment_textarea');
  


    	 if (!is_null($comment_text_area)) 
         {
              
         
          
          DB::table('comments')->insert([            
            'commented_on_id' => $request->get('commented_on_input'),
            'user_who_commented_id' => $request->get('user_who_commented_input'),
            'comment' => $comment_text_area,
            'created_at' => DB::raw('now()')            

        ]);

        
        
        }  


  



       return Redirect::back();
    }

     public function allow_comments(Request $request)
    {
    	   DB::table('zamestnanci')
            ->where('zamestnanci.id', '=', $request->get('commented_on_input'))
            ->update(['zamestnanci.comments_allowed' => 1
          ]);   

       return Redirect::back();
    }


     public function disable_comments(Request $request)
    {
    	   DB::table('zamestnanci')
            ->where('zamestnanci.id', '=', $request->get('commented_on_input'))
            ->update(['zamestnanci.comments_allowed' => 0
          ]);   

       return Redirect::back();
    }



}


