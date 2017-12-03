<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Charts;
use App\User;
use DB;
use SplFixedArray;

class ChartController extends Controller
{
    public function index()
    {
    	
  /* $charts =   Charts::create('pie', 'highcharts')
    ->title('My nice chart')
    ->labels(['Fakulta prirodnych vied', 'Fakulta filozoficka', 'Fakulta stredoeuropskych studii', 'Fakulta zdravotnictva'])
    ->values([5,10,20,35])
    ->dimensions(1000,500)
    ->responsive(false);

    */

    $count_filozoficka_fakulta = 0;
    $count_pedagogicka_fakulta = 0;
    $count_stredoeuropske_studie = 0;
    $count_socialne_vedy_a_zdrav = 0;
    $count_prirodne_vedy = 0;

    $all_users = DB::table('zamestnanci')->get();

    foreach ($all_users as $user) 
    {
    	

    	if($user->faculty == "Filozofická fakulta")
    	{
    		$count_filozoficka_fakulta += 1;
    	}

    	else if($user->faculty == "Pedagogická fakulta")
    	{
    		$count_pedagogicka_fakulta += 1;
    	}

    	else if($user->faculty == "Fakulta stredoeurópskych štúdií")
    	{
    		$count_stredoeuropske_studie += 1;
    	}

    	else if($user->faculty == "Fakulta sociál.vied a zdravot.")
    	{
    		$count_socialne_vedy_a_zdrav += 1;
    	}

    	else if($user->faculty == "Fakulta prírodných vied")
    	{
    		$count_prirodne_vedy += 1;
    	}

    	else
    	{
    		// 
    	}
    }

   $charts = Charts::create('pie', 'highcharts')
    ->title('Statistics')
    ->labels(['Fakulta prírodných Vied', 'Fakulta stredoeurópskych Štúdií', 'Filozofická fakulta', 'Pedagogická fakulta', 'Fakulta sociál.vied a zdravotníctva'])
    ->colors(['#2196F3', '#F44336', '#FFC107', '#8D7373', '#201A48'])
   ->values([$count_prirodne_vedy,$count_stredoeuropske_studie,$count_filozoficka_fakulta,$count_pedagogicka_fakulta, $count_socialne_vedy_a_zdrav])
    ->dimensions(1000,500)
    ->responsive(false);

        return view('chart', compact('charts', 'count_prirodne_vedy', 'count_stredoeuropske_studie', '5', 'count_pedagogicka_fakulta', 'count_socialne_vedy_a_zdrav', 'count_filozoficka_fakulta'));
    }


