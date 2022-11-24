<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
        
            <title>{{ config('app.name', 'Laravel') }}</title>
        
            <!-- Fonts -->
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

            <!-- Scripts -->
            @vite(['resources/sass/app.scss', 'resources/js/app.js'])
            <link href="{{asset('css/pgc.css')}}" rel="stylesheet">
            <script src="https://unpkg.com/imask"></script>
        </head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="nav justify-content-end">
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link active">Home</a>
                      </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link active">Log in</a>
                          </li>
                       
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link active">Register</a>
                        </li>
                            @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
                <div class="text-center">
                    <h3>PGC</h3>
                </div>

                <div class="nav justify-content-center">
                    <div class="card-group"> 
                        @foreach ($cursos as $item)
                        <div class="card bg-light mb-3" style="max-width: 20rem;">
                            <img class="card-img-top" src="https://source.unsplash.com/random/?{{$item->nombre}}/100px180/" alt="Card image cap">
                            <div class="card-body text-success">
                              <h5 class="card-title">{{$item->nombre}}</h5>
                              <p class="text-secondary">{{$item->objetivo}}</p>
                              </div>
                            <div class="card-footer text-muted">
                                <a href="{{route('curso.show',['curso'=>$item->id])}}" class="btn btn-primary">Inscribir</a>
                              </div>
                        </div>    
                        @endforeach
                        
                        
                    </div>
                </div>

                
            </div>
        </div>
    </body>
</html>
