 <?php
 			/*
 			$idzamid=1440;
 		    $json = file_get_contents("https://ukfprofil.teacher.sk/get-teacher/".$idzamid);
           
            $data = json_decode($json, true);

            
            	 
            

            foreach($data['publications'] as $publikacia)
            {
    		echo $publikacia['ISBN'] . "<br/>";
			}
				*/

		    $idzamEmail="martincapay@ukf.sk";
			$emailDuplicateCheck = DB::table('users')
                        ->where('email', '=', $idzamEmail)
                        ->get();
            
          
            

            foreach($emailDuplicateCheck as $user)
            {
    		echo $user->email. "<br/>";
			}

			
			if(count($emailDuplicateCheck)>0)
            {
               echo $idzamEmail . "2"; 
            }
            

?>

