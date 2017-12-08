<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <title>UKF - Štatistiky zamestnancov UKF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="" />
    <!-- css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/fancybox/jquery.fancybox.css') }}"  type="text/css" rel="stylesheet">
    <link href="{{ asset('css/jcarousel.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/flexslider.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/DataTables-1.10.16/css/dataTables.bootstrap4.css') }}">
                                                    

  

    <!-- Theme skin -->
    <link href="{{ asset('skins/default.css') }}" type="text/css" rel="stylesheet" />






    <!-- =======================================================
    Theme Name: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>
<style>

 /*table,th {border: 1px solid black; padding: 3px; background-color: #efefef;} 
*/


h4
{
    text-align: center;
}
    
canvas 
{
    cursor: pointer;
}


    



</style>

<body>
    <div id="wrapper">
       

       @extends('layout')
       @section('content')


        <section class="callaction">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="big-cta">
                            <div class="cta-text">
                                <h2><span>Štatistiky zamestnancov UKF</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br>
        <br>
        <br>
  
            
            <div class="graph">
            <div align="center">
            <h3> Štatistika zamestnancov UKF podľa rozdelenia fakúlt </h3>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

            <div style="width: 600px; height: 600px">
            <canvas id="pieChart"></canvas>
            </div>
            </div>
                
              

                   

        

<script>
var canvasP = document.getElementById("pieChart");

   var prirodne_vedy = {!! json_encode($count_prirodne_vedy) !!};
   var stredoeuropske_studie = {!! json_encode($count_stredoeuropske_studie) !!};
   var filozoficka_fakulta = {!! json_encode($count_filozoficka_fakulta)!!};
   var pedagogicka_fakulta = {!! json_encode($count_pedagogicka_fakulta)!!};
   var social_vedy_a_zdrav = {!! json_encode($count_socialne_vedy_a_zdrav)!!};

    

   var ctxP = canvasP.getContext('2d');
   var myPieChart = new Chart(ctxP, {
   type: 'pie',
   //tooltip: { pointFormat: '{data.labels}: <b>{point.percentage:.1f}%</b>'},
   
   title: { text: 'Mychart'},
   data: {
      labels: ["Fakulta prírodných Vied", "Fakulta stredoeurópskych Štúdií", "Filozofická fakulta", "Pedagogická fakulta", "Fakulta sociál.vied a zdravotníctva"],
      datasets: [{
         data: [prirodne_vedy, stredoeuropske_studie, filozoficka_fakulta, pedagogicka_fakulta, social_vedy_a_zdrav],
         backgroundColor: ["#2196F3", "#F44336", "#FFC107", "#8D7373", "#201A48"],
        // hoverBackgroundColor: ["#B2EBF2", "#FFCCBC", "#4DD0E1", "#FF8A65", "#00BCD4"]
      }]
   },
   options: {
      legend: {
        
        
         position: "right"
      }
   }
});

canvasP.onclick = function(e) {
   var slice = myPieChart.getElementAtEvent(e);
   if (!slice.length) return; // return if not clicked on slice
   var label = slice[0]._model.label;
   switch (label) {
      // add case for each label/slice
      case 'Fakulta prírodných Vied':
         //alert('clicked on slice 5');
       //  "{{ URL::to('zone') }}"

       /*
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
      
        $.ajax({
          type:'get',
          url: "check_myinput",
          data:{
             name: "Fakulta prírodných Vied"
          }
         

        });
        */

        var url = "{{ route('stastistics-fpv')}}";
        window.location.replace(url);
        break;

      case 'Filozofická fakulta':
        
       var url = "{{ route('stastistics-ff')}}";
       window.location.replace(url);
         break;

      case 'Pedagogická fakulta':
         
       var url = "{{ route('stastistics-pf')}}";
       window.location.replace(url);
         break;

       case 'Fakulta stredoeurópskych Štúdií':
        
       var url = "{{ route('stastistics-fss')}}";
       window.location.replace(url);
         break;

      case 'Fakulta sociál.vied a zdravotníctva':
        
       var url = "{{ route('stastistics-fsvz')}}";
       window.location.replace(url);
         break;
   }
}
</script>
 
       


        
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




   
   <div class="col-md-8 col-md-offset-5">
                        <a href="{{ url('/') }}"> 
                            <button type="button" style="height:40px; width:250px" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Naspäť
                            </button>
                        </a>
   </div>                   

 
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
                

  </div> 
 </div> 

@auth   
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
@endauth

</section>

</body>
@stop
