@extends('layouts.administrador')

@section('title', 'Laboratorio de Sistemas')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

	<div class="seccion-principal">

		<div class="contenedor-botones">

			<a href="/Lab-Sistemas/create"><button class="btn"><span>Agregar</span></button></a>

		</div>
		
@foreach ($infras as $infra)

<!--------------------------------------------------------------- Lab Sistemas---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>Laboratorio de Sistemas</h3>

		</div>

		@include('admin.menu-inf.formShow')

		<div class="contenedor-botones">

			<a href="/Lab-Sistemas/{{$infra->slug}}/edit"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->

		</div>

		@endforeach

@endsection