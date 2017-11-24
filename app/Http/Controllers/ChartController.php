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
    ->title('Štatistika počtu zamestnancov na jednotlivých fakutltách')
    ->labels(['Fakulta prírodných Vied', 'Fakulta stredoeurópskych Štúdií', 'Filozofická fakulta', 'Pedagogická fakulta', 'Fakulta sociál.vied a zdravotníctva'])
    ->colors(['#2196F3', '#F44336', '#FFC107', '#8D7373', '#201A48'])
    ->values([$count_prirodne_vedy,$count_stredoeuropske_studie,$count_filozoficka_fakulta,$count_pedagogicka_fakulta, $count_socialne_vedy_a_zdrav])
    ->dimensions(1000,500)
    ->responsive(false);

        return view('chart', compact('charts'));
    }
}



?>