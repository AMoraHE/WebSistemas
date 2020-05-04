@extends('layouts.publico')

@section('title', 'Laboratorio de Sistemas')

@section('content')

	<div class="seccion-principal">

		
@foreach ($infras as $infra)

<!--------------------------------------------------------------- Lab Sistemas---------------------------------------------------------->
		
		@include('publico.menu-inf.formShow')

		@endforeach

	</div>

@endsection