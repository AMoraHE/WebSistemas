@extends('layouts.app')

@section('content')
<div id="seccion-login">
                <div class="titulo-seccion-loggin">REDIRIGIR</div>

                <div class="cuerpo-seccion-loggin">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Inicio de sesión correcto !

                
                    <div class="contenedor-boton-CE">

                        <a href="/admin"><button class="btn"><span>Acceder al Panel</span></button></a>

                    </div>  

                </div>
</div>
@endsection
