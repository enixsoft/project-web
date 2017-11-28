<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <title>UKF - Katalóg zamestnancov</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <!-- start header -->
        <header>
                <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                    

                    <a href="{{ url('/') }}"><img src="{{ asset('img/logoukf.png') }}"></a>
                        
                     </div>
                                    
                        
                        
                        @auth
                        <div class="navbar-collapse collapse">                      
                            
                        <ul class="nav navbar-nav" style="float:right;">    
                                                                
                            <li class="dropdown">
                                
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><img src="{{ asset('img/user.png') }}"></a>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">{{ Auth::user()->username }}</a>              
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('profile') }}"><b>Profil</b></a></li>
                                    <li><a href="{{ route('publications') }}"><b>Publikácie</b></a></li>
                                    <li><a href="{{ route('projects') }}"><b>Projekty</b></a></li>
                                    <li><a href="{{ route('activities') }}"><b>Aktivity</b></a></li>

                                
                                    <li><a href="components.html"><b>Nastavenia</b></a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><b>Odhlásiť sa</b></a></li>
                                </ul>

                            </li>
                            
                        </ul>                       
                
                    </div>
                    @endauth
                


                </div>
            
                </div>
        </header>
        <!-- end header -->

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
            <h1> Štatistika zamestnancov Filozofickej Fakulty </h1>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

            <div style="width: 600px; height: 600px">
            <canvas id="pieChart"></canvas>
            </div>
            </div>
                
              

                   
          

