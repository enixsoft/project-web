<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

use Auth;

use App\Models\Publications;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

use Validator;

use Redirect;

use DB;             

class UserController extends Controller
{
    

    

    public function getview()  //Nastavenia
    {
        //return view("settings");
        return view('settings');
        
    }


    public function detail_about_record($over_id)
     {

            

            $controller="UserController@update_record";
                
            $nazov_popisu = "Používatelia";
            $tabulka = 'users';

            $stlpec1 = "Profilový obrázok";
            $stlpec2 = "ID používateľa";
            $stlpec3 = "ID zamestnanca";
            $stlpec4 = "Meno";
            $stlpec5 = "Heslo";
            $stlpec6 = "E-mail"; 
            $stlpec7 = "Práva"; 
      
            


            $premenna0 = "zamestnanec_id";            
            $premenna00 = "id";
            

            $premenna1 = "profile_picture";
            $premenna2 = "id";
            $premenna3 = "zamestnanec_id";
            $premenna4 = "username";
            $premenna5 = "email";
            $premenna6 = "role";
                          

            $autentifikacia = Auth::user();
       

        
             if($autentifikacia->role=="admin")
            { 
    
            $zaznam = DB::table("users")
            ->where('id', '=', $over_id)
            ->get();

            foreach ($zaznam as $z)
            {
              $premenna0=$z->zamestnanec_id;
              $premenna00=$z->id;

            }

            }
            else
            {   
                $zaznam=null; 
                $premenna0=null;              
                $premenna00=null;
            }
          
        


     
          
         return view("details.user", compact('controller', 'zaznam', 'profile', 'nazov_popisu', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'stlpec5', 'stlpec6', 'stlpec7', 'premenna0', 'premenna00', 'premenna1', 'premenna2', 'premenna3', 'premenna4', 'premenna5', 'premenna6'));
        
    }

    public function create_new_user()
     {

            

            $controller="UserController@addUser";
                
            $nazov_popisu = "Používatelia";
            $tabulka = 'users';

            $stlpec1 = "Profilový obrázok";
            $stlpec2 = "ID používateľa";
            $stlpec3 = "ID zamestnanca";
            $stlpec4 = "Meno";
            $stlpec5 = "Heslo";
            $stlpec6 = "E-mail"; 
            $stlpec7 = "Práva"; 
      
            


            $premenna0 = "zamestnanec_id";            
            $premenna00 = "id";
            

            $premenna1 = "profile_picture";
            $premenna2 = "id";
            $premenna3 = "zamestnanec_id";
            $premenna4 = "username";
            $premenna5 = "email";
            $premenna6 = "role";
                          

            $autentifikacia = Auth::user();
       

        
             if($autentifikacia->role=="admin")
            { 
    
             
            
            }
          
        


     
          
         return view("details.new_user", compact('controller', 'zaznam', 'profile', 'nazov_popisu', 'stlpec1', 'stlpec2', 'stlpec3', 'stlpec4', 'stlpec5', 'stlpec6', 'stlpec7'));
        
    }





     public function update_record(Request $request)
    {


       $textAreas =  array (       
       $textarea2 = $request->get('textarea2'), 
       $textarea3 = $request->get('textarea3'),
       $textarea4 = $request->get('textarea4')
                            );

       foreach ($textAreas as $key => &$value) 
       {
                      
              if (is_null($value)) 
               {
                  $value = "";
        
               }
        
       }



        $pass=bcrypt($request->password);

          DB::table('users')
            ->where('users.id', '=', $request->get('id'))
            ->update(['users.zamestnanec_id' => $request->get('textarea1'), 'users.username' => $textAreas[0], 'users.password' =>  $pass,
              'users.email' => $textAreas[1], 'users.role' => $textAreas[2], 


          ]);

             return Redirect::back();




    }

    public function uploadProfilePicture(Request $request)
    {
    
    /*
    $uploadedImage = $request['profile_img'];

    $imagetype = $image->extension();

    $path = $request['profile_img']->storeAs('uploads/profile_images', $filename);
    */

    $uploadedImage = $request['profile_img'];



    $pictureType = $uploadedImage->getClientOriginalExtension();


    //$pictureStr = (string) Image::make(  $uploadedImage )->resize( 105, 105 )->encode( $pictureType );


     $pictureStr = (string) Image::make( $uploadedImage )->
                                     resize( 105, null, function ( $constraint ) {
                                         $constraint->aspectRatio();
                                     })->encode( $pictureType );

    
                                     



    //$uuploadedImage = Image::make($uploadedImage)->resize(105, 105);

    //Image::make($uploadedImage)->resize(105,105)->save('foo' . $uploadedImage->getClientOriginalExtension());

    //$uploadedImage = Image::make($uploadedImage)->resize(105,105);

    //$pictureFile = file_get_contents($uuploadedImage);     


    //$image = base64_encode(file_get_contents($uuploadedImage->pat‌​h()));
  
      
    $pictureBlob = base64_encode($pictureStr);


           DB::table('users')
            ->where('users.id', '=', $request->get('id'))
            ->update(['users.profile_picture' => $request->get('id'), 'users.profile_picture' => $pictureBlob, 
                'users.profile_picture_type' => $pictureType

          ]);
         
          

         
          

       return Redirect::back();


    }


      public function changePassword(Request $request)
    {
        $pass=bcrypt($request->password);

         DB::table('users')
         ->where('id', '=', $request->get('id'))
         ->update(['users.password' => $pass]);

         Auth::logout();

        return redirect()->route('/');


    }

      public function deleteUser(Request $request)
    {
        $autentifikacia = Auth::user();
       

        
        if($autentifikacia->role=="admin")
        {
             DB::table('users')->where('id', '=', $request->get('id'))->delete();
        }
          return redirect()->route('users');

    }

        public function addUser(Request $request)
    {
        $autentifikacia = Auth::user();
       

        
        if($autentifikacia->role=="admin")
        {

       $pass=bcrypt($request->password);

       $textAreas =  array (         
       $textarea3 = $request->get('textarea2'),
       $textarea4 = $request->get('textarea3')
                            );

       foreach ($textAreas as $key => &$value) 
       {
                      
              if (is_null($value)) 
               {
                  $value = "";
        
               }
        
       }

      $defaultPicturePath = "img/user.png";
      
      $defaultPictureFile = file_get_contents($defaultPicturePath);
      
      $defaultPictureType = File::extension($defaultPicturePath);
      
      $defaultPictureBlob = base64_encode($defaultPictureFile);






            DB::table('users')->insert([            
            'zamestnanec_id' => $request->get('textarea1'),
            'password' => $pass,
            'username' => $textAreas[0],
            'email' => $textAreas[1],
            'role' =>  $request->get('role'),
            'remember_token' => null,
            'profile_picture' => $defaultPictureBlob,
            'profile_picture_type' => $defaultPictureType           
        ]);
        
        }

              return Redirect::back();

    }

    



       




}