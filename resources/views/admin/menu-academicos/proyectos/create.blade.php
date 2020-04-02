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

		<a href="{{route('ProyectosAcademicos')}}"><button>Cancelar</button></a> <!-- Editar Todo -->
		<a href="{{route('ProyectosAcademicos')}}"><button>Guardar</button></a> <!-- Agregar Nuevo -->

		
	</div>
	
@endsection