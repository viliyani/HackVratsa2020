<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light scrolled awake" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}">
            <img src="{{asset('images/logo.png')}}" alt="" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{route('welcome')}}" class="nav-link">Начало</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Контакти</a></li>
                @guest
                    
                <li class="nav-item"><a href="{{route('login')}}" class="nav-link"><i class="fas fa-sign-in-alt"></i> Вход</a></li>
                <li class="nav-item"><a href="{{route('register')}}" class="nav-link"><i class="fas fa-user-plus"></i> Регистрация</a></li>
                @else
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link"><i class="fas fa-user"></i> Профил</a></li>
            <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link"><i class="fas fa-sign-out-alt"></i> Изход</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>