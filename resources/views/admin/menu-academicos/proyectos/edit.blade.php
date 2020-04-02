@extends('layouts.administrador')

@section('title', 'Proyectos')

@section('content')



<div class="seccion-principal">

	
	<div class="contenedor-titulo-seccion">

		<h3>Proyectos</h3>

	</div>


	<div class="contenedor-botones">


	<a href="{{route('AgregarProyectos')}}"><button class="btn"><span>Agregar</span></button></a> <!-- Agregar Nuevo -->
	<a href="{{route('ProyectosAcademicos')}}"><button class="btn"><span>Regresar</span></button></a> <!-- Regresar -->

	</div>

</div>

@endsection