<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Peso Fraldas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        h1 {
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
        }

        .geral {
            display: flex;
            margin: 20px 20px;
        }

        .erros {
            width: 80%;
            margin: 20px;
            height: 100px;
            background-color: darkorange;
            border-radius: 2%
        }

        #dados {
            background-color: rgb(208, 236, 236);
            width: 30%;

        }

        #table {
            background-color: rgb(235, 253, 253);
            width: 70%;
            margin-left: 1%;
            border-radius: 1%;
        }

        .pagina{          
            align-items: baseline;
            display: inline;
        }
        .radios{
            display: flex;
          
        }
       
    </style>
</head>

<body>



    @if ($errors->any())
        <div class="erros">
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </div>
    @endif



    <div class="app">


        @yield('content')


    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
