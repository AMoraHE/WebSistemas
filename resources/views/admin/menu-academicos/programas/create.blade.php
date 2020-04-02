@extends('layouts.administrador')

@section('title', 'Programas')

@section('content')

	<div class="seccion-principal">


	<div class="contenedor-titulo-seccion">

		<h3>Programas</h3>

	</div>

	<div class="contenedor-botones">

		<a href="{{route('ProgramasAcademicos')}}"><button class="btn"><span>Cancelar</span></button></a> <!-- Editar Todo -->
		<a href="{{route('ProgramasAcademicos')}}"><button class="btn"><span>Guardar</span></button></a> <!-- Agregar Nuevo -->

	</div>

@endsection
