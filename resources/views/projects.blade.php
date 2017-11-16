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
    

    
    
    table,th {
    	border: 1px solid black; 
    	padding: 3px; 
    	background-color: #efefef;
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
								
							</li>
							
						</ul>						
				
					    </div>
					
				        @endauth

				</div>
			
			</div>

		</header>
		@auth
		<section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="big-cta">
							<div class="cta-text">
								<h2>Projekty</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


<section id="content">



<div class="container">
<div class="row">
<div align="center">
									
        <table style="width:50%">
            <tr>
                <th><h4>Názov</h4></th>
                <th><input type="text" size="40" name="title" value="{{ $projects->title }}"</th>
            </tr>
            <tr>
                <th><h4>Rok začatia</h4></th>
                <th><input type="text" size="40" name="year_from" value="{{ $projects->year_from }}">
                </th>
            </tr>
            <tr>
                <th><h4>Rok ukončenia</h4></th>
                <th><input type="text" size="40" name="year_end" value="{{ $projects->year_end }}"></th>
            </tr>
            <tr>
                <th><h4>Registračné číslo</h4></th>
                <th><input type="text" size="40" name="reg_number" value="{{ $projects->reg_number }}"></th>
            </tr>
        </table>
<br> 
<br>
<br>

</div>
</div>
</div>
@endauth
<div class="form-group">
   <div class="col-md-8 col-md-offset-5">
                            <a href="{{ url('/') }}"><button style="height:40px; width:250px" class="btn btn-primary">
                                    Naspäť 
                                </button>
                            </a>
   </div>					
</div>
<br>
<br>
<br>
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


</body>
</html>