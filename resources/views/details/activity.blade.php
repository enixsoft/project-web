<!DOCTYPE html>
<html lang="en">

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
    

    
    /*
    table,th {
    	border: 1px solid black; 
    	padding: 3px; 
    	background-color: #efefef;
    }*/

		.form-control {		
		border: none;		
		background: #fff;
		color: #666;
		-moz-border-radius: 4px;
		-webkit-border-radius: 4px;
		border: 2px solid #ddd;				
		border-radius: 4px;
		

	}

	input{
    height:500px;
    width:500px;
    word-break: break-word;
}

	
	textarea {
    resize: none;
     width:100%;
  height:100%; 
  overflow: auto;
   }

    h1 {
        color:white;
    }

	.log-btn {
		background: #87CEFA;
		width: 130%;
		font-size: 16px;
		height: 40px;
		color: #fff;
		margin-left: 6px;
		text-decoration: none;
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
								@foreach ($zaznam as $z)
								<h2><span>Aktivita</span> {{ $z->$premenna4 }}</h2>
								  @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	


<section id="content">



<div class="container">
<div class="row">

@auth
@if(Auth::user()->zamestnanec_id == $premenna0 || Auth::user()->role == "admin" )
	 	
      <form class="form-horizontal" method="POST" action="{{ $controller }}"> 				
        <table class="table">
        	  @foreach ($zaznam as $z)
            <tr>
                <th><h4>{{$stlpec1}}</h4></th>
                <td><input readonly class="form-control" name="id" value="{{ object_get($z, $premenna1) }}"></input></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec2}}</h4></th>
                <td><textarea class="form-control" name="textarea1" rows="5">{{ object_get($z, $premenna2) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec3}}</h4></th>
                <td><textarea class="form-control" name="textarea2"  rows="5">{{ object_get($z, $premenna3) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec4}}</h4></th>
                <td><textarea class="form-control" name="textarea3"  rows="5">{{ object_get($z, $premenna4) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec5}}</h4></th>
                <td><textarea class="form-control" name="textarea4"  rows="5">{{ object_get($z, $premenna5) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec6}}</h4></th>
                <td><textarea class="form-control" name="textarea5"  rows="5">{{ object_get($z, $premenna6) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec7}}</h4></th>
                <td><textarea class="form-control" name="textarea6"  rows="5">{{ object_get($z, $premenna7) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec8}}</h4></th>
                <td><textarea class="form-control" name="textarea7"  rows="5">{{ object_get($z, $premenna8) }}</textarea></td>
            </tr>

            
            




            @endforeach
        </table>


        <div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                                <button style="height:40px; width:250px" type="submit" class="btn btn-primary" >
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Uložiť
                                </button>
         					</div>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>
@else

 <table class="table">
        	  @foreach ($zaznam as $z)
            <tr>
                <th><h4>{{$stlpec1}}</h4></th>
                <td><input readonly class="form-control" value="{{ object_get($z, $premenna1) }}"></input></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec2}}</h4></th>
                <td><textarea class="form-control" name="textarea1" rows="5">{{ object_get($z, $premenna2) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec3}}</h4></th>
                <td><textarea class="form-control" name="textarea2"  rows="5">{{ object_get($z, $premenna3) }}</textarea></td>
            </tr>
                     <tr>
                <th><h4>{{$stlpec4}}</h4></th>
                <td><textarea class="form-control" name="textarea3"  rows="5">{{ object_get($z, $premenna4) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec5}}</h4></th>
                <td><textarea class="form-control" name="textarea4"  rows="5">{{ object_get($z, $premenna5) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec6}}</h4></th>
                <td><textarea class="form-control" name="textarea5"  rows="5">{{ object_get($z, $premenna6) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec7}}</h4></th>
                <td><textarea class="form-control" name="textarea6"  rows="5">{{ object_get($z, $premenna7) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec8}}</h4></th>
                <td><textarea class="form-control" name="textarea7"  rows="5">{{ object_get($z, $premenna8) }}</textarea></td>
            </tr>

              
            @endforeach
        </table>
@endif                   
@endauth
@guest

 <table class="table">
        	  @foreach ($zaznam as $z)
            <tr>
                <th><h4>{{$stlpec1}}</h4></th>
                 <td><input readonly class="form-control" value="{{ object_get($z, $premenna1) }}"></input></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec2}}</h4></th>
                <td><textarea class="form-control" name="textarea1" rows="5">{{ object_get($z, $premenna2) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec3}}</h4></th>
                <td><textarea class="form-control" name="textarea2"  rows="5">{{ object_get($z, $premenna3) }}</textarea></td>
            </tr>
                     <tr>
                <th><h4>{{$stlpec4}}</h4></th>
                <td><textarea class="form-control" name="textarea3"  rows="5">{{ object_get($z, $premenna4) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec5}}</h4></th>
                <td><textarea class="form-control" name="textarea4"  rows="5">{{ object_get($z, $premenna5) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec6}}</h4></th>
                <td><textarea class="form-control" name="textarea5"  rows="5">{{ object_get($z, $premenna6) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec7}}</h4></th>
                <td><textarea class="form-control" name="textarea6"  rows="5">{{ object_get($z, $premenna7) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec8}}</h4></th>
                <td><textarea class="form-control" name="textarea7"  rows="5">{{ object_get($z, $premenna8) }}</textarea></td>
            </tr>

           
            @endforeach
        </table>

@endguest


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

</div>
</div>					

<br>
<br>
<br>


</section>

@auth   
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
@endauth

@stop