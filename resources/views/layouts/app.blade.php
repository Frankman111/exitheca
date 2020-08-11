<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Exitheca</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{ asset('js/src/util.js') }}" defer></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand fas fa-home" style="font-size: 200%" href="{{ url('/') }}" data-toggle="tooltip" data-placement="bottom" title="Startseite">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" style="font-size: 150%" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <i class="fa fas-home"></i>
                        <li class="nav-item">
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home" data-toggle="tooltip" data-placement="bottom" title="Meine Seite"><i class="fas fa-house-user"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('library*') ? 'active' : '' }}" href="/library" data-toggle="tooltip" data-placement="bottom" title="Meine Medien"><i class="fas fa-archive"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('tag*') ? 'active' : '' }}" href="/tag" data-toggle="tooltip" data-placement="bottom" title="Tags hinzufügen"><i class="fas fa-tags"></i></a>
                                </li>
                            @endauth





                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('info') ? 'active' : '' }} " href="/info" data-toggle="tooltip" data-placement="top" title="Information"><i class="fas fa-info" ></i></a>
                            </li>

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @auth
                            <li>
                                <div class="input-group float-right mr-2 mt-2">
                                    <input type="text" class="form-control" placeholder="Search ......" aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                                    </div>
                                </div>

                            </li>
                        @endauth
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" data-toggle="tooltip" data-placement="bottom" title="Einloggen"><i class="fas fa-sign-in-alt"></i></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" data-toggle="tooltip" data-placement="bottom" title="Registrieren"><i class="far fa-registered"></i></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @isset($input_success)
                <div class="container">
                    <div class="alert alert-success">
                        {!! $input_success !!}
                    </div>
                </div>
            @endisset
            @isset($input_hint)
                <div class="container">
                    <div class="alert alert-warning">
                        {!! $input_hint !!}
                    </div>
                </div>
            @endisset

            @if($errors->any())
                <div class="container">
                    <div class="alert alert-danger">
                        Bitte überprüfe Deine Eingaben.
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
