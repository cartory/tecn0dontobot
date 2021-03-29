<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Palui &#129302') }}</title> --}}
    <title>Dashboard Palui &#129302</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('icons/teeth.png') }}" type="image/x-icon">

    {{-- Bootstrap --}}
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    {{-- Fullcalendar --}}
    {{-- Styles --}}
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.5.1/main.min.css,npm/fullcalendar@5.5.1/main.min.css">
    {{-- JS --}}
    <script
        src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.5.1,npm/fullcalendar@5.5.1/locales-all.min.js,npm/fullcalendar@5.5.1/locales-all.min.js,npm/fullcalendar@5.5.1/main.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4.5.1/dist/algoliasearch-lite.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js@alpha"></script>

    <style>
        svg {
            display: none;
        }

        #app {
            padding-top: 5%;
        }

    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @if (Auth::check())
        <link rel="stylesheet" type="text/css" href="{{ asset('css/temas/' . Auth::user()->theme . '.css') }}"
            id="theme" />
    @else
        <link rel="stylesheet" type="text/css" href="{{ asset('css/temas/claro.css') }}" id="theme" />
    @endif
</head>

<body style="overflow: scroll">
    <div id="app" class="container">
        <form method="GET" >


            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                        <input type="text" name="search" class="form-control" placeholder="Ingrese el termino a buscar" value="{{ old('search') }}">

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <button class="btn btn-success">Buscar</button>

                    </div>

                </div>

            </div>

        </form>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
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
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        @endif
       <div class="row ">
        <div class="col-3 card bg-light">  @include('sidebar.sidebar')</div>

        <main class=" col-9" >

            @yield('content')
        </main>
       </div>
       <footer  >
           @php
                use Harimayco\Menu\Models\MenuItems;
               $routeNow =request()->path();
               $visitasActuales=MenuItems::where('link','/'.$routeNow)->pluck('visitas')->first();
               if($visitasActuales!=[]){
                   $visitaNueva=$visitasActuales+1;
                   $vista=MenuItems::where('link','/'.$routeNow)->first();
                  
                   $vista->visitas=$visitaNueva;
                   
                   $vista->save();
               }
           @endphp
           @if ($visitasActuales!=[])
           <span class="badge badge-secondary">Numero de Visitas : {{$visitasActuales}}</span>  
           @endif
       
    </footer>  
    </div>
    
</body>
@stack('scripts')
<style>
    #footer {
   position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;
   background:#999;
}
</style>

</html>
