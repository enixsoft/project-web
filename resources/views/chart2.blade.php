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
    text-align: center;:
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
                                <h2><span>Štatistiky</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br>
        <br>
        <br>
        
        <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div align="center"> 
                {!! $charts->html() !!}

                <div class="panel-body">
                 </div> 
                </div>
            </div>
        </div>
        </div>
        </div>
    
        {!! Charts::scripts() !!}
        {!! $charts->script() !!}

        


        
<br>
<br>
<br>
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
                        <a href="{{ url('/') }}"> 
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
