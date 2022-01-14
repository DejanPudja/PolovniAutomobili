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
        <header>
            <nav>
                <div class="topnav" id="nav">                                    
                    <img src="{{asset('images/icon.png')}}" style="width: 40px;" alt='logo'>              
                    @guest
                        @if (Route::has('login'))                               
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Prijavi se') }}</a>                    
                        @endif
                        @if (Route::has('register'))                           
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registruj se') }}</a>                      
                        @endif
                        @else

                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>                                                                          
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                            </form>
                        </div>                              
                    @endguest
                    <a class="icon" onclick="myFunction()"><i class="fa fa-bars icon-image"></i></a>                                       
            </nav>
        </header>
        <div class="section">
            <div  class=" bg-cover text-white" >
                <div class=" py-5 text-center">
                    <h1 class="display-4 pt-12" style="color: black; font-size:50px; padding-top:200px">Dobrodošli na stranicu polovnih automobila</h1>
                    <p class="font-italic mb-0" style="color: black; font-size:25px;">Uspešno ste se prijavili.</p><br>

                    <a href="/Automobili" style="border: 1px solid silver;background-color:silver;color:#ffff;font-size:18px; padding:13px;">Nastavi dalje</a>
                </div>
            </div>
            
        </div>
       
    </body>
</html>