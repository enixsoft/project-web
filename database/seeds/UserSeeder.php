<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        

        DB::table('users')->insert([            
            'username' => "admin",
            'password' => bcrypt('heslo123'),
            'email' => "admin@ukf.sk",
            'role' => "admin",
            'remember_token' => null,         
        ]);
        

        $arrayidzamestnanci = DB::select('select id, name from zamestnanci', [1]);

        foreach($arrayidzamestnanci as $idzam)          
        {   

            $idzamNewName = $this->removeCommonWords($idzam->name);
            $idzamNewName = $this->clean($idzamNewName);
            $idzamEmail = $this->createEmail($idzamNewName);

            $emailDuplicateCheck = DB::table('users')
                        ->where('email', '=', $idzamEmail)
                        ->get();

            if(count($emailDuplicateCheck)>0)
            {
               $idzamEmail=$idzamEmail . "2"; 
            }
            



        DB::table('users')->insert([
            'zamestnanec_id' => $idzam->id,
            'username' => $idzamNewName,
            'password' => bcrypt('heslo123'),
            'email' => $idzamEmail . "@ukf.sk",
            'role' => "user",
            'remember_token' => null,         
        ]);



        }


    }



function removeCommonWords($input)
{
 
    /*
    $commonWords = array('.',',','prof','PaedDr','CSc', ' ');
 
    return preg_replace('/\b('.implode('|',$commonWords).')\b/','',$input);
    */
    
    $wordlist = array("prof", "PaedDr", "CSc", "doc", "PhD", "Th. D", "PhDr", "Mgr", 
        "habil", "JUDr", "Ing", "RNDr", "Bc", "DrSc", "h", "c", "MVDr", "ThDr",
         "MuDr", "MUDr", "arch", "Dr", "A", "art", "akad", "mal", "dr", "univ",
         "Th", "THDr", "hab", "ArtD", "MBA", "Ph", "et");

        foreach ($wordlist as &$word) 
        {
         $word = '/\b' . preg_quote($word, '/') . '\b/';
        }

    return preg_replace($wordlist, '', $input);


}

function clean($string) 
{
   //odstrani bodky ciarky vsetko okrem pismen

   $string = preg_replace('/\PL/u', '', $string);

   //prida medzeru pred zaciatocne velke pismena 
   
   return preg_replace("/(\p{Ll})(\p{Lu})/u", "$1 $2", $string);


   
}

function createEmail($string)
{
    //odstrani medzery
$string = preg_replace('/\s*/', '', $string);
// zmeni vsetky pismena na male
$string = mb_convert_case($string, MB_CASE_LOWER, "UTF-8"); 

$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'č' =>'c', 'ď'=> 'd', 'ě'=>'e', 'ľ'=>'l', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ü'=>'u', 'ť'=>'t', 'ň'=>'n', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
//odstrani makcene a dlzne
return strtr($string, $unwanted_array);
}


    
}
