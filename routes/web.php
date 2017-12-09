<?php

use Illuminate\Support\Facades\Input;

use App\Models\User;
use App\Models\Zamestnanec;


use Illuminate\Support\Facades\Textarea;

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


Route::get('/', function() {
  
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
})->name('/');






//------VYHLADAVANIE---------------------------------------------------------------------------------

Route::post('searchEmployee', 'SearchController@searchEmployee')->name('searchEmployee');
Route::post('searchPublication', 'SearchController@searchPublication')->name('searchPublication');    
Route::post('searchProject', 'SearchController@searchProject')->name('searchProject');
Route::post('searchActivity', 'SearchController@searchActivity')->name('searchActivity');
Route::get('users', 'SearchController@searchUsers')->name('users');

    

//-------PRIHLASENIE----------------------------------------------------------------------------------------
Route::auth();
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


//Route::get('/home', 'HomeController@index')->name('home');



//-------------Zamestnanci, publikacie, projekty, aktivity, profil, nastavenia ZOBRAZANIE---------------------------------------------

Route::get('/profile', 'ProfileController@getview')->name('profile');

Route::get('/projects', 'ProjectController@getview')->name('projects');

Route::get('/publications', 'PublicationController@getview')->name('publications');

Route::get('/activities', 'ActivityController@getview')->name('activities');

Route::get('/settings', 'UserController@getview')->name('settings');

Route::post('/settings/uploadProfilePicture', 'UserController@uploadProfilePicture')->name('uploadProfilePicture');

Route::post('/settings/changePassword', 'UserController@changePassword')->name('changePassword');




//-------------Zamestnanci, publikacie, projekty, aktivity, profil, pouzivatelia VYHLADAVANIE a UPRAVA---------------------------------------------

Route::get('/employees/{internalId}', ['as' => 'details', 'uses' => 'EmployeeController@detail_about_record']);

Route::get('/employees/{internalId}/publications', ['as' => 'details', 'uses' => 'EmployeeController@get_employee_publications']);
Route::get('/employees/{internalId}/projects', ['as' => 'details', 'uses' => 'EmployeeController@get_employee_projects']);
Route::get('/employees/{internalId}/activities', ['as' => 'details', 'uses' => 'EmployeeController@get_employee_activities']);

Route::post('/employees/EmployeeController@update_record', 'EmployeeController@update_record')->name('update_data_record');

Route::post('/employees/CommentController@create_comment', 'CommentController@create_comment')->name('create_comment');
Route::post('/employees/CommentController@allow_comments', 'CommentController@allow_comments')->name('allow_comments');
Route::post('/employees/CommentController@disable_comments', 'CommentController@disable_comments')->name('disable_comments');


Route::get('/publications/{internalId}', ['as' => 'details', 'uses' => 'PublicationController@detail_about_record']);
Route::post('/publications/PublicationController@update_record', 'PublicationController@update_record')->name('update_data_record');

Route::get('/activities/{internalId}', ['as' => 'details', 'uses' => 'ActivityController@detail_about_record']);
Route::post('/activities/ActivityController@update_record', 'ActivityController@update_record')->name('update_data_record');

Route::get('/projects/{internalId}', ['as' => 'details', 'uses' => 'ProjectController@detail_about_record']);
Route::post('/projects/ProjectController@update_record', 'ProjectController@update_record')->name('update_data_record');

Route::post('/projects/ProfileController@update_record', 'ProfileController@update_record')->name('update_data_record');

Route::get('/users/{internalId}', ['as' => 'details', 'uses' => 'UserController@detail_about_record']);

Route::post('/users/deleteUser', 'UserController@deleteUser')->name('deleteUser');

Route::post('/users/updateUser', 'UserController@update_record')->name('updateUser');

Route::get('new_user', 'UserController@create_new_user')->name('new_user');

Route::post('addUser', 'UserController@addUser')->name('addUser');



//-------------STATISTIKY------------------------------------------------------------------------------------------------------

Route::get('bar-chart', 'ChartController@index')->name('bar-chart');

Route::get('bar-chart2', 'Chart2Controller@index')->name('bar-chart2');

Route::get('stastistics-fpv', 'ChartController@get_stastistics_faculty_of_natural_sciences')->name('stastistics-fpv');
Route::get('stastistics-ff', 'ChartController@get_stastistics_faculty_of_phylosophy')->name('stastistics-ff');
Route::get('stastistics-pf', 'ChartController@get_stastistics_of_pedagogic_faculty')->name('stastistics-pf');
Route::get('stastistics-fss', 'ChartController@get_stastistics_faculty_of_central_european_studies')->name('stastistics-fss');
Route::get('stastistics-fsvz', 'ChartController@get_stastistics_faculty_of_social_sciences_and_health')->name('stastistics-fsvz');


Route::post('check_myinput', 'ChartController@check_input');


