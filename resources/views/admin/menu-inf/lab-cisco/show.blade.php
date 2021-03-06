@extends('layouts.administrador')

@section('title', 'Laboratorio de Cisco')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

<div class="seccion-principal">

	@if(count($infras) > 0)

	@else
	<div class="contenedor-botones">

		<a class="msj" mesanje="registrar nueva información?" href="/Lab-Cisco/create"><button class="btn agregar"><span>Agregar</span></button></a>

	</div>
	@endif
		
@foreach ($infras as $infra)

<!----------------------------------------------------------------- Lab Cisco---------------------------------------------------------->
	<div class="contenedor-botones">

		<a class="msj" mesanje="modificar la información del laboratorio?" href="/Lab-Cisco/{{$infra->slug}}/edit"><button class="btn editar"><span>Editar</span></button></a> <!-- Editar Todo -->

	</div>
	
	<div class="contenedor-titulo-seccion">
	
		<h3>{{$infra->nombre}}</h3>

	</div>

	@include('admin.menu-inf.formShow')

	<div class="contenedor-botones">
			
		<a class="msj" mesanje="agregar una imagen?" href="/Img-Lab-Cisco/create"><button class="btn agregar"><span>Agregar Imágenes</span></button></a>

	</div>
	
	@endforeach

</div>
	
@endsection