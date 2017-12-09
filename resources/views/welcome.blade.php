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
		
			
		
	   @extends('layout')
	   @section('content')







		
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
					
				
				</div>

			</div>



	
			

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
                                
                                <select id="selectnumber" class="form-control" name="department">
                                <option></option>
                                @foreach($tabulka_zam_katedra as $katedra)
                                <option value="{{$katedra->department}}">{{$katedra->department}}</option>
                                @endforeach
            					
        						</select>
                            
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Fakulta:</label>

                            <div class="col-md-6" >
                               
                                <select id="selectnumber" class="form-control" name="faculty">
                                <option></option>
                                @foreach($tabulka_zam_fakulta as $fakulta)
                                <option value="{{$fakulta->faculty}}">{{$fakulta->faculty}}</option>
                                @endforeach
            					
        						</select>
                              
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Popis:</label>

                            <div class="col-md-6">
                                
                                 <select id="hh" class="form-control" name="description">
                                <option></option>
                                @foreach($tabulka_zam_popis as $popis)
                                <option value="{{$popis->description}}">{{$popis->description}}</option>
                                @endforeach
            					
        						</select>
                            
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
                                
                                <select id="selectnumber" class="form-control" name="type">
                                <option></option>
                                @foreach($tabulka_publ_typ as $typ)
                                <option value="{{$typ->type}}">{{$typ->type}}</option>
                                @endforeach
            					
        						</select>
                            
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Vydavateľ:</label>

                            <div class="col-md-6">
                                
                                <select id="selectnumber" class="form-control" name="publisher">
                                <option></option>
                                @foreach($tabulka_publ_vydavatel as $vydavatel)
                                <option value="{{$vydavatel->publisher}}">{{$vydavatel->publisher}}</option>
                                @endforeach
            					
        						</select>
                            
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
                                
                                <select id="selectnumber" class="form-control" name="code">
                                <option></option>
                                @foreach($tabulka_publ_kod as $kod)
                                <option value="{{$kod->code}}">{{$kod->code}}</option>
                                @endforeach
            					
        						</select>
                            
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
                                
                                <select id="selectnumber" class="form-control" name="date">
                                <option></option>
                                @foreach($tabulka_akt_datum as $datum)
                                <option value="{{$datum->date}}">{{$datum->date}}</option>
                                @endforeach
            					
        						</select>
                            
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Titul:</label>

                            <div class="col-md-6">
                                
                                <select id="selectnumber" class="form-control" name="title">
                                <option></option>
                                @foreach($tabulka_akt_nazov as $nazov)
                                <option value="{{$nazov->title}}">{{$nazov->title}}</option>
                                @endforeach
            					
        						</select>
                            
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Krajina:</label>

                            <div class="col-md-6">
                                
                                <select id="selectnumber" class="form-control" name="country">
                                <option></option>
                                @foreach($tabulka_akt_krajina as $krajina)
                                <option value="{{$krajina->country}}">{{$krajina->country}}</option>
                                @endforeach
            					
        						</select>
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Typ:</label>

                            <div class="col-md-6">
                                
                                <select id="selectnumber" class="form-control" name="type">
                                <option></option>
                                @foreach($tabulka_akt_typ as $typ)
                                <option value="{{$typ->type}}">{{$typ->type}}</option>
                                @endforeach
            					
        						</select>
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Kategória:</label>

                            <div class="col-md-6">
                                
                                <select id="selectnumber" class="form-control" name="category">
                                <option></option>
                                @foreach($tabulka_akt_kategoria as $kategoria)
                                <option value="{{$kategoria->category}}">{{$kategoria->category}}</option>
                                @endforeach
            					
        						</select>
                            
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
                                
                                <select id="selectnumber" class="form-control" name="title">
                                <option></option>
                                @foreach($tabulka_proj_nazov as $nazov)
                                <option value="{{$nazov->title}}">{{$nazov->title}}</option>
                                @endforeach
            					
        						</select>
                            
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Od roku:</label>

                            <div class="col-md-6">
                                
                                <select id="selectnumber" class="form-control" name="year_from">
                                <option></option>
                                @foreach($tabulka_proj_z_roku as $z_roku)
                                <option value="{{$z_roku->year_from}}">{{$z_roku->year_from}}</option>
                                @endforeach
            					
        						</select>
                            
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Do roku:</label>

                            <div class="col-md-6">
                                
                                <select id="selectnumber" class="form-control" name="year_end">
                                <option></option>
                                @foreach($tabulka_proj_do_roku as $do_roku)
                                <option value="{{$do_roku->year_end}}">{{$do_roku->year_end}}</option>
                                @endforeach
            					
        						</select>
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Reg. číslo:</label>

                            <div class="col-md-6">
                                
                                <select id="selectnumber" class="form-control" name="reg_number">
                                <option></option>
                                @foreach($tabulka_proj_reg_cislo as $reg_cislo)
                                <option value="{{$reg_cislo->reg_number}}">{{$reg_cislo->reg_number}}</option>
                                @endforeach
            					
        						</select>
                            
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
		

@stop
