@extends('layouts.administrador')

@section('title', 'Convocatorias')

@section('content')

	<div class="seccion-principal">


	<div class="contenedor-titulo-seccion">

		<h3>Convocatorias</h3>

	</div>

	<div class="contenedor-botones">

		<a href="{{route('ConvocatoriasAcademicos')}}"><button class="btn"><span>Cancelar</span></button></a> <!-- Editar Todo -->
		<a href="{{route('ConvocatoriasAcademicos')}}"><button class="btn"><span>Guardar</span></button></a> <!-- Agregar Nuevo -->

	</div>

@endsection
