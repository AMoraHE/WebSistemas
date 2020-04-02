@extends('layouts.administrador')

@section('title', 'Proyectos')

@section('content')

<div class="seccion-principal">

	
	<div class="contenedor-titulo-seccion">

		<h3>Proyectos</h3>

	</div>


	<div class="contenedor-botones">

		<a href="{{route('EditarProyectos')}}"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->
		<a href="{{route('AgregarProyectos')}}"><button class="btn"><span>Agregar</span></button></a> <!-- Agregar Nuevo -->


	</div>

</div>

@endsection