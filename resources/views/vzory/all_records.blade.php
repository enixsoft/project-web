

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        table, th, td {

            border: 1px solid black;
            padding: 5px;
        }



        table {
            border-spacing: 15px;
        }


        .button {

            background-color: #B0C4DE;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2), 0px 6px 20px 0px rgba(0,0,0,0.19);
        }

        .div {

            text-decoration: none;
        }


        a
        {
            text-decoration: none;
        }



    </style>




</head>
<body>
<h1> CAU TEST TEST TEST</h1>
<table style="width:100%">
    <tr>
        <th>Meno</th>
        <th>Priezvisko</th>
        <th>pristupove_prava</th>
        <th>vek</th>


    </tr>

    @foreach($users as $user)

        <td>
            {{ $user->meno }}
        </td>
        <td>{{ $user->priezvisko}}</td>
        <td>
            {{ $user->pristupove_prava }}
        </td>
        <td>
            {{ $user->vek }}
        </td>


        </tr>

    @endforeach
</table>






    <br>
    <br>


    <br>
    <br>



</body>


</html>

