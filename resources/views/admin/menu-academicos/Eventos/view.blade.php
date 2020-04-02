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

		<a href="{{route('EditarEventos')}}"><button>Editar</button></a> <!-- Editar Todo -->
		<a href="{{route('AgregarEventos')}}"><button>Agregar</button></a> <!-- Agregar Nuevo -->


	</div>

@endsection