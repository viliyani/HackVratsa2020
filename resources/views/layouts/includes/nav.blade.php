<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light scrolled awake" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}">Карантинно Герои</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Меню
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{route('welcome')}}" class="nav-link">Начало</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Контакти</a></li>
                @guest
                    
                <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Вход</a></li>
                <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Регистрация</a></li>
                @else
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Профил</a></li>
            <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Изход</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>