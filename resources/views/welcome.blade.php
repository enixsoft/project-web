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
	
	<script>
	$(document).ready(function(){
    $('.zamestnanci_click_button').click(function(){
        $('.zamestnanci_buttons').toggle();

          {document.getElementById("zamestnanci_viac_button").style.display="none";}
          {document.getElementById("zamestnanci_menej_form").style.display="none";}       

    });
	});
	</script>


	<script>
	$(document).ready(function(){

		$('.zamestnanci_click_button_2').click(function() {

			{document.getElementById("zamestnanci_viac_button").style.display="block";}
			{document.getElementById("zamestnanci_menej_form").style.display="block";}
			{document.getElementById("zamestnanci_viac_form").style.display="none";}
		});
	});
   </script>

   <script>
	$(document).ready(function(){
    $('.publikacie_click_button').click(function(){
        $('.publikacie_buttons').toggle();

         {document.getElementById("publikacie_viac_button").style.display="none";}
         {document.getElementById("publikacie_menej_form").style.display="none";}       

    });
	});
	</script>


	<script>
	$(document).ready(function(){

		$('.publikacie_click_button_2').click(function() {

			{document.getElementById("publikacie_viac_button").style.display="block";}
			{document.getElementById("publikacie_menej_form").style.display="block";}
			{document.getElementById("publikacie_viac_form").style.display="none";}
		});
	});
   </script>

      <script>
	$(document).ready(function(){
    $('.aktivity_click_button').click(function(){
        $('.aktivity_buttons').toggle();

         {document.getElementById("aktivity_viac_button").style.display="none";}
         {document.getElementById("aktivity_menej_form").style.display="none";}       

    });
	});
	</script>


	<script>
	$(document).ready(function(){

		$('.aktivity_click_button_2').click(function() {

			{document.getElementById("aktivity_viac_button").style.display="block";}
			{document.getElementById("aktivity_menej_form").style.display="block";}
			{document.getElementById("aktivity_viac_form").style.display="none";}
		});
	});
   </script>

          <script>
	$(document).ready(function(){
    $('.projekty_click_button').click(function(){
        $('.projekty_buttons').toggle();

         {document.getElementById("projekty_viac_button").style.display="none";}
         {document.getElementById("projekty_menej_form").style.display="none";}       

    });
	});
	</script>


	<script>
	$(document).ready(function(){

		$('.projekty_click_button_2').click(function() {

			{document.getElementById("projekty_viac_button").style.display="block";}
			{document.getElementById("projekty_menej_form").style.display="block";}
			{document.getElementById("projekty_viac_form").style.display="none";}
		});
	});
   </script>


	
	<!-- =======================================================
    Theme Name: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->



</head>
<style>

	.zamestnanci_buttons 
	{
		display: none;
	}

	.publikacie_buttons
	{
		display: none;
	}

	.aktivity_buttons
	{
		display: none;
	}

	.projekty_buttons
	{
		display: none;
	}

	.button_down
	{
		
	}


	.form-control {
		width: 70%;
		height: 40px;
		border: none;
		padding: 5px 7px 5px 15px;
		background: #fff;
		color: #666;
		-moz-border-radius: 4px;
		-webkit-border-radius: 4px;
		border: 2px solid #ddd;
		margin-left: 20px;			
		border-radius: 4px;

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

					<ul class="nav navbar-nav">
							<li class="active"><a href="{{ url('/') }}">Domovská stránka</a></li>						
							<li><a href="{{ url('statistics') }}">Štatistiky</a></li>	
						
                            						
							
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
							<li><a href="{{ url('statistics') }}">Štatistiky</a></li>						                           						
							
						</ul>

					</div>
					@endguest	
				
						
				


				</div>

			
				</div>

			
		</header>



		<!-- start header 
		


		<header>
			
			<div class="navbar navbar-default navbar-static-top">
				
					
					<div class="container">
						<a href="{{ url('/') }}"><img src="{{ asset('img/logoukf.png') }}"></a>
				
						<div class="navbar-header">
						
						

                                           
                    
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="components.html">Components</a></li>
                                    <li><a href="pricingbox.html">Pricing box</a></li>
                                </ul>
                            </li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
				</div>
							
					<a href="{{ url('/') }}"><img src="{{ asset('img/logoukf.png') }}"></a>
					</div>
				
				
		</header>
		end header -->
		



		
		<section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="big-cta">
							<div class="cta-text">
								<h2><span>Vitajte</span> 
									@auth
									{{ Auth::user()->username }}
									@endauth
								 v katalógu zamestnancov UKF</h2>
							</div>
						</div>
					</div>
						<!--
						<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{ url('/') }}">Domovská stránka</a></li>						
							<li><a href="{{ url('portfolio') }}">Štatistiky</a></li>							
							
						</ul>
					</div>
						-->
				
				</div>

			</div>



				<!--
				<div class="container">					

					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{ url('/') }}">Domovská stránka</a></li>						
							<li><a href="{{ url('portfolio') }}">Štatistiky</a></li>							
							
						</ul>
					</div>
				</div>
			-->
			

		</section>

		




		<section id="content">
			<div class="container">
				<div class="row">
					<div class="container">
						
						
							
							@guest

								<h2>Prihlásenie</h2>
											
					

					 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Heslo</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Zapamätať prihlásenie
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                                <button style="height:40px; width:250px" type="submit" class="btn btn-primary">
                                    Prihlásiť 
                                </button>
                          </div>
                        </div>
                    </form>
                    	<br>
                    	</div>


                    	@endguest
     

     <div class="container">
   						

                   @auth   
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
@endauth

