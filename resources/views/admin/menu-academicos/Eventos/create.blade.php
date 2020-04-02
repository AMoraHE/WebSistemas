@extends('layouts.administrador')

@section('title', 'Eventos')

@section('content')

	<div class="seccion-principal">

	
	<div class="contenedor-titulo-seccion">

		<h3>Eventos</h3>

	</div>

	<div class="contenedor-botones">

		<a href="{{route('EventosAcademicos')}}"><button class="btn"><span>Cancelar</span></button></a> <!-- Editar Todo -->
		<a href="{{route('EventosAcademicos')}}"><button class="btn"><span>Guardar</span></button></a> <!-- Agregar Nuevo -->
		
	</div>
	
@endsection