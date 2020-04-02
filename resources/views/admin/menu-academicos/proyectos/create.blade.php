@extends('layouts.administrador')

@section('title', 'Proyectos')

@section('content')

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Proyectos</h3>

	</div>

	<!----------------------------------------------- INFORMACIÓN------------------------------------------------>

	<div class="contenedor-botones">

		<a href="{{route('ProyectosAcademicos')}}"><button class="btn"><span>Cancelar</span></button></a> <!-- Editar Todo -->
		<a href="{{route('ProyectosAcademicos')}}"><button class="btn"><span>Guardar</span></button></a> <!-- Agregar Nuevo -->

	</div>

</div>
	
@endsection