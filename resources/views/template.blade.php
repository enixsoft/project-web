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


    h1 {font-size: 30px;color:white;}

    h5 {text-align: center;}

    table,th {border: 1px solid black; padding: 3px; background-color: #f7f4ea;}


</style>
<body>
<div class="container">
    <img src="{{ asset('img/logoukf.png') }}">
</div>

<h1 style="background-color:#3399FF;">Osobné informácie</h1>
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
<br>
<br>
<br>
<h1 style="background-color:#3399FF;">Kurzy, cvičenia</h1>
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
<br>
<br>
<div align="center">
    <a href="{{ url('') }}/"><input type="submit" value="Naspäť"></a>   </div>
<br>
<br>
<br>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget">
                    <h1>Tvorcovia</h1>
                    <address>
                        <strong>M. Vršanský, M. Vančo, R. Chnapko</strong><br>
                        Študenti UKF v Nitre, <br>Fakulta Prírodných Vied<br><br>
                        © Všetky práva vyhradené
                    </address>
                </div>
            </div>
        </div>
    </div>

</footer>


</body>
</html>