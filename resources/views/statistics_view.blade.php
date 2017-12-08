<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <title>UKF - Katalóg zamestnancov</title>
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
            <h3> {{$title}} </h3>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

            <div style="width: 600px; height: 600px">
            <canvas id="pieChart"></canvas>
            </div>
            </div>
                
              

                   

        

<script>
var canvasP = document.getElementById("pieChart");
    
    var chart_draw = {!! json_encode($chart) !!};    // rozhone, aky graf vykreslit

    switch(chart_draw)
    {
        case 'FPV' :

        var dekanat = {!! json_encode($my_array[0]) !!};
        var botanika = {!! json_encode($my_array[1]) !!};
        var chemia = {!! json_encode($my_array[2])!!};
        var ekologia = {!! json_encode($my_array[3])!!};
        var fyzika = {!! json_encode($my_array[4]) !!};
        var geografia = {!! json_encode($my_array[5]) !!};
        var inf_technologie = {!! json_encode($my_array[6])!!};
        var matika = {!! json_encode($my_array[7])!!};
        var zoologia = {!! json_encode($my_array[8]) !!};
        var ekonomika = {!! json_encode($my_array[9]) !!};
        var gemologicky_ustav = {!! json_encode($my_array[10])!!};
        var doktorandske_studium = {!! json_encode($my_array[11])!!};
  


        var ctxP = canvasP.getContext('2d');
        var myPieChart = new Chart(ctxP, {
        type: 'pie',
        //tooltip: { pointFormat: '{data.labels}: <b>{point.percentage:.1f}%</b>'},
   
        title: { text: 'Mychart'},
        data: 
        {
            labels: ["FPV - Dekanát Fakulty prírodných vied", "FPV - Katedra botaniky a genetiky", "FPV - Katedra chémie", "FPV - Katedra ekológie a environment.", "FPV - Katedra fyziky", "FPV - Katedra geografie a reg. rozvoja", "FPV - Katedra informatiky", "FPV - Katedra matematiky", "FPV - Katedra zoológie a antropológie", "FPV - Ústav  ekonomiky a manažmentu", "FPV - Gemologický ústav", "FPV - doktorandské štúdium"],
            datasets: [{
            data: [dekanat, botanika, chemia, ekologia, fyzika, geografia, inf_technologie, matika, zoologia, ekonomika, gemologicky_ustav, doktorandske_studium],
            backgroundColor: ["#2196F3", "#F44336", "#FFC107", "#8D7373", "#F08080", "#E0FFFF", "#FF00FF", "#DAA520", "#4B0082", "#FF69B4", "#20B2AA ", "#800000"],
        // hoverBackgroundColor: ["#B2EBF2", "#FFCCBC", "#4DD0E1", "#FF8A65", "#00BCD4"]
            }]
        },
        options: {
        legend: {
        
        
         position: "right"
        }
        }
        });

        break;


        case 'FF' : 

        var dekanat_ff = {!! json_encode($my_array[0]) !!};
        var jazykove_centrum = {!! json_encode($my_array[1]) !!};
        var translatologia = {!! json_encode($my_array[2])!!};
        var anglistika = {!! json_encode($my_array[3])!!};
        var archeologia = {!! json_encode($my_array[4]) !!};
        var etnologia = {!! json_encode($my_array[5]) !!};
        var filozofia = {!! json_encode($my_array[6])!!};
        var germanistika = {!! json_encode($my_array[7])!!};
        var historia = {!! json_encode($my_array[8]) !!};
        var kulturologia = {!! json_encode($my_array[9]) !!};
        var manazment = {!! json_encode($my_array[10])!!};
        var reklama = {!! json_encode($my_array[11])!!};
        var muzeologia = {!! json_encode($my_array[12]) !!};
        var nabozenstvo = {!! json_encode($my_array[13]) !!};
        var politologia = {!! json_encode($my_array[14])!!};
        var romanistika = {!! json_encode($my_array[15])!!};
        var rusistika = {!! json_encode($my_array[16]) !!};
        var literatura = {!! json_encode($my_array[17]) !!};
        var sociologia = {!! json_encode($my_array[18])!!};
        var etiketa = {!! json_encode($my_array[19])!!};
        var zurnalistika = {!! json_encode($my_array[20])!!};
        var komunikacia = {!! json_encode($my_array[21])!!};
        var metoda = {!! json_encode($my_array[22]) !!};
        var medialne_centrum = {!! json_encode($my_array[23]) !!};
        var doktorandske_studium = {!! json_encode($my_array[24])!!};

        var ctxP = canvasP.getContext('2d');
        var myPieChart = new Chart(ctxP, {
        type: 'pie',
        //tooltip: { pointFormat: '{data.labels}: <b>{point.percentage:.1f}%</b>'},
   
        title: { text: 'Mychart'},
        data: {
        labels: ["FF - Dekanát Filozofickej fakulty", "FF - Jazykové centrum", "FF - Katedra translatológie", "FF - Katedra anglistiky a amerikanistiky", "FF - Katedra archeológie", "FF - Katedra etnológie a folkloristiky", "FF - Katedra filozofie", "FF - Katedra germanistiky", "FF - Katedra histórie", "FF - Katedra kulturológie", "FF - Katedra manažmentu kult.a turizmu", "FF - Katedra masm. komunikácie a reklamy", "FF - Katedra muzeológie", "FF - Katedra náboženských štúdií", "FF - Katedra politológie a euroáz.štúdií", "FF - Katedra romanistiky", "FF - Katedra rusistiky", "FF - Katedra slovenského jazyka a litera", "FF - Katedra sociológie", "FF - Katedra všeob. a aplikovanej etiky", "FF - Katedra žurnalistiky", "FF - Ústav lit. a umeleckej komunikácie", "FF - Ústav pre v. k. d. Konšt. a Metoda", "FF - Mediálne centrum", "FF - doktorandské štúdium"],
        datasets: [{
        data: [dekanat_ff, jazykove_centrum, translatologia, anglistika, archeologia, etnologia, filozofia, germanistika, historia, kulturologia, manazment, reklama, muzeologia, nabozenstvo, politologia, romanistika, rusistika, literatura, sociologia, etiketa, zurnalistika, komunikacia, metoda, medialne_centrum, doktorandske_studium],
        backgroundColor: ["#2196F3", "#F44336", "#00FFFF", "#8D7373", "#F08080", "#E0FFFF", "#FF00FF", "#DAA520", "#4B0082", "#FF69B4", "#20B2AA ", "#800000", "#0000CD", "#3CB371 ", "#BA55D3", "#6B8E23", "#FA8072 ", "#87CEEB", "#9ACD32", "#000000", "#40E0D0", "#00FF00", "#F0E68C", "#2F4F4F", "#BDB76B"],
        // hoverBackgroundColor: ["#B2EBF2", "#FFCCBC", "#4DD0E1", "#FF8A65", "#00BCD4"]
        }]
        },
        options: {
        legend: {
        
        
         position: "right"
        }
        }
        });

        break;

        case 'PF' :

        var dekanat_pf = {!! json_encode($my_array[0]) !!};
        var hudba = {!! json_encode($my_array[1]) !!};
        var studie = {!! json_encode($my_array[2])!!};
        var psychologia = {!! json_encode($my_array[3])!!};
        var pedagogika = {!! json_encode($my_array[4]) !!};
        var technika = {!! json_encode($my_array[5]) !!};
        var sport = {!! json_encode($my_array[6])!!};
        var vychova = {!! json_encode($my_array[7])!!};
        var doktorandske_studium = {!! json_encode($my_array[8])!!};
   
        var ctxP = canvasP.getContext('2d');
        var myPieChart = new Chart(ctxP, {
        type: 'pie',
        //tooltip: { pointFormat: '{data.labels}: <b>{point.percentage:.1f}%</b>'},
   
        title: { text: 'Mychart'},
        data: {
        labels: ["PF - Dekanát Pedagogickej fakulty", "PF - Katedra hudby", "PF - Katedra lingvodid.a interkult.štúdi", "PF - Katedra pedag. a škol. psychológie", "PF - Katedra pedagogiky", "PF - Katedra techniky a inf. technológií", "PF - Katedra telesnej výchovy a športu", "PF - Katedra výtvarnej tvorby a výchovy", "PF - doktorandské štúdium"],
        datasets: [{
         data: [dekanat_pf, hudba, studie, psychologia, pedagogika, technika, sport, vychova, doktorandske_studium ],
         backgroundColor: ["#2196F3", "#F44336", "#FFC107", "#8D7373", "#F08080", "#E0FFFF", "#FF00FF", "#DAA520", "#4B0082"],
        // hoverBackgroundColor: ["#B2EBF2", "#FFCCBC", "#4DD0E1", "#FF8A65", "#00BCD4"]
        }]
        },
        options: {
        legend: {
        
        
         position: "right"
        }
        }
        });

        break;

        case 'FSVaZ' :

        var dekanat_fsvz = {!! json_encode($my_array[0]) !!};
        var medicina = {!! json_encode($my_array[1]) !!};
        var osetrovatelstvo = {!! json_encode($my_array[2])!!};
        var psychologicke_vedy = {!! json_encode($my_array[3])!!};
        var socialne_vedy = {!! json_encode($my_array[4]) !!};
        var aplikovana_psychologia = {!! json_encode($my_array[5]) !!};
        var romologia = {!! json_encode($my_array[6])!!};
        var doktorandske_studium = {!! json_encode($my_array[7])!!};
   

        var ctxP = canvasP.getContext('2d');
        var myPieChart = new Chart(ctxP, {
        type: 'pie',
        //tooltip: { pointFormat: '{data.labels}: <b>{point.percentage:.1f}%</b>'},
   
        title: { text: 'Mychart'},
        data: {
        labels: ["FSVaZ - Dekanát FSVaZ", "FSVaZ - Katedra klin. disc. a urg. med.", "FSVaZ - Katedra ošetrovateľstva", "FSVaZ - Katedra psychologických vied", "FSVaZ - Katedra soc. práce a soc. vied", "FSVaZ - Ústav aplikovanej psychológie", "FSVaZ - Ústav romologických štúdií", "FSVaZ - doktorandské štúdium"],
        datasets: [{
         data: [dekanat_fsvz, medicina, osetrovatelstvo, psychologicke_vedy, socialne_vedy, aplikovana_psychologia, romologia, doktorandske_studium],
         backgroundColor: ["#2196F3", "#F44336", "#FFC107", "#8D7373", "#F08080", "#E0FFFF", "#FF00FF", "#DAA520"],
        // hoverBackgroundColor: ["#B2EBF2", "#FFCCBC", "#4DD0E1", "#FF8A65", "#00BCD4"]
        }]
        },
        options: {
        legend: {
        
        
         position: "right"
        }
        }
        });

        break;

        case 'FSS' :

        var dekanat_fss = {!! json_encode($my_array[0]) !!};
        var ruch = {!! json_encode($my_array[1]) !!};
        var jazykoveda = {!! json_encode($my_array[2]) !!};
        var vzdelavanie = {!! json_encode($my_array[3]) !!};
        var jazyk = {!! json_encode($my_array[4]) !!};
        var doktorandske_studium_fss = {!! json_encode($my_array[5]) !!};
   

        var ctxP = canvasP.getContext('2d');
        var myPieChart = new Chart(ctxP, {
        type: 'pie',
        //tooltip: { pointFormat: '{data.labels}: <b>{point.percentage:.1f}%</b>'},
   
        title: { text: 'Mychart'},
        data: {
        labels: ["FSŠ - Dekanát FSŠ", "FSŠ - Katedra cestovného ruchu", "FSŠ - Ústav maď.jazykovedy  a lit. vedy", "FSŠ - ústav pre vzdelávanie pedagógov", "FSŠ - Ústav stredoeur.jazykov a kultúr", "FSŠ - doktorandské štúdium"],
        datasets: [{
         data: [dekanat_fss, ruch, jazykoveda, vzdelavanie, jazyk, doktorandske_studium_fss],
         backgroundColor: ["#2196F3", "#F44336", "#FFF000", "#8D7373", "#F08080", "#E0FFFF"],
        // hoverBackgroundColor: ["#B2EBF2", "#FFCCBC", "#4DD0E1", "#FF8A65", "#00BCD4"]
        }]
        },
        options: {
        legend: {
        
        
         position: "right"
        }
        }
        });

        break;
    }

   

canvasP.onclick = function(e) {
   var slice = myPieChart.getElementAtEvent(e);
   if (!slice.length) return; // return if not clicked on slice
   var label = slice[0]._model.label;
   switch (label) {
      // add case for each label/slice
      case 'Fakulta prírodných Vied':

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
   </div> 
       


        
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




    <div class="form-group">
   <div class="col-md-8 col-md-offset-5">
                        <a href="{{ url('bar-chart') }}"> 
                            <button type="button" style="height:40px; width:250px" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Naspäť
                            </button>
                        </a>
   </div>                   
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


</section>
                   @auth   
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
@endauth

@stop