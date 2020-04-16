@extends('layouts.publico')

@section('title', 'Galería')

@section('content')

<div class="seccion-principal">


		
	@foreach ($albums as $album)
	
<!----------------------------------------------------------------- GALERÍA ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>{{$album->titulo}}</h3>

		</div>


		@include('publico.menu-galeria.formShow')

<!----------------------------------------------------------------- BOTONES GALERÍA ---------------------------------------------------------->


	@endforeach

	<div id="paginas"> 
			{{$albums->links()}}
	</div>

</div>

@endsection