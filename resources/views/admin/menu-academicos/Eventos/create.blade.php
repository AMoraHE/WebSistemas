@extends('layouts.administrador')

@section('title', 'Eventos')

@section('content')

	<div class="seccion-principal">

	
	<h1>Eventos</h1>


		<br>
		<br>

	<div>

	
		<table>
			
		</table>

		<a href="{{route('EventosAcademicos')}}"><button>Cancelar</button></a> <!-- Editar Todo -->
		<a href="{{route('EventosAcademicos')}}"><button>Guardar</button></a> <!-- Agregar Nuevo -->

		
	</div>
	
@endsection