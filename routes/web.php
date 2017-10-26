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
    return view('welcome');
});

Route::get('/allrecords', [
    'as' => 'allrecords', 'uses' => 'UserController@login'

]);


Route::get('/login', function(){

    $name = Input::get('meno');
    $surname = Input::get('priezvisko');

    echo $checkLogin = DB::table('users')->where(['meno'=>$name,'priezvisko'=>$surname])->get();
    if(count($checkLogin)>0)
    {
        $users = User::all();								// This variable is used in Users table view
        return view("all_records", ['users' => $users]);
    }

    else
    {
        echo "Name ".$name;
        echo "Surname ".$surname;
        echo "Login not succeed!!!";
    }

});



