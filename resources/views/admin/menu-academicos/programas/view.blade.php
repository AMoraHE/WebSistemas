@extends('layouts.administrador')

@section('title', 'Programas')

@section('content')

<div class="seccion-principal">


	<div class="contenedor-titulo-seccion">

		<h3>Programas</h3>

	</div>


	<div class="contenedor-botones">

		<a href="{{route('EditarProgramas')}}"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->
		<a href="{{route('AgregarProgramas')}}"><button class="btn"><span>Agregar</span></button></a> <!-- Agregar Nuevo -->

	</div>

</div>

@endsection
