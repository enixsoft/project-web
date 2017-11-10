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

						
						<a href="{{ url('/') }}"><img src="{{ asset('img/logoukf.png') }}"></a>
				

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
		

	  <form id="form1" runat="server">
        <div style="width: 1100px; border: 1px solid black; padding: 2px">
            <table id="datatable">
                <thead>
                    <tr>
                                          
                      <th>Meno</th>
                      <th>Katedra</th>
                      <th>Fakulta</th>
                      <th>Popis</th>
                    </tr>
                </thead>
                <tbody>

                   @foreach ($user as $z)
                      <tr>                
                          
                            <td>{{ $z->name }}</td>
                            <td>{{ $z->department }}</td>
                            <td>{{ $z->faculty }}</td>
                            <td>{{ $z->description }}</td>                      

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
		
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

<br>
<br>
<br>
	<div class="form-group">
   <div class="col-md-8 col-md-offset-5">
                            <a href="{{ url('/') }}"><button style="height:40px; width:250px" class="btn btn-primary">
                                    Naspäť 
                                </button>
                            </a>
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
