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

 table,th {border: 1px solid black; padding: 3px; background-color: #efefef;}




	

	



</style>
<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="navbar navbar-default navbar-static-top">
					<div class="container">

						
						<img src="{{ asset('img/logoukf.png') }}">
				

							<!--
							<li><input type="name" name ="meno" class="form-control" placeholder="Meno" id="UserName">
							<li><input type="surname" name="priezvisko" class="form-control" placeholder="Heslo" id="Passwod">
							<li> <button type="button" class="log-btn">
							-->
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




				<h2>Osobné informácie</h2>
		

	<div class="container">
    <div align="center">
        <table style="width:50%">
            <tr>
                <th><h4>Meno</h4></th>
                <th><input type="text" size="40" name="username" value="{{ $user->name }}"></th>
            </tr>
            <tr>
                <th><h4>Oddelenie</h4></th>
                <th><input type="text" size="40" name="department" value="{{ $user->department }}">
            </tr>
            <tr>
                <th><h4>Fakulta</h4></th>
                <th><input type="text" size="40" name="faculty" value="{{ $user->faculty }}">
                </th>
            </tr>
            <tr>
                <th><h4>Popis</h4></th>
                <th><input type="text" size="40" name="description" value="{{ $user->description }}"></th>
            </tr>
        </table>
    </div>
    </div>


                    
                   					    


	<h2>Kurzy a cvičenia</h2>

	<div class="container">
    <div align="center">
        <table style="width:50%">
            <tr>
                <th><h5><strong>Kurzy</strong></h5></th>
                <th><h5><strong>Cvičenia</strong></h5></th>
            </tr>
        </table>
    </div>
</div>

@else
<p>
<h2>
Chyba
</h2>
Nenašli sa žiadne výsledky.
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
