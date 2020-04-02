@extends('layouts.administrador')

@section('title', 'Eventos')

@section('content')

<div class="seccion-principal">

	
	<div class="contenedor-titulo-seccion">

		<h3>Eventos</h3>

	</div>


	<div class="contenedor-botones">

		<a href="{{route('EditarEventos')}}"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->
		<a href="{{route('AgregarEventos')}}"><button class="btn"><span>Agregar</span></button></a> <!-- Agregar Nuevo -->

	</div>

</div>

@endsection