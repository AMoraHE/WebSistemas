@extends('layouts.administrador')

@section('title', 'Celula de Desarrollo de Software')

@section('content')

	<div class="seccion-principal">

<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>Celula de Desarrollo de Software</h3>

		</div>

		<div class="contenedor-botones">

			<a href="#"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->
			
		</div>

		@include('admin.menu-inf.formShow')


@endsection