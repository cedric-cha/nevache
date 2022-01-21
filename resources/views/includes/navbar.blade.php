 <!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <!-- <a class="navbar-brand" href="#page-top"><h1>LOGO</h1></a> -->
        <!-- <a class="navbar-brand" href="#page-top"><img src="{{url('assets/img/navbar-logo.svg')}}" alt="..." /></a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                        </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a href="#" class="nav-link">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="{{ url('/admin') }}">{{ __('Dashboard') }}</a>
                    </li>
                @endguest
            </ul> -->
        </div>
    </div>
</nav>