@extends('layouts.administrador')

@section('title', 'Eventos')

@section('content')



<div class="seccion-principal">

	
	<div class="contenedor-titulo-seccion">

		<h3>Eventos</h3>

	</div>

	<div class="contenedor-botones">

		<a href="{{route('AgregarEventos')}}"><button class="btn"><span>Agregar</span></button></a> <!-- Agregar Nuevo -->
		<a href="{{route('EventosAcademicos')}}"><button class="btn"><span>Regresar</span></button></a> <!-- Regresar -->

	</div>

</div>

@endsection