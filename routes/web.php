<?php

use Illuminate\Support\Facades\Input;

use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
   return view('welcome');
});

Route::get('/portfolio', function () {
   return view('portfolio');
});



Route::get('/tasks/{task}', function ($id) {
   
	$task = DB::table('tasks')->find($id);
    
    return view('tasks.show', compact('task'));
});

Route::get('/tasks', function () {
   
	
    $tasks = DB::table('tasks')->latest()->get();
    return view('tasks.index', compact('tasks'));
});



Route::get('/about', function () {
    return view('about');
});



*/

//Route::get('/', 'UserController@showAllAction' 
//);

/*

Route::get('/adduser', 'UserController@AddUserForm' 
);

Route::get('/show/{id}', [
   'as' => 'show', 'uses' => 'UserController@showAction'
  
]);

Route::post('/insert', [
   'as' => 'insert', 'uses' => 'UserController@insertAction'
]);

Route::post('/update/{id}', [
   'as' => 'update', 'uses' => 'UserController@updateAction'
]);

Route::get('/delete/{id}', [
   'as' => 'delete', 'uses' => 'UserController@deleteAction'
]);

*/



/*Route::get('/', function () {
   
   $products = app('App\Http\Controllers\ProductsController')->showAllAction();
   return view('products', compact('products'));
     
});
*/


/*

Route::post('/products/update/{id}', function ($id)
 {	
  
  $productid = Input::post('productid');	
  $name = Input::post('name');
  $price = Input::post('price');
  $description = Input::post('description');
  app('App\Http\Controllers\ProductsController')->updateAction($id, $productid, $name, $price, $description);
  
  return Redirect::back();

});


Route::get('/products/delete/{id}', function ($id)
 {	
 	
  app('App\Http\Controllers\ProductsController')->deleteAction($id);
  $products = app('App\Http\Controllers\ProductsController')->showAllAction();  
  return Redirect::back();


});


Route::get('/products/addrow', function ()
 {	 	
  app('App\Http\Controllers\ProductsController')->insertAction();

  return Redirect::back();


});

Route::get('/products', function ()
{
	$products = app('App\Http\Controllers\ProductsController')->showAllAction();
    
    return view('products', compact('products'));

});


?>

*/

Route::get('/', function() {
  
   //$ids = DB::select('select id from zamestnanci', [1]);
  //return view('welcome', compact('ids'));

    return view('welcome');
});


Route::get('welcome', function() {
    return view('welcome');
});

Route::get('/allrecords', [
    'as' => 'allrecords', 'uses' => 'UserController@login'

]);





                            






Route::post('searchID', array(

    'as' => 'searchID',

    function() {


         $ID = Input::get('id');


        $user = DB::table('zamestnanci') ->select('name', 'department','faculty', 'description')       // SQL query
            ->where('id', '=', $ID) ->first();

        if(count($user)>0)
        {
            return view("searchresults", ['user' => $user]);
        }

        // return view('template', compact('user'));
        else
            {
                 return view("searchresults", ['user' => $user]);
            }

    }


));

Route::post('searchProject', array(       // treba oddelit okrem stlpcov aj jednotlive properties

    'as' => 'searchProject',

    function() {

      $stlpec1 = "Zamestnanec_ID";
      $stlpec2 = "Názov";
      $stlpec3 = "Rok Vydania";
      $stlpec4 = "Registračné číslo";

      $variable1 = "zamestnanec_id";
      $variable2 = "title";
      $variable3 = "year_from";
      $variable4 = "reg_number";


       $Zamestnanec = Input::get('zamestnanec');
       $Title = Input::get('title'); 
       $Year_from = Input::get('year_from');
       $Year_end = Input::get('year_end');
       $Reg_number = Input::get('reg_number');



        $user = DB::table('projects') ->select('zamestnanec_id', 'title','year_from', 'reg_number')       // SQL query
            ->where('zamestnanec_id', 'like','%'.$Zamestnanec.'%')
            ->where('title', 'like', '%'.$Title.'%')
            ->where('year_from', 'like', '%'.$Year_from.'%')
            ->where('year_end', 'like', '%'.$Year_end.'%')
            ->get();
           

             

         if(count($user)>0)
        {
            return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
        }

        // return view('template', compact('user'));
        else
            {
                 //return view("searchresults2", ['user' => $user]);
               return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
            }
    }


));



