@extends('layouts.publico')

@section('title', 'Galería')

@section('content')

@if(session('status'))

    <div class="alert alert-success">

        {{session('status')}}

    </div>

@endif

<div class="seccion-principal">


		
	@foreach ($albums as $album)
	
<!----------------------------------------------------------------- GALERÍA ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>{{$album->titulo}}</h3>

		</div>


		@include('admin.menu-galeria.formShow')

<!----------------------------------------------------------------- BOTONES GALERÍA ---------------------------------------------------------->


	@endforeach

	<div id="paginas"> 
			{{$albums->links()}}
	</div>

</div>

@endsection