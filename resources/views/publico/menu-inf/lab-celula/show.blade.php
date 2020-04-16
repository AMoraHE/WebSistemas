@extends('layouts.publico')

@section('title', 'Celula de Desarrollo de Software')

@section('content')

	<div class="seccion-principal">
		
@foreach ($infras as $infra)
	

<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>{{$infra->nombre}}</h3>

		</div>


		@include('publico.menu-inf.formShow')

<!----------------------------------------------------------------- Agregar IMG a la Mini Galeria Lab Celula---------------------------------------------------------->


		@endforeach

@endsection