Route::post('searchEmployee', array(    // vyhlada zamestnanca

    'as' => 'searchEmployee',

    function() {

      $stlpec1 = "Meno";
      $stlpec2 = "Katedra";
      $stlpec3 = "Fakulta";
      $stlpec4 = "Popis";

      $variable1 = "name";
      $variable2 = "department";
      $variable3 = "faculty";
      $variable4 = "description";


       $Name = Input::get('name');
       $Department = Input::get('department'); 
       $Faculty = Input::get('faculty');
       $Description = Input::get('description');



        $user = DB::table('zamestnanci') ->select('name', 'department','faculty', 'description')       // SQL query
            ->where('name', 'like','%'.$Name.'%')
            ->where('department', 'like', '%'.$Department.'%')
            ->where('faculty', 'like', '%'.$Faculty.'%')
            ->where('description', 'like', '%'.$Description.'%')
            ->get();
           

             

        if(count($user)>0)
        {
            return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
        }

        // return view('template', compact('user'));
        else
            {
                 //return view("searchresults2", ['user' => $user]);
               return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
            }

    }


));


Route::post('searchPublication', array(

    'as' => 'searchPublication',

    function() {

      $stlpec1 = "ISBN";
      $stlpec2 = "Popis";
      $stlpec3 = "Všetci autori";
      $stlpec4 = "Popis";

      $variable1 = "ISBN";
      $variable2 = "title";
      $variable3 = "all_authors";
      $variable4 = "publisher";


       $isbn = Input::get('ISBN');
       $Title = Input::get('title'); 
       $Sub_title = Input::get('sub_title');
       $Author = Input::get('author');
       $Type = Input::get('type');
       $Publisher = Input::get('publisher');
       $Pages = Input::get('pages');
       $Year = Input::get('year');
       $Code = Input::get('code');



        $user = DB::table('publications') ->select('ISBN', 'title','all_authors', 'publisher')       // SQL query
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
           

             

        if(count($user)>0)
        {
            return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
        }

        // return view('template', compact('user'));
        else
            {
                 //return view("searchresults2", ['user' => $user]);
               return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
            }

    }


));


Route::post('searchActivity', array(

    'as' => 'searchActivity',

    function() {

      $stlpec1 = "ID";
      $stlpec2 = "Dátum";
      $stlpec3 = "Typ";
      $stlpec4 = "Autori";

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
       



        $user = DB::table('activities') ->select('ID', 'date','type', 'all_authors')       // SQL query
            ->where('zamestnanec_id', 'like','%'.$Zamestnanec_id.'%')
            ->where('date', 'like', '%'.$Date.'%')
            ->where('title', 'like', '%'.$Title.'%')
            ->where('country', 'like', '%'.$Country.'%')
            ->where('type', 'like', '%'.$Type.'%')
            ->where('category', 'like', '%'.$Category.'%')
            ->where('all_authors', 'like', '%'.$All_authors.'%')
            ->get();
           

             

        if(count($user)>0)
        {
            return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
        }

        // return view('template', compact('user'));
        else
            {
                 //return view("searchresults2", ['user' => $user]);
               return view("searchresults2", compact('user', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'variable1', 
              'variable2', 'variable3', 'variable4'));
            }

    }


));





/*
    // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
*/
    
Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@getview')->name('profile');

Route::get('/projects', 'ProjectController@getview')->name('projects');

Route::get('/publications', 'PublicationsController@getview')->name('publications');

Route::get('/activities', 'ActivitiesController@getview')->name('activities');
