<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Charts;
use App\User;
use DB;

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

        $count_dekanat = 0;
        $count_botanika = 0;
        $count_chemia = 0;
        $count_ekologia = 0;
        $count_fyzika = 0;
        $count_geografia = 0;
        $count_inf_techn = 0;
        $count_matika = 0;
        $count_zoologia = 0;
        $count_ekonomika = 0;
        $count_gemologicky_ustav = 0;
        $count_doktorandske_studium = 0;






        foreach($all_users as $element)
        {
            if($element->department == "FPV - Dekanát Fakulty prírodných vied")
            {
                $count_dekanat++;
            }

            else if($element->department == "FPV - Katedra botaniky a genetiky")
            {
                $count_botanika++;
            }

            else if($element->department == "FPV - Katedra chémie")
            {
                $count_chemia++;
            }

            else if($element->department == "FPV - Katedra ekológie a environment.")
            {
                $count_ekologia++;
            }

            else if($element->department == "FPV - Katedra fyziky")
            {
                $count_fyzika++;
            }
            
            else if($element->department == "FPV - Katedra geografie a reg. rozvoja")
            {
                $count_geografia++;
            }

            else if($element->department == "FPV - Katedra informatiky")
            {
                $count_inf_techn++;
            }

            else if($element->department == "FPV - Katedra matematiky")
            {
                $count_matika++;
            }

            else if($element->department == "FPV - Katedra zoológie a antropológie")
            {
                $count_zoologia++;
            }

            else if($element->department == "FPV - Ústav  ekonomiky a manažmentu")
            {
                $count_ekonomika++;
            }

            else if($element->department == "FPV Gemologický ústav")
            {
                $count_gemologicky_ustav++;
            }

            else if($element->department == "FPV-doktorandské štúdium")
            {
                $count_doktorandske_studium++;
            }

        }



        return view('statistics_fpv_faculty', compact('count_dekanat', 'count_botanika', 'count_chemia', 'count_ekologia', 'count_fyzika', 'count_geografia', 'count_inf_techn', 'count_matika', 'count_zoologia', 'count_ekonomika', 'count_gemologicky_ustav', 'count_doktorandske_studium'));
    }


    public function get_stastistics_faculty_of_phylosophy()
    {
        $all_users = DB::table('zamestnanci')->get();

        $count_dekanat_ff = 0;
        $count_jazykove_centrum = 0;
        $count_translatologia = 0;
        $count_anglistika = 0;
        $count_archeologia = 0;
        $count_etnologia = 0;
        $count_filozofia = 0;
        $count_germanistika = 0;
        $count_historia = 0;
        $count_kulturologia = 0;
        $count_manazment = 0;
        $count_reklama = 0;
        $count_muzeologia = 0;
        $count_nabozenstvo = 0;
        $count_politologia = 0;
        $count_romanistika = 0;
        $count_rusistika = 0;
        $count_literatura = 0;
        $count_sociologia = 0;
        $count_etiketa = 0;
        $count_zurnalistika = 0;
        $count_komunikacia = 0;
        $count_metoda = 0;
        $count_medialne_centrum = 0;
        $count_doktorandske_studium = 0;

        





        foreach($all_users as $element)
        {
            if($element->department == "FF - Dekanát Filozofickej fakulty")
            {
                $count_dekanat_ff++;
            }

            else if($element->department == "FF - Jazykové centrum")
            {
                $count_jazykove_centrum++;
            }

            else if($element->department == "FF - Katedra  translatológie")
            {
                $count_translatologia++;
            }

            else if($element->department == "FF - Katedra anglistiky a amerikanistiky")
            {
                $count_anglistika++;
            }

            else if($element->department == "FF - Katedra archeológie")
            {
                $count_archeologia++;
            }

            else if($element->department == "FF - Katedra etnológie a folkloristiky")
            {
                $count_etnologia++;
            }

            else if($element->department == "FF - Katedra filozofie")
            {
                $count_filozofia++;
            }

            else if($element->department == "FF - Katedra germanistiky")
            {
                $count_germanistika++;
            }

            else if($element->department == "FF - Katedra histórie")
            {
                $count_historia++;
            }

            else if($element->department == "FF - Katedra kulturológie")
            {
                $count_kulturologia++;
            }

            else if($element->department == "FF - Katedra manažmentu kult.a turizmu")
            {
                $count_manazment++;
            }

            else if($element->department == "FF - Katedra masm. komunikácie a reklamy")
            {
                $count_reklama++;
            }

            else if($element->department == "FF - Katedra muzeológie")
            {
                $count_muzeologia++;
            }

            else if($element->department == "FF - Katedra náboženských štúdií")
            {
                $count_nabozenstvo++;
            }

            else if($element->department == "FF - Katedra politológie a euroáz.štúdií")
            {
                $count_politologia++;
            }

            else if($element->department == "FF - Katedra romanistiky")
            {
                $count_romanistika++;
            }

            else if($element->department == "FF - Katedra rusistiky")
            {
                $count_rusistika++;
            }

            else if($element->department == "FF - Katedra slovenského jazyka a litera")
            {
                $count_literatura++;
            }

            else if($element->department == "FF - Katedra sociológie")
            {
                $count_sociologia++;
            }

            else if($element->department == "FF - Katedra všeob. a aplikovanej etiky")
            {
                $count_etiketa++;
            }

             else if($element->department == "FF - Katedra žurnalistiky")
            {
                $count_zurnalistika++;
            }

            else if($element->department == "FF - Ústav lit. a umeleckej komunikácie")
            {
                $count_komunikacia++;
            }

            else if($element->department == "FF - Ústav pre v. k. d. Konšt. a Metoda")
            {
                $count_metoda++;
            }

            else if($element->department == "FF Mediálne centrum")
            {
                $count_medialne_centrum++;
            }

            else if($element->department == "FF-doktorandské štúdium")
            {
                $count_doktorandske_studium++;
            }
        }



        return view('statistics_ff_faculty', compact('count_dekanat_ff', 'count_jazykove_centrum', 'count_translatologia', 'count_anglistika', 'count_archeologia', 'count_etnologia', 'count_filozofia', 'count_germanistika', 'count_historia', 'count_kulturologia', 'count_manazment', 'count_reklama', 'count_muzeologia', 'count_nabozenstvo', 'count_politologia', 'count_romanistika', 'count_rusistika', 'count_literatura', 'count_sociologia', 'count_etiketa', 'count_zurnalistika', 'count_komunikacia', 'count_metoda', 'count_medialne_centrum', 'count_doktorandske_studium'));
    }

    public function get_stastistics_of_pedagogic_faculty()
    {
        $all_users = DB::table('zamestnanci')->get();

        $count_dekanat_pf = 0;
        $count_hudba = 0;
        $count_studie = 0;
        $count_psychologia = 0;
        $count_pedagogika = 0;
        $count_technika = 0;
        $count_sport = 0;
        $count_vychova = 0;
        $count_doktorandske_studium = 0;




        foreach($all_users as $element)
        {
            if($element->department == "PF - Dekanát Pedagogickej fakulty")
            {
                $count_dekanat_pf++;
            }

            else if($element->department == "PF - Katedra hudby")
            {
                $count_hudba++;
            }

            else if($element->department == "PF - Katedra lingvodid.a interkult.štúdi")
            {
                $count_studie++;
            }

            else if($element->department == "PF - Katedra pedag. a škol. psychológie")
            {
                $count_psychologia++;
            }

            else if($element->department == "PF - Katedra pedagogiky")
            {
                $count_pedagogika++;
            }

            else if($element->department == "PF - Katedra techniky a inf. technológií")
            {
                $count_technika++;
            }

            else if($element->department == "PF - Katedra telesnej výchovy a športu")
            {
                $count_sport++;
            }

            else if($element->department == "PF - Katedra výtvarnej tvorby a výchovy")
            {
                $count_vychova++;
            }

            else if($element->department == "PF-doktorandské štúdium")
            {
                $count_doktorandske_studium++;
            }
        }



        return view('statistics_pf_faculty', compact('count_dekanat_pf', 'count_hudba', 'count_studie', 'count_psychologia', 'count_pedagogika', 'count_technika', 'count_sport', 'count_vychova', 'count_doktorandske_studium'));
    }


    public function get_stastistics_faculty_of_social_sciences_and_health()
    {
        $all_users = DB::table('zamestnanci')->get();

        $count_dekanat_fsvz = 0;
        $count_medicina = 0;
        $count_osetrovatelstvo = 0;
        $count_psychologicke_vedy = 0;
        $count_socialne_vedy = 0;
        $count_aplikovana_psychologia = 0;
        $count_romologia = 0;
        $count_doktorandske_studium = 0;

        





        foreach($all_users as $element)
        {
            if($element->department == "FSVaZ - Dekanát FSVaZ")
            {
                $count_dekanat_fsvz++;
            }

            else if($element->department == "FSVaZ - Katedra klin. disc. a urg. med.")
            {
                $count_medicina++;
            }

            else if($element->department == "FSVaZ - Katedra ošetrovateľstva")
            {
                $count_osetrovatelstvo++;
            }

            else if($element->department == "FSVaZ - Katedra psychologických vied")
            {
                $count_psychologicke_vedy++;
            }

            else if($element->department == "FSVaZ - Katedra soc. práce a soc. vied")
            {
                $count_socialne_vedy++;
            }

            else if($element->department == "FSVaZ - Ústav aplikovanej psychológie")
            {
                $count_aplikovana_psychologia++;
            }

            else if($element->department == "FSVaZ - Ústav romologických štúdií")
            {
                $count_romologia++;
            }

            else if($element->department == "FSVaZ-doktorandské štúdium")
            {
                $count_doktorandske_studium++;
            }
        }



        return view('statistics_fsvz_faculty', compact('count_dekanat_fsvz', 'count_medicina', 'count_osetrovatelstvo', 'count_psychologicke_vedy', 'count_socialne_vedy', 'count_aplikovana_psychologia', 'count_romologia', 'count_doktorandske_studium'));
    }

    public function get_stastistics_faculty_of_central_european_studies()
    {
        $all_users = DB::table('zamestnanci')->get();

        $count_dekanat_fss = 0;
        $count_ruch = 0;
        $count_jazykoveda = 0;
        $count_vzdelavanie = 0;
        $count_jazyk = 0;
        $count_doktorandske_studium_fss = 0;




        foreach($all_users as $element)
        {
            if($element->department == "FSŠ - Dekanát FSŠ")
            {
                $count_dekanat_fss++;
            }

            else if($element->department == "FSŠ - Katedra cestovného ruchu")
            {
                $count_ruch++;
            }

            else if($element->department == "FSŠ - Ústav maď.jazykovedy  a lit. vedy")
            {
                $count_jazykoveda++;
            }

            else if($element->department == "FSŠ - ústav pre vzdelávanie pedagógov")
            {
                $count_vzdelavanie++;
            }

            else if($element->department == "FSŠ -Ústav stredoeur.jazykov a kultúr")
            {
                $count_jazyk++;
            }

            else if($element->department == "FSŠ-doktorandské štúdium")
            {
                $count_doktorandske_studium_fss++;
            }

        }



        return view('statistics_fss_faculty', compact('count_dekanat_fss', 'count_ruch', 'count_jazykoveda', 'count_vzdelavanie', 'count_jazyk', 'count_doktorandske_studium_fss'));
    }



}



?>