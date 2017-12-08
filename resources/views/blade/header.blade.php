
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
	<link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.css') }}">
 

  

	<!-- Theme skin -->
	<link href="{{ asset('skins/default.css') }}" type="text/css" rel="stylesheet" />

	<!--  script funntion of JavaScript -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



		<header>
			<br>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
				
					
					<div class="navbar-header">
					

					<a href="{{ url('/') }}"><img src="{{ asset('img/logoukf.png') }}"></a>
						
				    </div>
									
						
						
					@auth
						<div class="navbar-collapse collapse">						
							
						<ul class="nav navbar-nav" style="float:right;">	
																
							<li class="dropdown">
								 
								 <?php
								  $imageDataType=Auth::user()->profile_picture_type;
								  $imageData=Auth::user()->profile_picture;
								  $imageLink = 'data: '.$imageDataType.';base64,'.$imageData;
								 ?>

								
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><img src="{{ $imageLink }}"></a>						    
																																				
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">{{ Auth::user()->username }}</a>	



								<ul class="dropdown-menu">									
									@if(Auth::user()->role == "admin")
									<li><a href="{{ route('users') }}"><b>Používatelia</b></a></li>
									<li><a href="{{ route('settings') }}"><b>Nastavenia</b></a></li>
									<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><b>Odhlásiť sa</b></a></li>
									@else
									<li><a href="{{ route('profile') }}"><b>Profil</b></a></li>									
									<li><a href="{{ route('publications') }}"><b>Publikácie</b></a></li>
                                   	<li><a href="{{ route('projects') }}"><b>Projekty</b></a></li>
									<li><a href="{{ route('activities') }}"><b>Aktivity</b></a></li>								
									<li><a href="{{ route('settings') }}"><b>Nastavenia</b></a></li>
									<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><b>Odhlásiť sa</b></a></li>
									@endif
								</ul>

							</li>
							
						</ul>						
				
					</div>

					<ul class="nav navbar-nav">
							<li class="active"><a href="{{ url('/') }}">Domovská stránka</a></li>						
							
							<li class="dropdown">							
				
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Štatistiky</a>				
								<ul class="dropdown-menu">									
									<li><a href="{{ route('bar-chart') }}"><b>Podľa fakulty</b></a></li>
									<li><a href="{{ route('bar-chart2') }}"><b>Podľa pozície</b></a></li>
                         

								</ul>

							</li>
						
                            						
							
						</ul>


					@endauth
					@guest

					<div class="navbar-collapse collapse" style="visibility: hidden;">						
							
						<ul class="nav navbar-nav" style="float:right;">	
																
							<li class="dropdown">
								
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><img src="{{ asset('img/user.png') }}"></a>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Username</a>				
								
							</li>
							
						</ul>						
				
					</div>



					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{ url('/') }}">Domovská stránka</a></li>					
							
							</li>
							<li class="dropdown">							
				
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Štatistiky</a>				
								<ul class="dropdown-menu">									
									<li><a href="{{ route('bar-chart') }}"><b>Podľa fakulty</b></a></li>
									<li><a href="{{ route('bar-chart2') }}"><b>Podľa pozície</b></a></li>
                         

								</ul>

							</li>

							
						</ul>

					</div>
					@endguest	
				
						
				


				</div>

			
				</div>

			
</header>
