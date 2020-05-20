<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/semantic.min.js') }}" defer></script>
    <script scr="{{ asset('js/index.js') }}" ></script>
    <script src="{{ asset('js/all.js') }}" defer></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
      body {
            background-color: #f5f5ea;
        }
        segment{
            background-color:#DADADA;
        }

      body > .grid {
        height: 100%;
      }
      .image {
        margin-top: -100px;
      }
      .column {
        max-width: 450px;
      }

    </style>
</head>

<body>
        <div class="ui attached stackable  menu">
           <div class="ui container">
            @guest
            <a class="item {{ setActive('login') }}" href="{{ route('login') }}">
                Inicio de Sesion
            </a>
            <a class="item {{ setActive('register') }}" href="{{ route('register') }}">
                Registro
            </a>
            @endguest
            @auth
                <a class="item {{ setActive('home') }}" href="{{ route('home') }}">Inicio</a>
                <a class="item {{ setActive('cita.index') }}" href="{{ route('cita.index') }}">Cita</a>
                <a class="item {{ setActive('medicine.index') }}" href="{{ route('medicine.index') }}">Medicina</a>
                <a class="item {{ setActive('patient.index') }}" href="{{ route('patient.index') }}">Paciente</a>
                <div class="right menu">
                    <a class="ui item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Salir') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @endauth
           </div>

        </div>
        <main class="py-4 ui container">
                @yield('content')
            
        </main>
    </div>
</body>

</html>
