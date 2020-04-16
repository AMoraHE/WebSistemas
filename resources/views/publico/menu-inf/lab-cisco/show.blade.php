@extends('layouts.publico')

@section('title', 'Laboratorio de Cisco')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

<div class="seccion-principal">

	
		
@foreach ($infras as $infra)

<!----------------------------------------------------------------- Lab Cisco---------------------------------------------------------->
	
	<div class="contenedor-titulo-seccion">
	
		<h3>{{$infra->nombre}}</h3>

	</div>

	@include('admin.menu-inf.formShow')

	
	@endforeach

</div>
	
@endsection