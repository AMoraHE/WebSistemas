@extends('layouts.administrador')

@section('title', 'Laboratorio de Microprocesadores')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

	<div class="seccion-principal">

		<a href="/Lab-Micro/create"><button class="btn"><span>Agregar</span></button></a>
		
@foreach ($infras as $infra)

<!----------------------------------------------------------------- Lab micro---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>Laboratorio de Microprocesadores</h3>

		</div>

		<div class="contenedor-botones">

			<a href="/Lab-Micro/{{$infra->slug}}/edit"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->

		</div>

		@include('admin.menu-inf.formShow')
		@endforeach

@endsection