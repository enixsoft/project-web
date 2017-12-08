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

    p {
            white-space: pre-wrap;
    }

    .thumbnail {
    padding:0px;
}
.panel {
    position:relative;
}
.panel>.panel-heading:after,.panel>.panel-heading:before{
    position:absolute;
    top:11px;left:-16px;
    right:100%;
    width:0;
    height:0;
    display:block;
    content:" ";
    border-color:transparent;
    border-style:solid solid outset;
    pointer-events:none;
}
.panel>.panel-heading:after{
    border-width:7px;
    border-right-color:#f7f7f7;
    margin-top:1px;
    margin-left:2px;
}
.panel>.panel-heading:before{
    border-right-color:#ddd;
    border-width:8px;
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
								@foreach ($zaznam as $z)
								<h2><span>Zamestnanec</span> {{ $z->$premenna2 }}</h2>
								  @endforeach
							</div>
						</div>
					</div>


				</div>
                <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">                           
                            <li><a href="{{ url('/')}}/employees/{{ $premenna0 }}/publications"><b>Zamestnancove publikácie</b></a></li>                                                              
                            <li><a href="{{ url('/')}}/employees/{{ $premenna0 }}/projects"><b>Zamestnancove projekty</b></a></li>                                                                        
                            <li><a href="{{ url('/')}}/employees/{{ $premenna0 }}/activities"><b>Zamestnancove aktivity</b></a></li>  
                        </ul>

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
            @foreach ($profile as $z)
              <tr>
                <th><h4>{{$stlpec8}}</h4></th>
                <td><textarea class="form-control" name="textarea7"  rows="5">{{ object_get($z, $premenna8) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec9}}</h4></th>
                <td><textarea class="form-control" name="textarea8"  rows="5">{{ object_get($z, $premenna9) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec10}}</h4></th>
                <td><textarea class="form-control" name="textarea9"  rows="5">{{ object_get($z, $premenna10) }}</textarea></td>
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
            @foreach ($profile as $z)
              <tr>
                <th><h4>{{$stlpec8}}</h4></th>
                <td><textarea class="form-control" name="textarea7"  rows="5">{{ object_get($z, $premenna8) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec9}}</h4></th>
                <td><textarea class="form-control" name="textarea8"  rows="5">{{ object_get($z, $premenna9) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec10}}</h4></th>
                <td><textarea class="form-control" name="textarea9"  rows="5">{{ object_get($z, $premenna10) }}</textarea></td>
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
            @foreach ($profile as $z)
              <tr>
                <th><h4>{{$stlpec8}}</h4></th>
                <td><textarea class="form-control" name="textarea7"  rows="5">{{ object_get($z, $premenna8) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec9}}</h4></th>
                <td><textarea class="form-control" name="textarea8"  rows="5">{{ object_get($z, $premenna9) }}</textarea></td>
            </tr>
              <tr>
                <th><h4>{{$stlpec10}}</h4></th>
                <td><textarea class="form-control" name="textarea9"  rows="5">{{ object_get($z, $premenna10) }}</textarea></td>
            </tr>



            @endforeach
        </table>



@endguest


<br>
<br>
<br>


<div class="container">
<div class="row">
<div class="col-sm-12">
<h3>Komentáre</h3>

@if($commentsAllowed==1)

@auth
@if(Auth::user()->role == "admin")

                                     <form class="form-horizontal" method="POST" action="{{ action('CommentController@disable_comments') }}">                                    


                                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                         <input type="hidden" name="commented_on_input" value="{{ $premenna0 }}">
                           
                                  
                                        <br>
                                        <div class="form-group">
                           
                                        <div class="col-md-8 col-md-offset-5">
                                        <button type="submit" style="height:40px; width:250px" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Zakázať komentáre</button>
                                         </div>
                                        </div>
                                        

                                    </form>

@endif




   
                                     <form class="form-horizontal" method="POST" action="{{ action('CommentController@create_comment') }}">
                                        <textarea placeholder="Sem píšte obsah vášho komentára." class="form-control" rows="5" name="comment_textarea"></textarea>                                  
                                          


                                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                         <input type="hidden" name="commented_on_input" value="{{ $premenna0 }}">
                                         <input type="hidden" name="user_who_commented_input" value="{{ Auth::user()->id }}">
                                  
                                        <br>
                                        <div class="form-group">
                           
                                        <div class="col-md-8 col-md-offset-5">
                                        <button type="submit" style="height:40px; width:250px" class="btn btn-success green"><i class="fa fa-share"></i> Odoslať</button>
                                         </div>
                                        </div>
                                        

                                    </form>
                          
 

</div><!-- /col-sm-12 -->
</div><!-- /row -->
</div>
                       
                        
@endauth

@if(count($comments)>0)
@foreach ($comments as $c)
<div class="row">
<div class="col-sm-1">
<div class="thumbnail">
         <?php
                                  $imageDataType=$c->profile_picture_type;
                                  $imageData=$c->profile_picture;
                                  $imageLink = 'data: '.$imageDataType.';base64,'.$imageData;
          ?>
<img class="img-responsive user-photo" src="{{ $imageLink }}">
</div>
</div>


<div class="col-sm-11">
<div class="panel panel-default">
<div class="panel-heading">
<strong>{{ $c->username }}</strong> <span class="text-muted">komentoval {{ date('d.m.Y H:m', strtotime($c->created_at)) }} </span>
</div>
<div class="panel-body">
{{ $c->comment}}

</div>
</div>
</div>

</div>
@endforeach

@else
<h4>Na tejto stránke nie sú zatiaľ žiadne komentáre.</h4>
@endif

@else
<h4>Komentáre na tejto stránke nie sú povolené.</h4>
@auth
@if(Auth::user()->role == "admin")

                                     <form class="form-horizontal" method="POST" action="{{ action('CommentController@allow_comments') }}">                                    


                                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                         <input type="hidden" name="commented_on_input" value="{{ $premenna0 }}">
                           
                                  
                                        <br>
                                        <div class="form-group">
                           
                                        <div class="col-md-8 col-md-offset-5">
                                        <button type="submit" style="height:40px; width:250px" class="btn btn-success green"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Povoliť komentáre</button>
                                         </div>
                                        </div>
                                        

                                    </form>

@endif
@endauth
@endif





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