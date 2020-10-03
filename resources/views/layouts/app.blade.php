<!DOCTYPE html>
<html lang="en">

<head>
    <title>Карантинно Герои</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Styles -->
    @include('layouts.includes.css')
    @yield('css')
</head>

<body>

    <!-- Nav -->
    @include('layouts.includes.nav')
    
    <main>
    @yield('content')    
    </main>
    

    <footer class="footer">
        <div class="container">
            <div class="row pt-3">
                <div class="col-md-12 text-center">
                    <p class="font-weight-bold">
                        Карантинно Герои &copy; 2020
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

    <!-- Scripts -->
    @include('layouts.includes.js')
    @yield('js')

</body>

</html>