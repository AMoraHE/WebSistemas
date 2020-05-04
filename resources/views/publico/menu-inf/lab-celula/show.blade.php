@extends('layouts.publico')

@section('title', 'Celula de Desarrollo de Software')
@section('content')

	<div class="seccion-principal">

	@foreach ($infras as $infra)

<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->

		@include('publico.menu-inf.formShow')

	@endforeach
<!----------------------------------------------------------------- Agregar IMG a la Mini Galeria Lab Celula---------------------------------------------------------->
	</div>

@endsection