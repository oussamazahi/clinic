<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/css/main.css">
    <!-- Styles -->
    <style>
        *{
            font-family:sans-serif;
            box-sizing:border-box;
        }
        html,body{
            background-image:url('/img/Medical.jpg');
            background-size:cover;
            background-repeat:no-repeat;
            background-attachment:fixed;
        }
        .card {
        background-color: #f8fafc8c !important;
        }
        .content{
            width: 70%;
            margin: 10px auto;
        }
        .bg-white {
            background-color: #e1fffc78!important;
        }
        .delete{
            display: inline;
        }
        p{
            color: #2e4160;  
            font-size: xx-large;

        }
        .alert {

        }
        
        .backg{
            padding:10px;
            background-color: #ffffff8c;
            border-radius: 10px;
        }
            
    </style>
</head>
<body id="page-top">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style='display:none'>
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                   cabin medicale
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('liste_patient') }}">Patient</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('liste_consultation') }}">Consultation</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('liste_rendez_vous') }}">Rendez-vous</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('liste_medicament') }}">Medcament</a>
                    </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                             <li >                            
                                {{ Auth::user()->name }} <span class="caret"></span>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm card" >
            <div class="container ">
                <a class="navbar-brand" href="/home">Cabinet Medical</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('liste_patient') }}">Patient</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('liste_consultation') }}">Consultation</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('liste_rendez_vous') }}">Rendez-vous</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('liste_medicament') }}">Medicament</a>
                    </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                             
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" >
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="sticky-footer bg-white p-2">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Cabinet Medicale 2021</span>
                    </div>
                </div>
            </footer>
    </div>
    <script src="/style/javascript.js"></script>
    <script src="/style/jquery.js"></script>
</body>
</html>
