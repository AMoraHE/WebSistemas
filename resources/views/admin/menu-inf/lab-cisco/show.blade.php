@extends('layouts.administrador')

@section('title', 'Laboratorio de Cisco')

@section('content')

<div class="seccion-principal">

<!----------------------------------------------------------------- Lab Cisco---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>Laboratorio de Cisco</h3>

		</div>

		<div class="contenedor-botones">

			<a href="#"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->

		</div>

		@include('admin.menu-inf.formShow')


@endsection