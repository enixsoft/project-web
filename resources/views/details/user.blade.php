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
								@if(count($zaznam)>0)
                                @foreach ($zaznam as $z)
								<h2><span>Používateľ</span> {{ $z->$premenna4 }}</h2>
								 @endforeach
                                 @endif
							</div>
						</div>
					</div>
				</div>
                  <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">  
                            @if(count($zaznam)>0)
                            @foreach ($zaznam as $z)
                            @if(!is_null($premenna0))
                            <li><a href="{{ url('/')}}/employees/{{ $premenna0 }}"><b>Zamestnancov profil</b></a></li>
                            <li><a href="{{ url('/')}}/employees/{{ $premenna0 }}/publications"><b>Zamestnancove publikácie</b></a></li>                                                            
                            <li><a href="{{ url('/')}}/employees/{{ $premenna0 }}/projects"><b>Zamestnancove projekty</b></a></li>                                                                        
                            <li><a href="{{ url('/')}}/employees/{{ $premenna0 }}/activities"><b>Zamestnancove aktivity</b></a></li>
                            @endif
                            @endforeach
                            @endif
                        </ul>

                    </div>


			</div>
		</section>
	


<section id="content">



<div class="container">
<div class="row">

@auth
@if(Auth::user()->role == "admin")
@if(count($zaznam)>0)
	 	
      <form class="form-horizontal" method="POST" action="{{route('updateUser')}}"> 				
        <table class="table">
        	  @foreach ($zaznam as $z)
            <tr>
                <th><h4>{{$stlpec1}}</h4></th>
                     <?php
                                  $imageDataType=$z->profile_picture_type;
                                  $imageData=$z->profile_picture;
                                  $imageLink = 'data: '.$imageDataType.';base64,'.$imageData;
                      ?>

                <td><img src="{{ $imageLink }}">

                    
                </td>
            </tr>
             <tr>
                <th><h4>{{$stlpec2}}</h4></th>
                <td><input readonly class="form-control" name="id" value="{{ object_get($z, $premenna2) }}"></input></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec3}}</h4></th>
                <td><textarea class="form-control" name="textarea1" rows="5">{{ object_get($z, $premenna3) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec4}}</h4></th>
                <td><textarea class="form-control" name="textarea2"  rows="5">{{ object_get($z, $premenna4) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec5}}</h4></th>
                <td><textarea class="form-control" name="textarea3"  rows="5">{{ object_get($z, $premenna5) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec6}}</h4></th>
                <td><textarea class="form-control" name="textarea4"  rows="5">{{ object_get($z, $premenna6) }}</textarea></td>
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



<br>

 
   <div class="form-group">
   <div class="col-md-8 col-md-offset-5">
                        <form method="POST" action="{{ route('deleteUser')}}">     
                            <input  type="hidden" name="id" value="{{ $premenna00 }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           
                            <button type="submit" style="height:40px; width:250px" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Odstrániť používateľa
                            </button>

                        </form>
   </div>
   </div>



@else
<p>
<h2>
Chyba
</h2>
Používateľ so zadaným ID neexistuje. 
</p>
  <!--   <div style="width: 1100px; border: 1px solid black; padding: 2px">-->
    <!--  </div>--> 
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
<br>
<br>
<br>
<br>

@endif
@else
<p>
<h2>
Chyba
</h2>
Nemáte dostatočné práva na zobrazenie tejto stránky.
</p>
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
<br>
<br>
<br>
<br>
@endif
@endauth



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