@extends('layouts.administrador')

@section('title', 'Proyectos')

@section('content')



<div class="seccion-principal">

	
	<h1>Proyectos</h1>


		<br>
		<br>

	<div>

	
		<table>
			
		</table>


	<a href="{{route('AgregarProyectos')}}"><button>Agregar</button></a> <!-- Agregar Nuevo -->
	<a href="{{route('ProyectosAcademicos')}}"><button>Regresar</button></a> <!-- Regresar -->

	</div>

@endsection