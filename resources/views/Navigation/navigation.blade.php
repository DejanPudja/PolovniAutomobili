<header>
    <nav>
        <div class="topnav" id="nav">                   
            <img src="{{asset('images/icon.png')}}" style="width: 55px;padding:10px" alt='logo'>              
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
            <a href="/Onama">O nama</a>
            <a href="/NoviOglas">Novi oglas</a>
            <a href="/Kategorije">Kategorije</a>
            <a href="/Automobili">Početna</a>
            <a class="icon" onclick="myFunction()"><i class="fa fa-bars icon-image" style="color: rgb(0, 0, 0)"></i></a>    
    </nav>       
</header>