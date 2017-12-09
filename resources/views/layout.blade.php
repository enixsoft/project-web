@section('layout')
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
									<li><a href="{{ route('new_user') }}"><b>Pridať používateľa</b></a></li>
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
							<li><a href="{{ url('/') }}">Domovská stránka</a></li>						
							
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
							<li><a href="{{ url('/') }}">Domovská stránka</a></li>					
							
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



@yield('content')


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
	<script src="{{ asset('DataTables/DataTables-1.10.16/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('DataTables/DataTables-1.10.16/js/dataTables.bootstrap4.js') }}"></script>  
    <script type="text/javascript">
        $(document).ready(function ()
        {
            $('#datatable').dataTable(
                {
                 "language": {
                 "sEmptyTable":     "Nie sú k dispozícii žiadne dáta",
                 "sInfo":           "Záznamy _START_ až _END_ z celkom _TOTAL_",
                 "sInfoEmpty":      "Záznamy 0 až 0 z celkom 0 ",
                 "sInfoFiltered":   "(vyfiltrované spomedzi _MAX_ záznamov)",
                 "sInfoPostFix":    "",
                 "sInfoThousands":  ",",
                 "sLengthMenu":     "Zobraz _MENU_ záznamov",
                 "sLoadingRecords": "Načítavam...",
                 "sProcessing":     "Spracúvam...",
                 "sSearch":         "Hľadať:",
                 "sZeroRecords":    "Nenašli sa žiadne vyhovujúce záznamy",
                 "oPaginate": {
                 "sFirst":    "Prvá",
                 "sLast":     "Posledná",
                 "sNext":     "Nasledujúca",
                 "sPrevious": "Predchádzajúca"
                 },
                "oAria": {
                    "sSortAscending":  ": aktivujte na zoradenie stĺpca vzostupne",
                    "sSortDescending": ": aktivujte na zoradenie stĺpca zostupne"
                         }
                }
                } 
                );

        });
    </script>


</body>
</html>
@show