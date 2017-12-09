<?php

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Select;

use App\Models\User;
use App\Models\Zamestnanec;


use Illuminate\Support\Facades\Textarea;

use Illuminate\Support\Collection\firstWhere;

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
///////////////////

*/

Route::get('/', function() {
  
   //$ids = DB::select('select id from zamestnanci', [1]);
  //return view('welcome', compact('ids'));


  // Tabulka zamestnanci

  $tabulka_zam_fakulta = DB::table('zamestnanci')->DISTINCT()->select('faculty')->get();
  $tabulka_zam_popis = DB::table('zamestnanci')->DISTINCT()->select('description')->get();
  $tabulka_zam_katedra = DB::table('zamestnanci')->DISTINCT()->select('department')->get();
  

  // Tabulka publications

  $tabulka_publ_typ = DB::table('publications')->DISTINCT()->select('type')->get();
  $tabulka_publ_vydavatel = DB::table('publications')->DISTINCT()->select('publisher')->get();
  $tabulka_publ_kod = DB::table('publications')->DISTINCT()->select('code')->get();


  // Tabulka activities

  $tabulka_akt_nazov = DB::table('activities')->DISTINCT()->select('title')->get();
  $tabulka_akt_typ = DB::table('activities')->DISTINCT()->select('type')->get();
  $tabulka_akt_kategoria = DB::table('activities')->DISTINCT()->select('category')->get();
  $tabulka_akt_krajina = DB::table('activities')->DISTINCT()->select('country')->get();
  $tabulka_akt_datum = DB::table('activities')->DISTINCT()->select('date')->get();


  // Tabulka projects

  $tabulka_proj_nazov = DB::table('projects')->DISTINCT()->select('title')->get();
  $tabulka_proj_z_roku = DB::table('projects')->DISTINCT()->select('year_from')->get();
  $tabulka_proj_do_roku = DB::table('projects')->DISTINCT()->select('year_end')->get();
  $tabulka_proj_reg_cislo = DB::table('projects')->DISTINCT()->select('reg_number')->get();


 


  return view('welcome', compact('tabulka_zam_fakulta', 'tabulka_zam_popis', 'tabulka_zam_katedra', 'tabulka_publ_typ', 'tabulka_publ_vydavatel', 'tabulka_publ_kod', 'tabulka_akt_nazov', 'tabulka_akt_typ', 'tabulka_akt_kategoria', 'tabulka_akt_krajina', 'tabulka_akt_datum', 'tabulka_proj_nazov', 'tabulka_proj_z_roku', 'tabulka_proj_do_roku', 'tabulka_proj_reg_cislo'));
});


Route::get('welcome', function() {
    return view('welcome');
});

Route::get('/allrecords', [
    'as' => 'allrecords', 'uses' => 'UserController@login'

]);


Route::get('/test', function() {
    
     

     //$t= '*' . str_replace(' ', '*', $term) . '*';
    
    return view('test', ['user' => $t]);
});


                            






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





/*

Route::post('insert_user_info', array(

    'as' => 'insert_user_info',

    function() {

      $autentifikacia = Auth::user();

      $popis = Textarea::get('description');  
      $konzultacne_hodiny = Textarea::get('consultation_hours');  
      $vzdelalanie = Textarea::get('education');

      DB::inset('insert into profile (description), (consultation_hours), (education) values(?)(?)(?)', [$popis], [$konzultacne_hodiny], [$vzdelalanie]) ->where('profile.zamestnanec_id', '=', $autentifikacia->zamestnanec_id);


      return Redirect::to('project-web/insert_user_info');



 }


));

*/

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

Route::post('/insert_user_info', 'UserController@store')->name('insert_user_info');   

// tato funkcia nas prehodi do osobneho profilu usera, kde mozeme upravovat data


Route::get('/publications', 'PublicationController@getview')->name('publications');

Route::get('/activities', 'ActivityController@getview')->name('activities');







Route::get('/details/{internalId}', ['as' => 'details', 'uses' => 'UserController@detail_about_record']);
   // funkcia na rozkliknutie zaznamu z tabulky



Route::post('/update_data_record', 'UserController@update_record')->name('update_data_record');
// tato funkcia bude upravovat zaznamy z tabuliek Publikacie, Projekty, Aktivity

//-----------------------------------------------------------------------------------------------------------

Route::get('/employees/{internalId}', ['as' => 'details', 'uses' => 'EmployeeController@detail_about_record']);

Route::get('/employees/{internalId}/publications', ['as' => 'details', 'uses' => 'EmployeeController@get_employee_publications']);
Route::get('/employees/{internalId}/projects', ['as' => 'details', 'uses' => 'EmployeeController@get_employee_projects']);
Route::get('/employees/{internalId}/activities', ['as' => 'details', 'uses' => 'EmployeeController@get_employee_activities']);

Route::post('/employees/EmployeeController@update_record', 'EmployeeController@update_record')->name('update_data_record');

Route::post('/employees/CommentController@create_comment', 'CommentController@create_comment')->name('create_comment');
Route::post('/employees/CommentController@allow_comments', 'CommentController@allow_comments')->name('allow_comments');
Route::post('/employees/CommentController@disable_comments', 'CommentController@disable_comments')->name('disable_comments');
//otestovat



Route::get('/publications/{internalId}', ['as' => 'details', 'uses' => 'PublicationController@detail_about_record']);
Route::post('/publications/PublicationController@update_record', 'PublicationController@update_record')->name('update_data_record');

Route::get('/activities/{internalId}', ['as' => 'details', 'uses' => 'ActivityController@detail_about_record']);
Route::post('/activities/ActivityController@update_record', 'ActivityController@update_record')->name('update_data_record');

Route::get('/projects/{internalId}', ['as' => 'details', 'uses' => 'ProjectController@detail_about_record']);
Route::post('/projects/ProjectController@update_record', 'ProjectController@update_record')->name('update_data_record');

Route::post('/projects/ProfileController@update_record', 'ProfileController@update_record')->name('update_data_record');


// pridane
Route::post('/search_employee','EmployeeController@search_employee', 'EmployeeController@search_employee')->name('search_employee');

Route::post('/search_publication', 'PublicationController@search_publication', 'PublicationController@search_publication')->name('search_publication');

Route::post('/search_activity', 'ActivityController@search_activity', 'ActivityController@search_activity')->name('search_activity');

Route::post('/search_project', 'ProjectController@search_project', 'ProjectController@search_project')->name('search_project');




Route::get('bar-chart', 'ChartController@index')->name('bar-chart');

Route::get('bar-chart2', 'Chart2Controller@index')->name('bar-chart2');

Route::get('stastistics-fpv', 'ChartController@get_stastistics_faculty_of_natural_sciences')->name('stastistics-fpv');
Route::get('stastistics-ff', 'ChartController@get_stastistics_faculty_of_phylosophy')->name('stastistics-ff');
Route::get('stastistics-pf', 'ChartController@get_stastistics_of_pedagogic_faculty')->name('stastistics-pf');
Route::get('stastistics-fss', 'ChartController@get_stastistics_faculty_of_central_european_studies')->name('stastistics-fss');
Route::get('stastistics-fsvz', 'ChartController@get_stastistics_faculty_of_social_sciences_and_health')->name('stastistics-fsvz');


Route::post('check_myinput', 'ChartController@check_input');

