@extends('layouts.administrador')

@section('title', 'Programas')

@section('content')



<div class="seccion-principal">


	<div class="contenedor-titulo-seccion">

		<h3>Programas</h3>

	</div>

	<div class="contenedor-botones">

		<a href="{{route('AgregarProgramas')}}"><button class="btn"><span>Agregar</span></button></a> <!-- Agregar Nuevo -->
		<a href="{{route('ProgramasAcademicos')}}"><button class="btn"><span>Regresar</span></button></a> <!-- Regresar -->

	</div>

</div>

@endsection
