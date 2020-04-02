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

		<a href="{{route('EditarProyectos')}}"><button>Editar</button></a> <!-- Editar Todo -->
		<a href="{{route('AgregarProyectos')}}"><button>Agregar</button></a> <!-- Agregar Nuevo -->


	</div>

@endsection