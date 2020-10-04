<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @include('layouts.includes.css')
    @yield('css')

</head>

<body>
    <div id="app">
        <!-- Nav -->
        @include('layouts.includes.nav')

        <main class="p-4">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <!-- Menu -->
                        @include('layouts.includes.manage.menu')
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <div class="card-header">@yield('card-header')</div>
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- Scripts -->
    @include('layouts.includes.js')
    @yield('js')
</body>

</html>