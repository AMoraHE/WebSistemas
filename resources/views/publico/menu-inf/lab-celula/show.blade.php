@extends('layouts.publico')

@section('title', 'Celula de Desarrollo de Software')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

	<div class="seccion-principal">

		@if(count($infras) > 0)

		@else

		@endif
		
@foreach ($infras as $infra)
	

<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>{{$infra->nombre}}</h3>

		</div>


		@include('admin.menu-inf.formShow')

<!----------------------------------------------------------------- Agregar IMG a la Mini Galeria Lab Celula---------------------------------------------------------->


		@endforeach

@endsection