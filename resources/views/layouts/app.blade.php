<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Iniciar sesión', 'Iniciar Sesión') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/inicio-sesion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elementos.css') }}" rel="stylesheet">

    <!--------------------------------ICONOS---------------------------------------->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/iconos.css')}}">
    <script src="{{ asset('js/iconos.js')}}"></script>

</head>
<body>
    <div id="app">
            <div class="seccion-principal">

                    <div class="contenedor-botones">

                        <!-- Right Side Of Navbar -->


                            <!-- Authentication Links -->
                            @guest
                                    <a href="{{ route('login') }}"><button class="btn finalizar"><span>{{ __('Iniciar Sesión') }}</span></button></a>
                                    <a href="{{ route('register') }}"><button class="btn agregar"><span>{{ __('Registrarse') }}</span></button></a>
                            @else

                            <div id="usuario">

                                <div class="img-usuario">
                                    
                                    <img src="/images/perfil/{{Auth::user()->perfil_img}}">

                                </div>
                                    <p>{{ Auth::user()->name }}</p>

                            </div>

                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <button class="btn cancelar"><span>{{ __('Cerrar Sesión') }}</span></button>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                            @endguest

                    </div>

            </div>


    </div>

    <main class="contenedor-loggin">
        @yield('content')
    </main>


    <script src="{{ asset('js/select.js')}}"></script>


</body>
</html>
