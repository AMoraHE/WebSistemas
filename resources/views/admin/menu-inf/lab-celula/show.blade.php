@extends('layouts.administrador')

@section('title', 'Celula de Desarrollo de Software')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

	<div class="seccion-principal">

		<div class="contenedor-botones">

			<a onclick="return confirm('¿Desea registrar nueva información?')" href="/Lab-Celula/create"><button class="btn"><span>Agregar</span></button></a>

		</div>
		
@foreach ($infras as $infra)
	

<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>Celula de Desarrollo de Software</h3>

		</div>


		@include('admin.menu-inf.formShow')

		<div class="contenedor-botones">

			<a onclick="return confirm('¿Desea modificar la información del laboratorio?')" href="/Lab-Celula/{{$infra->slug}}/edit"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->
			
		</div>

		@endforeach

@endsection