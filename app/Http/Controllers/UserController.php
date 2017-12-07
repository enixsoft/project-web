<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

use Auth;

use App\Models\Publications;


use Validator;

use Redirect;

use DB;             

class UserController extends Controller
{
    

       public function getview()  //Nastavenia
    {
        return view("settings");
        
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
        
    }


    



       




}