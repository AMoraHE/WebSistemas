@extends('layouts.administrador')

@section('title', 'Laboratorio de Cisco')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

<div class="seccion-principal">

	<div class="contenedor-botones">

		<a onclick="return confirm('¿Desea registrar nueva información?')" href="/Lab-Cisco/create"><button class="btn"><span>Agregar</span></button></a>

	</div>
		
@foreach ($infras as $infra)

<!----------------------------------------------------------------- Lab Cisco---------------------------------------------------------->

	<div class="contenedor-titulo-seccion">
	
		<h3>Laboratorio de Cisco</h3>

	</div>

	@include('admin.menu-inf.formShow')

	<div class="contenedor-botones">

		<a onclick="return confirm('¿Desea modificar la información del laboratorio?')" href="/Lab-Cisco/{{$infra->slug}}/edit"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->

	</div>
	
	@endforeach
	
@endsection