@extends('layouts.administrador')

@section('title', 'Convocatorias')

@section('content')

<div class="seccion-principal">


	<div class="contenedor-titulo-seccion">

		<h3>Convocatorias</h3>

	</div>


	<div class="contenedor-botones">

		<a href="{{route('EditarConvocatorias')}}"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->
		<a href="{{route('AgregarConvocatorias')}}"><button class="btn"><span>Agregar</span></button></a> <!-- Agregar Nuevo -->

	</div>

</div>

@endsection
