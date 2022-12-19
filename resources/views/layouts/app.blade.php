<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @hasSection('title')
            @yield('title') |
        @endif {{ config('app.name', 'Laravel') }}
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <div id="app">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth()
                        <ul class="navbar-nav mr-auto">
                            <!--Nav Bar Hooks - Do not delete!!-->
                            <li class="nav-item">
                                <a href="{{ url('/jugadores') }}" class="nav-link"><i class="fab fa-laravel text-info"></i>
                                    Jugadores</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/inscripciongrp') }}" class="nav-link"><i
                                        class="fab fa-laravel text-info"></i> Inscripciongrp</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/inscripcionidv') }}" class="nav-link"><i
                                        class="fab fa-laravel text-info"></i> Inscripcionidv</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/equipos') }}" class="nav-link"><i class="fab fa-laravel text-info"></i>
                                    Equipos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/pagos') }}" class="nav-link"><i class="fab fa-laravel text-info"></i>
                                    Pagos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/horarios') }}" class="nav-link"><i class="fab fa-laravel text-info"></i>
                                    Horarios</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/videojuegos') }}" class="nav-link"><i
                                        class="fab fa-laravel text-info"></i> Videojuegos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/categoriajuegos') }}" class="nav-link"><i
                                        class="fab fa-laravel text-info"></i> Categoriajuegos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/aulas') }}" class="nav-link"><i class="fab fa-laravel text-info"></i>
                                    Aulas</a>
                            </li>
                        </ul>
                    @endauth()

                    <!-- Right Side Of Navbar -->

                </div>
            </div>

        <main class="py-2">
            @yield('content')
        </main>
    </div>
    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('closeModal', () => {
            $('#createDataModal').modal('hide');
        });
    </script>
</body>

</html>