<script>
var canvasP = document.getElementById("pieChart");

   var dekanat_ff = {!! json_encode($count_dekanat_ff) !!};
   var jazykove_centrum = {!! json_encode($count_jazykove_centrum) !!};
   var translatologia = {!! json_encode($count_translatologia)!!};
   var anglistika = {!! json_encode($count_anglistika)!!};
   var archeologia = {!! json_encode($count_archeologia) !!};
   var etnologia = {!! json_encode($count_etnologia) !!};
   var filozofia = {!! json_encode($count_filozofia)!!};
   var germanistika = {!! json_encode($count_germanistika)!!};
   var historia = {!! json_encode($count_historia) !!};
   var kulturologia = {!! json_encode($count_kulturologia) !!};
   var manazment = {!! json_encode($count_manazment)!!};
   var reklama = {!! json_encode($count_reklama)!!};
   var muzeologia = {!! json_encode($count_muzeologia) !!};
   var nabozenstvo = {!! json_encode($count_nabozenstvo) !!};
   var politologia = {!! json_encode($count_politologia)!!};
   var romanistika = {!! json_encode($count_romanistika)!!};
   var rusistika = {!! json_encode($count_rusistika) !!};
   var literatura = {!! json_encode($count_literatura) !!};
   var sociologia = {!! json_encode($count_sociologia)!!};
   var etiketa = {!! json_encode($count_etiketa)!!};
   var zurnalistika = {!! json_encode($count_zurnalistika)!!};
   var komunikacia = {!! json_encode($count_komunikacia)!!};
   var metoda = {!! json_encode($count_metoda) !!};
   var medialne_centrum = {!! json_encode($count_medialne_centrum) !!};
   var doktorandske_studium = {!! json_encode($count_doktorandske_studium)!!};
   
  


    

   var ctxP = canvasP.getContext('2d');
   var myPieChart = new Chart(ctxP, {
   type: 'pie',
   //tooltip: { pointFormat: '{data.labels}: <b>{point.percentage:.1f}%</b>'},
   
   title: { text: 'Mychart'},
   data: {
      labels: ["FF - Dekanát Filozofickej fakulty", "FF - Jazykové centrum", "FF - Katedra  translatológie", "FF - Katedra anglistiky a amerikanistiky", "FF - Katedra archeológie", "FF - Katedra etnológie a folkloristiky", "FF - Katedra filozofie", "FF - Katedra germanistiky", "FF - Katedra histórie", "FF - Katedra kulturológie", "FF - Katedra manažmentu kult.a turizmu", "FF - Katedra masm. komunikácie a reklamy", "FF - Katedra muzeológie", "FF - Katedra náboženských štúdií", "FF - Katedra politológie a euroáz.štúdií", "FF - Katedra romanistiky", "FF - Katedra rusistiky", "FF - Katedra slovenského jazyka a litera", "FF - Katedra sociológie", "FF - Katedra všeob. a aplikovanej etiky", "FF - Katedra žurnalistiky", "FF - Ústav lit. a umeleckej komunikácie", "FF - Ústav pre v. k. d. Konšt. a Metoda", "FF - Mediálne centrum", "FF - doktorandské štúdium" ],
      datasets: [{
         data: [dekanat_ff, jazykove_centrum, translatologia, anglistika, archeologia, etnologia, filozofia, germanistika, historia, kulturologia, manazment, reklama, muzeologia, nabozenstvo, politologia, romanistika, rusistika, literatura, sociologia, etiketa, zurnalistika, komunikacia, metoda, medialne_centrum, doktorandske_studium],
         backgroundColor: ["#2196F3", "#F44336", "#FFC107", "#8D7373", "#F08080", "#E0FFFF", "#FF00FF", "#DAA520", "#4B0082", "#FF69B4", "#20B2AA ", "#800000", "#0000CD", "#3CB371 ", "#BA55D3", "#6B8E23", "#FA8072 ", "#87CEEB", "#9ACD32", "#000000", "#40E0D0", "#00FF00", "#F0E68C", "#2F4F4F", "#BDB76B"],
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
       var url = "{{ route('stastistics-fpv')}}";
       window.location.replace(url);
        break;

      case 'Filozofická fakulta':
         // alert('clicked on slice 6');
         // window.load('www.example.com/bar');
       var url = "{{ route('stastistics-ff')}}";
       window.location.replace(url);
         break;

      case 'Pedagogická fakulta':
         // alert('clicked on slice 6');
         // window.load('www.example.com/bar');
       var url = "{{ route('stastistics-pf')}}";
       window.location.replace(url);
         break;

       case 'Fakulta stredoeurópskych Štúdií':
         // alert('clicked on slice 6');
         // window.load('www.example.com/bar');
       var url = "{{ route('stastistics-fss')}}";
       window.location.replace(url);
         break;

      case 'Fakulta sociál.vied a zdravotníctva':
         // alert('clicked on slice 6');
         // window.load('www.example.com/bar');
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
                        <a href="{{ url('/bar-chart') }}"> 
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

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">Autori</h5>
                     <address>
                        <strong>M. Vršanský, M. Vančo, R. Chnapko</strong>
                        <br>
                        študenti odboru aplikovaná informatika 
                        <br>
                        Fakulta Prírodných Vied
                        <br>
                        Univerzita Konštantína Filozofa v Nitre
                        <br>
                        <br>
                        
                    </address>
                        </div>
                    </div>
        
            
                    
            </div>
            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>&copy; Moderna Theme. All right reserved.</p>
                                <div class="credits">
                                    <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Moderna
                  -->
                                    <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="social-network">
                                <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('js/google-code-prettify/prettify.js') }}"></script>
    <script src="{{ asset('js/portfolio/jquery.quicksand.js') }}"></script>
    <script src="{{ asset('js/portfolio/setting.js') }}"></script>
    <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('js/animate.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('DataTables/DataTables-1.10.16/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('DataTables/DataTables-1.10.16/js/dataTables.bootstrap4.js') }}"></script>  
    <script type="text/javascript">
        $(document).ready(function ()
        {
            $('#datatable').dataTable(
                {
                 "language": {
                 "sEmptyTable":     "Nie sú k dispozícii žiadne dáta",
                 "sInfo":           "Záznamy _START_ až _END_ z celkom _TOTAL_",
                 "sInfoEmpty":      "Záznamy 0 až 0 z celkom 0 ",
                 "sInfoFiltered":   "(vyfiltrované spomedzi _MAX_ záznamov)",
                 "sInfoPostFix":    "",
                 "sInfoThousands":  ",",
                 "sLengthMenu":     "Zobraz _MENU_ záznamov",
                 "sLoadingRecords": "Načítavam...",
                 "sProcessing":     "Spracúvam...",
                 "sSearch":         "Hľadať:",
                 "sZeroRecords":    "Nenašli sa žiadne vyhovujúce záznamy",
                 "oPaginate": {
                 "sFirst":    "Prvá",
                 "sLast":     "Posledná",
                 "sNext":     "Nasledujúca",
                 "sPrevious": "Predchádzajúca"
                 },
                "oAria": {
                    "sSortAscending":  ": aktivujte na zoradenie stĺpca vzostupne",
                    "sSortDescending": ": aktivujte na zoradenie stĺpca zostupne"
                         }
                }
                } 
                );

        });
    </script>

</body>

</html>
