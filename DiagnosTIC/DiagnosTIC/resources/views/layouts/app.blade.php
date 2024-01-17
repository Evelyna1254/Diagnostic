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
    <script src="{{ asset('js/persona.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
:root {
    --white: #FFFFFF;
    --black: #000000;
    --text-input-field: #C7C7C7;
    --fondo: #F4F4F4;
    --hospital-green: #66C8BF;
    --green-ligth: #B3ECE7;
    --sm: 14px;
    --md: 16px;
    --lg: 18px;
  }
  
  body {
    margin: 0;
    font-family: 'Quicksand', sans-serif;
    background-color: var(--fondo);
  }
  nav {
    display: flex;
    justify-content: space-between;
    padding: 0 24px;
    border-bottom: 1px solid var(--very-light-pink);
    background-color: var(--green-ligth);
    min-width: 100%;
  }
 
  .logo {
    width: 206px;
  }
  .navbar-left ul,
  .navbar-right ul {
    list-style: none;
    padding: 0;
    margin:  0;
    display: flex;
    align-items: center;
    height: 60px;
  }
  .navbar-left {
    display: flex;
  }
  .navbar-left ul {
    margin-left: 12px;
  }
  .navbar-left ul li a {
    text-decoration: none;
    color: var(--black);
    padding: 8px;
  }
  .navbar-right ul li a {
    text-decoration: none;
    color: var(--black);
    border: 1px solid var(--hospital-green);
    background-color: var(--hospital-green);
    padding: 8px;
    border-radius: 8px;
  }
  .navbar-left ul li a:hover,
  .navbar-right ul li a:hover, .nav-item:hover {
    border: 1px solid var(--black);
    border-radius: 8px;
  }
  .img_bienvenido{
    width: 1000px;
    height: 698px;
    display:block;
    margin:auto; 
  }
  .tittle{
    text-align: center;
  }


  .dropdown-item{
    margin-top: -4px;
    border: 1px solid var(--hospital-green);
    background-color: var(--hospital-green);
    border-radius: 8px;
    margin-left: 2px;
  }

  .dropdown-item:hover{
    background-color: var(--green-ligth);
  }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <nav>
            <div class="navbar-left">
                <img src="{{ URL::asset('img/logosinfondo.png') }}" alt="logo" class="logo">
                @if(auth()->user() != null)
                <ul>
                    <li>
                      <a href="/home">Inicio</a>
                    </li>
                    <li>
                      <a href="/persona/index/1">Profesional</a>
                    </li>
                    <li>
                      <a href="/receta">Recetas y Medicamentos</a>
                    </li>
                    <li>
                        <a href="/persona/index/2">Pacientes</a>
                    </li>
                    <li>
                        <a href="/consulta">Consultas</a>
                    </li>
                    <!-- <li>
                        <a href="/">Diagnosticos</a>
                    </li>  -->
                    <li>
                        <a href="/antecedente">Antecedentes</a>
                    </li> 
                    <li>
                        <a href="/agenda">Agenda</a>
                    </li> 

                  </ul>
                  @endif
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">

            </ul>
            <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Regístrate') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                        {{ Auth::user()->name }}
                        </li>
                        <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                        </a>        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> 
                          </li>
                        @endguest
                    </ul>
              </div>
        </nav>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
