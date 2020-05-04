@extends('layouts.publico')

@section('title', 'Laboratorio de Cisco')

@section('content')

<div class="seccion-principal">
	
@foreach ($infras as $infra)

<!----------------------------------------------------------------- Lab Cisco---------------------------------------------------------->
	
	<div class="contenedor-titulo-seccion">
	
		<h3>{{$infra->nombre}}</h3>

	</div>

	@include('publico.menu-inf.formShow')
	
	@endforeach

</div>
	
@endsection