@extends('layouts.administrador')

@section('title', 'Laboratorio de Sistemas')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

	<div class="seccion-principal">

		<a href="/Lab-Sistemas/create"><button class="btn"><span>Agregar</span></button></a>
		
@foreach ($infras as $infra)

<!--------------------------------------------------------------- Lab Sistemas---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>Laboratorio de Sistemas</h3>

		</div>

		<div class="contenedor-botones">

			<a href="/Lab-Sistemas/{{$infra->slug}}/edit"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->

		</div>

		@include('admin.menu-inf.formShow')
		@endforeach

@endsection