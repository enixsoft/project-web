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
									<li><a href="typography.html"><b>Profil</b></a></li>
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
		



		</section>
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

							<!--
							Prihlasovacie rozhranie
							-->
								
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
								<h2>Vyhľadávanie</h2>
											Napíšte ID a stlačte Enter.
							</p>
								
								<!--
								STARE VYHLADAVANIE
							
								<form class="form-search" action="{{route('searchID')}}" method ="post">
									 
									<input style="width:100%"
									class="form-control" type="text" placeholder="Vyhľadaj..." name = "id" type="text">
									
									<br>
									 <div class="form-group">
                           			 <div class="col-md-8 col-md-offset-5">

									<button style="height:40px; width:250px" class="btn btn-primary" type="submit">Hľadať v katalógu</button>

									  </div>
                       				  </div>

									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								</form>
								-->

								</div>
								</div>

				<div class="container">
						
							
					 <form class="form-horizontal" method="POST" action="{{route('searchID')}}">
                       

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="id">
                            
                            </div>
                        </div>

             


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                                <button style="height:40px; width:250px" type="submit" class="btn btn-primary">
                                    Hľadať v katalógu 
                                </button>
                          </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>

                    	<br>
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

</body>

</html>
