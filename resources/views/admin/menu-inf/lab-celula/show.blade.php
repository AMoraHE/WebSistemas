@extends('layouts.administrador')

@section('title', 'Celula de Desarrollo de Software')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

	<div class="seccion-principal">
@foreach ($infras as $infra)
	

<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>Celula de Desarrollo de Software</h3>

		</div>

		<div class="contenedor-botones">

		<a href="/Lab-Celula/{{$infra->slug}}/edit"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->
			
		</div>

		@include('admin.menu-inf.formShow')
		@endforeach

@endsection