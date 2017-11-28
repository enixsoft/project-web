<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Charts;
use App\User;
use DB;

class Chart2Controller extends Controller
{
    public function index()
    {
    	
    
    $count_riadiaci_pracovnik = 0;
    $count_veduci_katedry = 0;
    $count_rektor = 0;
    $count_profesor = 0;
    $count_prodekan = 0;
    $count_odborny_asistent = 0;
    $count_lektor = 0;
    $count_kvestor = 0;
    $count_jednoodborove_studium_3stupen = 0;
    $count_pedagogicky_odborny_pracovnik = 0;
    $count_docent = 0;
    $count_dekan_prodekan = 0;
    $count_dekan = 0;
   

    $all_users = DB::table('zamestnanci')->get();

    foreach ($all_users as $user) 
    {
    	
        $riadiaci_pracovnici = array("Riadiaci pracovník (manažér) zariadenia závodného stravovania", "Riadiaci pracovník (manažér) v oblasti účtovníctva a financovania", "Riadiaci pracovník (manažér) v oblasti hospodárskej správy a údržby majetku", "Riadiaci pracovník (manažér) v oblasti financií inde neuvedený", "Riadiaci pracovník (manažér) prevádzky informačných technológií", "Riadiaci pracovník (manažér) pre oblasť odmeňovania a benefitov", "Riadiaci pracovník (manažér) personálnej administratívy a zamestnaneckých vzťahov", "Iný riadiaci pracovník (manažér) v špecializovaných službách inde neuvedený", "Iný riadiaci pracovník (manažér) administratívnych a podporných činností inde neuvedený" );



        foreach ($riadiaci_pracovnici as $zaznam)
        { 

            if($user->description == $zaznam)
            {
                $count_riadiaci_pracovnik += 1;
            }

        }



        if($user->description == "Vedúci katedry")
        {
            $count_veduci_katedry += 1;
        }

    	else if($user->description == "Rektor vysokej školy")
    	{
    		$count_rektor += 1;
    	}

    	else if($user->description == "Profesor")
    	{
    		$count_profesor += 1;
    	}

    	else if($user->description == "Prodekan")
    	{
    		$count_prodekan += 1;
    	}

    	else if($user->description == "odborný asistent vysokej školy, univerzity" || $user->description == "Odborný asistent vysokej školy")
    	{
    		$count_odborny_asistent += 1;
    	}

    	else if($user->description == "Lektor vysokej školy")
        {
            $count_lektor += 1;
        }

        else if($user->description == "Kvestor")
        {
            $count_kvestor += 1;
        }

        else if($user->description == "Jednoodborové štúdium, iné(PhDr.) III. st., externá forma" || $user->description =="Jednoodborové štúdium, doktorandské III. st., externá forma" || $user->description =="Jednoodborové štúdium, doktorandské III. st., denná forma")
        {
            $count_jednoodborove_studium_3stupen += 1;
        }

        else if($user->description == "Iný pedagogický a odborný pracovník vo výchove a vzdelávaní inde neuvedený")
        {
            $count_pedagogicky_odborny_pracovnik += 1;
        }

        else if($user->description == "Docent")
        {
            $count_docent += 1;
        }

        else if($user->description == "Dekan, prodekan")
        {
            $count_dekan_prodekan += 1;
        }

        else if($user->description == "Dekan")
        {
            $count_dekan += 1;
        }
    }


    $charts = Charts::create('donut', 'highcharts')
    ->title('Štatistika počtu zamestnancov na jednotlivých pracovných pozíciach')
    ->labels(['Riadiaci pracovníci','Vedúci katedier', 'Rektori', 'Profesori', 'Prodekani', 'Odborní asistenti', 'Lektori', 'Kvestori', 'Pracovníci jednoodborového štúdia 3. stupňa', 'Pedagogickí a odborní pracovníci', 'Docenti', 'Dekani, prodekani', 'Dekani'])
    ->colors(['#FFFF00','#F44336', '#FFC107', '#899FFFF',  '#8D7373', '#201A48', '#006600', '#00FF00', '#663300', '#6666CC', '#0066FF', '#FF6600', '#FF33CC'])
    ->values([$count_riadiaci_pracovnik,$count_veduci_katedry,$count_rektor,$count_profesor,$count_prodekan,$count_odborny_asistent,$count_lektor,$count_kvestor,$count_jednoodborove_studium_3stupen,$count_pedagogicky_odborny_pracovnik,$count_docent,$count_dekan_prodekan,$count_dekan])
    ->dimensions(1000,500)
    ->responsive(false);

        return view('chart2', compact('charts'));
    }
}



?>