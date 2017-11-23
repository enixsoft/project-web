<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Products;
use Illuminate\Routing\Controller;

class StatisticsController extends Controller
{
 

   public function showChart()
   {

        return view("statistics");

   }





}





?>