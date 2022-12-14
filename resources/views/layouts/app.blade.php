<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{asset('css/pgc.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/imask"></script>
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm {{(!is_null(Auth::user()) and Auth::user()->nivel==0)?'navbar-dark bg-dark':'navbar-light bg-white'}}">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    @auth

                    @if (Auth::user()->nivel==0)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('curso.index') }}"> Cursos </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('costo.index') }}"> Costos </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('instructor.index') }}"> Instructores </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('grupo.index') }}"> Grupos </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('usuario.index') }}"> Usuarios </a>
                    </li>
                    @endif
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dependiente.index') }}"> Dependientes </a>
                    </li>  
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inscripcion.index') }}"> Inscripciones </a>
                    </li>  

                    @endauth

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
            @yield('content')
        </main>
    </div>
</body>
</html>