    public function get_stastistics_faculty_of_natural_sciences()
    {
        $all_users = DB::table('zamestnanci')->get();

        $chart = "FPV";
        $title = "Štatistika zamestnancov Fakulty prírodných Vied UKF";

        $my_array = array (0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

/*
        foreach($my_array as $key => $value)
        {
            $my_array[$key] = 0;
        }
*/

        foreach($all_users as $element)
        {
            if($element->department == "FPV - Dekanát Fakulty prírodných vied")
            {
                $my_array[0]++;
            }

            else if($element->department == "FPV - Katedra botaniky a genetiky")
            {
                $my_array[1]++;
            }

            else if($element->department == "FPV - Katedra chémie")
            {
                $my_array[2]++;
            }

            else if($element->department == "FPV - Katedra ekológie a environment.")
            {
                $my_array[3]++;
            }

            else if($element->department == "FPV - Katedra fyziky")
            {
                $my_array[4]++;
            }
            
            else if($element->department == "FPV - Katedra geografie a reg. rozvoja")
            {
                $my_array[5]++;
            }

            else if($element->department == "FPV - Katedra informatiky")
            {
                $my_array[6]++;
            }

            else if($element->department == "FPV - Katedra matematiky")
            {
                $my_array[7]++;
            }

            else if($element->department == "FPV - Katedra zoológie a antropológie")
            {
                $my_array[8]++;
            }

            else if($element->department == "FPV - Ústav  ekonomiky a manažmentu")
            {
                $my_array[9]++;
            }

            else if($element->department == "FPV Gemologický ústav")
            {
                $my_array[10]++;
            }

            else if($element->department == "FPV-doktorandské štúdium")
            {
                $my_array[11]++;
            }

        }

       

        return view('statistics_view', compact('chart', 'my_array', 'title'));
    }


    public function get_stastistics_faculty_of_phylosophy()
    {
        $all_users = DB::table('zamestnanci')->get();

        $chart = "FF";
        $title = "Štatistika zamestnancov Filozofickej Fakulty UKF";

        $my_array = array (0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

        

        foreach($all_users as $element)
        {
            if($element->department == "FF - Dekanát Filozofickej fakulty")
            {
                $my_array[0]++;
            }

            else if($element->department == "FF - Jazykové centrum")
            {
                $my_array[1]++;
            }

            else if($element->department == "FF - Katedra  translatológie")
            {
                $my_array[2]++;
            }

            else if($element->department == "FF - Katedra anglistiky a amerikanistiky")
            {
                $my_array[3]++;
            }

            else if($element->department == "FF - Katedra archeológie")
            {
                $my_array[4]++;
            }

            else if($element->department == "FF - Katedra etnológie a folkloristiky")
            {
                $my_array[5]++;
            }

            else if($element->department == "FF - Katedra filozofie")
            {
                $my_array[6]++;
            }

            else if($element->department == "FF - Katedra germanistiky")
            {
                $my_array[7]++;
            }

            else if($element->department == "FF - Katedra histórie")
            {
                $my_array[8]++;
            }

            else if($element->department == "FF - Katedra kulturológie")
            {
                $my_array[9]++;
            }

            else if($element->department == "FF - Katedra manažmentu kult.a turizmu")
            {
                $my_array[10]++;
            }

            else if($element->department == "FF - Katedra masm. komunikácie a reklamy")
            {
                $my_array[11]++;
            }

            else if($element->department == "FF - Katedra muzeológie")
            {
                $my_array[12]++;
            }

            else if($element->department == "FF - Katedra náboženských štúdií")
            {
                $my_array[13]++;
            }

            else if($element->department == "FF - Katedra politológie a euroáz.štúdií")
            {
                $my_array[14]++;
            }

            else if($element->department == "FF - Katedra romanistiky")
            {
                $my_array[15]++;
            }

            else if($element->department == "FF - Katedra rusistiky")
            {
                $my_array[16]++;
            }

            else if($element->department == "FF - Katedra slovenského jazyka a litera")
            {
                $my_array[17]++;
            }

            else if($element->department == "FF - Katedra sociológie")
            {
                $my_array[18]++;
            }

            else if($element->department == "FF - Katedra všeob. a aplikovanej etiky")
            {
                $my_array[19]++;
            }

             else if($element->department == "FF - Katedra žurnalistiky")
            {
                $my_array[20]++;
            }

            else if($element->department == "FF - Ústav lit. a umeleckej komunikácie")
            {
                $my_array[21]++;
            }

            else if($element->department == "FF - Ústav pre v. k. d. Konšt. a Metoda")
            {
                $my_array[22]++;
            }

            else if($element->department == "FF Mediálne centrum")
            {
                $my_array[23]++;
            }

            else if($element->department == "FF-doktorandské štúdium")
            {
                $my_array[24]++;
            }
        }


        return view('statistics_view', compact('chart', 'my_array', 'title'));
    }

    public function get_stastistics_of_pedagogic_faculty()
    {
        $all_users = DB::table('zamestnanci')->get();

        $chart = "PF";
        $title = "Štatistika zamestnancov Pedagogickej Fakulty UKF";

         $my_array = array (0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);


        foreach($all_users as $element)
        {
            if($element->department == "PF - Dekanát Pedagogickej fakulty")
            {
                $my_array[0]++;
            }

            else if($element->department == "PF - Katedra hudby")
            {
                $my_array[1]++;
            }

            else if($element->department == "PF - Katedra lingvodid.a interkult.štúdi")
            {
                $my_array[2]++;
            }

            else if($element->department == "PF - Katedra pedag. a škol. psychológie")
            {
                $my_array[3]++;
            }

            else if($element->department == "PF - Katedra pedagogiky")
            {
                $my_array[4]++;
            }

            else if($element->department == "PF - Katedra techniky a inf. technológií")
            {
                $my_array[5]++;
            }

            else if($element->department == "PF - Katedra telesnej výchovy a športu")
            {
                $my_array[6]++;
            }

            else if($element->department == "PF - Katedra výtvarnej tvorby a výchovy")
            {
                $my_array[7]++;
            }

            else if($element->department == "PF-doktorandské štúdium")
            {
                $my_array[8]++;
            }
        }



        return view('statistics_view', compact('chart', 'my_array', 'title'));
    }


    public function get_stastistics_faculty_of_social_sciences_and_health()
    {
        $all_users = DB::table('zamestnanci')->get();

        $chart = "FSVaZ";
        $title = "Štatistika zamestnancov Fakulty sociál. vied a Zdravotníctva UKF";

        $my_array = array (0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);


        foreach($all_users as $element)
        {
            if($element->department == "FSVaZ - Dekanát FSVaZ")
            {
                $my_array[0]++;
            }

            else if($element->department == "FSVaZ - Katedra klin. disc. a urg. med.")
            {
                $my_array[1]++;            
            }

            else if($element->department == "FSVaZ - Katedra ošetrovateľstva")
            {
                $my_array[2]++;
            }

            else if($element->department == "FSVaZ - Katedra psychologických vied")
            {
                $my_array[3]++;
            }

            else if($element->department == "FSVaZ - Katedra soc. práce a soc. vied")
            {
                $my_array[4]++;
            }

            else if($element->department == "FSVaZ - Ústav aplikovanej psychológie")
            {
                $my_array[5]++;
            }

            else if($element->department == "FSVaZ - Ústav romologických štúdií")
            {
                $my_array[6]++;
            }

            else if($element->department == "FSVaZ-doktorandské štúdium")
            {
                $my_array[7]++;
            }
        }

        return view('statistics_view', compact('chart', 'my_array', 'title'));
    }

    public function get_stastistics_faculty_of_central_european_studies()
    {
        $all_users = DB::table('zamestnanci')->get();

        $chart = "FSS";
        $title = "Štatistika zamestnancov Fakulty stredoeurópskych Štúdií UKF";

        $my_array = array (0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

        foreach($all_users as $element)
        {
            if($element->department == "FSŠ - Dekanát FSŠ")
            {
                $my_array[0]++;
            }

            else if($element->department == "FSŠ - Katedra cestovného ruchu")
            {
                $my_array[1]++;
            }

            else if($element->department == "FSŠ - Ústav maď.jazykovedy  a lit. vedy")
            {
                $my_array[2]++;
            }

            else if($element->department == "FSŠ - ústav pre vzdelávanie pedagógov")
            {
                $my_array[3]++;
            }

            else if($element->department == "FSŠ -Ústav stredoeur.jazykov a kultúr")
            {
                $my_array[4]++;
            }

            else if($element->department == "FSŠ-doktorandské štúdium")
            {
                $my_array[5]++;
            }

        }

        return view('statistics_view', compact('chart', 'my_array', 'title'));
    }

    public function check_input(Request $request)
    {
        $name = $request->input('name');

        if($name == "Fakulta prírodných Vied")
        {
            return redirect()->route('/');

        }

        else
        {
            //
        }

    }



}



?>