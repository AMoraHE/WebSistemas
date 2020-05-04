@extends('layouts.publico')

@section('title', 'Laboratorio de Cisco')

@section('content')

<div class="seccion-principal">
	
@foreach ($infras as $infra)

<!----------------------------------------------------------------- Lab Cisco---------------------------------------------------------->
	

	@include('publico.menu-inf.formShow')
	
@endforeach

</div>
	
@endsection