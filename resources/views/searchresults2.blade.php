<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="utf-8">
	<title>UKF - Vyhľadávanie</title>
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
								<h2><span>Výsledky</span> vyhľadávania</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



<section id="content">
			

			<div class="container">
	
				<div class="row">
		@if(count($user)>0)




		

	  <form id="form1" runat="server">
     
            <table id="datatable" class="table" style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;
    		font-size: 14px;
   			font-weight: 300;
   			width:100%;
   			">
                <thead>
                    <tr>
                                          
                      <th>{{$stlpec1}}</th>
                      <th>{{$stlpec2}}</th>
                      <th>{{$stlpec3}}</th>
                      <th>{{$stlpec4}}</th>
                    </tr>
                </thead>
                <tbody>

                   @foreach ($user as $z)
                      <tr>                
                          
                            <td> <a href="{{ url('/') }}/{{ $resultCategory }}/{{ $z->$variable0 }}">{{ $z->$variable1 }}</a></td>            
                            <td>{{ $z->$variable2 }}</td>
                            <td>{{ $z->$variable3 }}</td>
                            <td>{{ $z->$variable4 }}</td>
                                                

                    </tr>
                    @endforeach
                </tbody>
            </table>
      
    </form>
		
    </div>


@else
<p>
<h2>
Chyba
</h2>
Nenašli sa žiadne výsledky.
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