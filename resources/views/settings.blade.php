<!DOCTYPE html>

			
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>UKF - Nastavenia</title>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){	
	$('#my-file-selector').on('change',function(){
    $('#upload-file-info').val($(this).val().split('\\').pop())
});
});

</script>

</head>
<style>
    

  		.form-control {		
		border: none;		
		background: #fff;
		color: #666;
		-moz-border-radius: 4px;
		-webkit-border-radius: 4px;
		border: 2px solid #ddd;				
		border-radius: 4px;
		

	}

    
</style>
<body>
	<div id="wrapper">
		
			<!-- start header -->
	
	   @extends('layout')
	   @section('content')


		@auth
		<section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="big-cta">
							<div class="cta-text">
								<h2><span>Nastavenia</span></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	


<section id="content">



<div class="container">
<div class="row">

			
        <table class="table">
            <tr>
                <th><h4>Profilový obrázok</h4></th>
                	 <?php
								  $imageDataType=Auth::user()->profile_picture_type;
								  $imageData=Auth::user()->profile_picture;
								  $imageLink = 'data: '.$imageDataType.';base64,'.$imageData;
					  ?>

                <td><img src="{{ $imageLink }}">

                	
                </td>
            </tr>

             <tr>
                <th><h4>Zmena profilového obrázka</h4></th>
                <td>

                
                	
                	<form method="POST" enctype="multipart/form-data" action="{{route('uploadProfilePicture')}}"> 
                	
  						
                	<input readonly class="form-control" name="id" value="{{ Auth::user()->id }}" style="display: none;">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
  					 
  					

  					 <label style="width: 175px;" class="btn btn-default btn-file" class="form-control">
    				Vyberte súbor obrázka <input id="my-file-selector" type="file" accept=".jpg, .jpeg, .png" name="profile_img" style="display: none;">


					</label>

				  

	
				
		
    				  <button type="submit" class="btn btn-primary" >
                                 <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Odoslať 
                      </button>

                       <input type="text" id="upload-file-info" readonly class="form-control"  style="width: 175px;" >
                   


					</form>
		
				
			

                


                </td>
            </tr>
            

            <tr>
                <th><h4>Zmena hesla</h4></th>
                <td>
  					 
  					<form method="POST" enctype="multipart/form-data" action="{{route('changePassword')}}"> 
  					<input type="hidden" name="_token" value="{{ csrf_token() }}">
  					<input readonly class="form-control" name="id" value="{{ Auth::user()->id }}" style="display: none;">
  					
  					<label for="password">Zadajte nové heslo:</label>                           
                    <input id="password" type="password" class="form-control" name="password" required style="width: 175px;">		  

	
					<br>
		
    				  <button type="submit" class="btn btn-primary" style="width: 175px;">
                                 <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Odoslať 
                      </button>
                      
                       </form>
                   </td>
            </tr>
 


        </table>

    	
      





@endauth

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

@stop




