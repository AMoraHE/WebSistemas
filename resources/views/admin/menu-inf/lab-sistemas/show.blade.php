@extends('layouts.administrador')

@section('title', 'Laboratorio de Sistemas')

@section('content')

<div class="seccion-principal">

<!--------------------------------------------------------------- Lab Sistemas---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>Laboratorio de Sistemas</h3>

		</div>

		<div class="contenedor-botones">

			<a href="#"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->

		</div>

		@include('admin.menu-inf.formShow')

@endsection