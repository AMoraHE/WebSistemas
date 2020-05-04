@extends('layouts.publico')

@section('title', 'Laboratorio de Microprocesadores')

@section('content')

	<div class="seccion-principal">

		
@foreach ($infras as $infra)

<!----------------------------------------------------------------- Lab micro---------------------------------------------------------->

		@include('publico.menu-inf.formShow')

		@endforeach

	</div>


@endsection