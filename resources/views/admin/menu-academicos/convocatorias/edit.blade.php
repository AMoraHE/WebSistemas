@extends('layouts.administrador')

@section('title', 'Convocatorias')

@section('content')



<div class="seccion-principal">


	<div class="contenedor-titulo-seccion">

		<h3>Convocatorias</h3>

	</div>

	<div class="contenedor-botones">

		<a href="{{route('AgregarConvocatorias')}}"><button class="btn"><span>Agregar</span></button></a> <!-- Agregar Nuevo -->
		<a href="{{route('ConvocatoriasAcademicos')}}"><button class="btn"><span>Regresar</span></button></a> <!-- Regresar -->

	</div>

</div>

@endsection
