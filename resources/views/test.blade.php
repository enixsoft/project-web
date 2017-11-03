 <?php
 			$idzamid=1440;
 		    $json = file_get_contents("https://ukfprofil.teacher.sk/get-teacher/".$idzamid);
           
            $data = json_decode($json, true);

            
            	 
            

            foreach($data['publications'] as $publikacia)
            {
    		echo $publikacia['ISBN'] . "<br/>";
			}

            

?>

