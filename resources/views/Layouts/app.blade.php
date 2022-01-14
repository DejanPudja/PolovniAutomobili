<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{asset('images/icon.png')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
        <script src="{{asset('js/script.js')}}"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <title>Aplikacija</title>
        <style>
            body{
                background-color:rgb(184, 184, 184); 
            }
            .section{
                background-image: url('images/background.png');
                min-height:100vh;
                background-position: cover;
            }
        </style>
    </head>
    <body>
        @include('Navigation.navigation')
        <section>
            @yield('content')
        </section>
    </body>
</html>