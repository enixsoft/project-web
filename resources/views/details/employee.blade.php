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
					
				        @endauth

				</div>
			
			</div>

		</header>

		
		<section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="big-cta">
							<div class="cta-text">
								@foreach ($zaznam as $z)
								<h2><span>Zamestnanec</span> {{ $z->$premenna2 }}</h2>
								  @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	


<section id="content">



<div class="container">
<div class="row">

@auth
@if(Auth::user()->zamestnanec_id == $premenna0 || Auth::user()->role == "admin" )
	 	
      <form class="form-horizontal" method="POST" action="{{ $controller }}"> 				
        <table class="table">
        	  @foreach ($zaznam as $z)
            <tr>
                <th><h4>{{$stlpec1}}</h4></th>
                <td><input readonly class="form-control" name="id" value="{{ object_get($z, $premenna1) }}"></input></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec2}}</h4></th>
                <td><textarea class="form-control" name="textarea1" rows="5">{{ object_get($z, $premenna2) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec3}}</h4></th>
                <td><textarea class="form-control" name="textarea2"  rows="5">{{ object_get($z, $premenna3) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec4}}</h4></th>
                <td><textarea class="form-control" name="textarea3"  rows="5">{{ object_get($z, $premenna4) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec5}}</h4></th>
                <td><textarea class="form-control" name="textarea4"  rows="5">{{ object_get($z, $premenna5) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec6}}</h4></th>
                <td><textarea class="form-control" name="textarea5"  rows="5">{{ object_get($z, $premenna6) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec7}}</h4></th>
                <td><textarea class="form-control" name="textarea6"  rows="5">{{ object_get($z, $premenna7) }}</textarea></td>
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
@else

 <table class="table">
        	  @foreach ($zaznam as $z)
            <tr>
                <th><h4>{{$stlpec1}}</h4></th>
                <td><input readonly class="form-control" value="{{ object_get($z, $premenna1) }}"></input></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec2}}</h4></th>
                <td><textarea class="form-control" name="textarea1" rows="5">{{ object_get($z, $premenna2) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec3}}</h4></th>
                <td><textarea class="form-control" name="textarea2"  rows="5">{{ object_get($z, $premenna3) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec4}}</h4></th>
                <td><textarea class="form-control" name="textarea3"  rows="5">{{ object_get($z, $premenna4) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec5}}</h4></th>
                <td><textarea class="form-control" name="textarea4"  rows="5">{{ object_get($z, $premenna5) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec6}}</h4></th>
                <td><textarea class="form-control" name="textarea5"  rows="5">{{ object_get($z, $premenna6) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec7}}</h4></th>
                <td><textarea class="form-control" name="textarea6"  rows="5">{{ object_get($z, $premenna7) }}</textarea></td>
            </tr>
            @endforeach
        </table>
@endif                   
@endauth
@guest

 <table class="table">
        	  @foreach ($zaznam as $z)
            <tr>
                <th><h4>{{$stlpec1}}</h4></th>
                 <td><input readonly class="form-control" value="{{ object_get($z, $premenna1) }}"></input></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec2}}</h4></th>
                <td><textarea class="form-control" name="textarea1" rows="5">{{ object_get($z, $premenna2) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec3}}</h4></th>
                <td><textarea class="form-control" name="textarea2"  rows="5">{{ object_get($z, $premenna3) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec4}}</h4></th>
                <td><textarea class="form-control" name="textarea3"  rows="5">{{ object_get($z, $premenna4) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec5}}</h4></th>
                <td><textarea class="form-control" name="textarea4"  rows="5">{{ object_get($z, $premenna5) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec6}}</h4></th>
                <td><textarea class="form-control" name="textarea5"  rows="5">{{ object_get($z, $premenna6) }}</textarea></td>
            </tr>
            <tr>
                <th><h4>{{$stlpec7}}</h4></th>
                <td><textarea class="form-control" name="textarea6"  rows="5">{{ object_get($z, $premenna7) }}</textarea></td>
            </tr>
            @endforeach
        </table>

@endguest


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


</body>
</html>