@guest
    Neprihlásený používateľ.
    <a href="{{ route('register') }}">Registrácia (debug)</a>
    <a href="{{ route('login') }}">Prihlásenie (debug)</a>
@endguest


	</div>			  
								
								
								


				<div class="row">
				<div class="container">



							<p>
								<h2>Vyhľadávanie zamestnancov</h2>
										
							</p>

				</div>
				</div>


					<div id="zamestnanci_menej_form">			
						
						<div class="container">
					              	  
                        	 

                        	<form class="form-horizontal" method="POST" action="{{route('searchEmployee')}}"> 
                            <div class="form-group">
                            <label for="email" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="fulltext">
                            
                            </div>
                            </div>

                              <div class="form-group">
                             
                                
                                <div class ="zamestnanci_click_button col-md-8 col-md-offset-5" id="zamestnanci_viac_button">
								<button type="button" style="height:40px; width:250px;" class="btn btn-link btn-md">
							    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
								Kategorické vyhľadávanie
							    </button>
								</div>
                            
                            
                            </div>
                           

                            <div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                                <button style="height:40px; width:250px" type="submit" class="btn btn-primary" >
                                 <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Hľadať v katalógu 
                                </button>
                          	</div>
                        	</div>

                        	<input type="hidden" name="_token" value="{{ csrf_token() }}">

                    		</form>	
                    		
                    		</div>

                    		</div><!-- TU KONCI DIV ID  -->
                   			

                   
                    		
                    
                           
			<div class ="zamestnanci_buttons" id="zamestnanci_viac_form">		<!-- tu sa vsetko zobrazi ako rozsirene -->
						
						

				<div class="container">
					
                  					

                      <form class="form-horizontal" method="POST" action="{{route('searchEmployee')}}"> 
                        
                      <div class="form-group">
                        	<label for="email" class="col-md-4 control-label">Meno:</label>
                        

                        	<div class="col-md-6">      
                      		<input type="text" class="form-control" name="name">
                   			</div>
                   	 </div>

                   		
                            
                       <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Katedra:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="department">
                            
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Fakulta:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="faculty">
                            
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Popis:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="description">
                            
                            </div>

                        </div>

                         <div class="form-group">
                             
                                
                                <div class ="zamestnanci_click_button_2 col-md-8 col-md-offset-5" id="roztvor">
								<button type="button" style="height:40px; width:250px;" class="btn btn-link btn-md">
							    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
								Full-text vyhľadávanie
							    </button>
								</div>
                            
                            
                          </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                                <button style="height:40px; width:250px" type="submit" class="btn btn-primary" >
                                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Hľadať v katalógu  
                                </button>
                          </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>	
               

              </div>
             

									
		</div>		



					
						


			<div class="row">
			<div class="container">



							<p>
								<h2>Vyhľadávanie publikácií</h2>
							</p>

			</div>
			</div>

				<div id="publikacie_menej_form">
                 <div class="container">
						
						
					 <form class="form-horizontal" method="POST" action="{{route('searchPublication')}}">
                       

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">ISBN:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="ISBN">
                            
                            </div>
                        </div>

                       <div class="form-group">

                       	<div class ="publikacie_click_button col-md-8 col-md-offset-5" id="publikacie_viac_button">
								<button type="button" style="height:40px; width:250px;" class="btn btn-link btn-md">
							    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
								Viac možností
							    </button>
								</div>
                            
                            
                            </div>

                         <div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                                <button style="height:40px; width:250px" type="submit" class="btn btn-primary" >
                                 <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Hľadať v katalógu 
                                </button>
                          	</div>
                        	</div>

                        	<input type="hidden" name="_token" value="{{ csrf_token() }}">

                    		</form>	
                    		
                    		</div>

                    		</div><!-- TU KONCI DIV ID  --> 	


              <div class ="publikacie_buttons" id="publikacie_viac_form">		<!-- tu sa vsetko zobrazi ako rozsirene -->


                  <div class="container">

                    	<form class="form-horizontal" method="POST" action="{{route('searchPublication')}}">

                    	<div class="form-group">
                            <label for="email" class="col-md-4 control-label">ISBN:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="ISBN">
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Titul:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="title">
                            
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Podtitul:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="sub_title">
                            
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Autor:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="author">
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Typ:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="type">
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Vydavateľ:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="publisher">
                            
                            </div>
                        </div>    

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Počet strán:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="pages">
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Rok:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="year">
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Kód:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="code">
                            
                            </div>
                        </div>

                        <div class="form-group">
                             
                                
                                <div class ="publikacie_click_button_2 col-md-8 col-md-offset-5" id="roztvor">
								<button type="button" style="height:40px; width:250px;" class="btn btn-link btn-md">
							    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
								Menej možností
							    </button>
								</div>
                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                            	
                                <button style="height:40px; width:250px" type="submit" class="btn btn-primary">
                                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Hľadať v katalógu  
                                </button>
                          </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>

                  
                 </div>
             </div>			<!-- konci rozsirene vyhladavanie publikacii -->

                 			

                 			<div class="row">
							<div class="container">



							<p>
								<h2>Vyhľadávanie aktivít</h2>
							</p>

							</div>
							</div>


				<div id="aktivity_menej_form">
                  <div class="container">
						
						
					 <form class="form-horizontal" method="POST" action="{{route('searchActivity')}}">
                       

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Zamestnanec (ID):</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="zamestnanec_id">
                            
                            </div>
                        </div>

                        <div class="form-group">
                             
                                <div class ="aktivity_click_button col-md-8 col-md-offset-5" id="aktivity_viac_button">
								<button type="button" style="height:40px; width:250px;" class="btn btn-link btn-md">
							    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
								Viac možností
							    </button>
								</div>
                            
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                                <button style="height:40px; width:250px" type="submit" class="btn btn-primary" >
                                 <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Hľadať v katalógu 
                                </button>
                          	</div>
                        	</div>

                        	<input type="hidden" name="_token" value="{{ csrf_token() }}">

                    		</form>	
                    		
                    </div>

                 </div><!-- TU KONCI DIV ID  -->

                <div class ="aktivity_buttons" id="aktivity_viac_form">		<!-- tu sa vsetko zobrazi ako rozsirene -->
						

						<div class="container">

						<form class="form-horizontal" method="POST" action="{{route('searchActivity')}}"> 

						 <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Zamestnanec (ID):</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="zamestnanec_id">
                            
                            </div>
                        </div>


                       	<div class="form-group">
                            <label for="email" class="col-md-4 control-label">Dátum:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="date">
                            
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Titul:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="title">
                            
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Krajina:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="country">
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Typ:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="type">
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Kategória:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="category">
                            
                            </div>
                        </div>    

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Ostatní autori:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="all_authors">
                            
                            </div>
                        </div>
                
                        <div class="form-group">
                             
                                
                                <div class ="aktivity_click_button_2 col-md-8 col-md-offset-5" id="roztvor">
								<button type="button" style="height:40px; width:250px;" class="btn btn-link btn-md">
							    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
								Menej možností
							    </button>
								</div>
                            
                            
                          </div>
           
                          <div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                                <button style="height:40px; width:250px" type="submit" class="btn btn-primary" >
                                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Hľadať v katalógu  
                                </button>
                          </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    	</form>	
               
              			</div>		
					</div>		<!-- tu konci rozsirene vyhladavanie aktivit -->
             
             


                        

                            <div class="row">
							<div class="container">



							<p>
								<h2>Vyhľadávanie projektov</h2>
							</p>

								</div>
								</div>


			<div id="projekty_menej_form">
							
                  <div class="container">
						
						
					 <form class="form-horizontal" method="POST" action="{{route('searchProject')}}">
                       

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Zamestnanec (ID):</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="zamestnanec">
                            
                            </div>
                        </div>


                        <div class ="projekty_click_button col-md-8 col-md-offset-5" id="projekty_viac_button">
								<button type="button" style="height:40px; width:250px;" class="btn btn-link btn-md">
							    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
								Viac možností
							    </button>
						</div>
                          
                       
                           
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                                <button style="height:40px; width:250px" type="submit" class="btn btn-primary" >
                                 <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Hľadať v katalógu 
                                </button>
                          	</div>
                        	</div>

                        	<input type="hidden" name="_token" value="{{ csrf_token() }}">

                    		</form>	
                    		
                    		</div>

                    		</div><!-- TU KONCI DIV ID  -->


            <div class ="projekty_buttons" id="projekty_viac_form">		<!-- tu sa vsetko zobrazi ako rozsirene -->
						
					<div class="container">

					<form class="form-horizontal" method="POST" action="{{route('searchProject')}}">     			

						<div class="form-group">
                            <label for="email" class="col-md-4 control-label">Zamestnanec (ID):</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="zamestnanec">
                            
                            </div>
                        </div>
                       

                       <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Titul:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="title">
                            
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Od roku:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="year_from">
                            
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Do roku:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="year_end">
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Reg. číslo:</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="reg_number">
                            
                            </div>
                        </div>

                        <div class="form-group">
                             
                                
                                <div class ="projekty_click_button_2 col-md-8 col-md-offset-5" id="roztvor">
								<button type="button" style="height:40px; width:250px;" class="btn btn-link btn-md">
							    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
								Menej možností
							    </button>
								</div>
                            
           
                        </div>
    
                     	<div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                                <button style="height:40px; width:250px" type="submit" class="btn btn-primary" >
                                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Hľadať v katalógu  
                                </button>
                          </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>	
               

              </div>
          </div>


          

	</div>


</div>


		</section>
		

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
	<script type="text/javascript" charset="utf8" src="{{ asset('DataTables/datatables.js') }}"></script>	
	<script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
        });
    </script>

</body>

</html>