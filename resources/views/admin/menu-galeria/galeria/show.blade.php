@extends('layouts.administrador')

@section('title', 'Galería')

@section('content')

@if(session('status'))

    <div class="alert alert-success">

        {{session('status')}}

    </div>

@endif

<div class="seccion-principal">

		<div class="contenedor-titulo-seccion">

			<h3>Galería</h3>

			<div class="contenedor-botones">

				<a class="msj" mesanje="agregar un nuevo álbum?" href="/Album/create"><button class="btn agregar"><span>Agregar Álbum</span></button></a>
				
			</div>

		</div>
		
	@foreach ($albums as $album)
	
<!----------------------------------------------------------------- GALERÍA ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>{{$album->titulo}}</h3>

		</div>


		@include('admin.menu-galeria.formShow')

<!----------------------------------------------------------------- BOTONES GALERÍA ---------------------------------------------------------->

		<div class="contenedor-botones">
			
			<a class="msj" mesanje="eliminar este álbum?" href="/Album-Delete/{{$album->slug}}"><button class="btn eliminar"><span>Eliminar Álbum</span></button></a>
			<a class="msj" mesanje="editar este álbum?" href="/Album/{{$album->slug}}/edit"><button class="btn editar"><span>Editar Álbum</span></button></a>
			<a class="msj" mesanje="agregar imágenes?" href="/Album/agregar/{{$album->slug}}"><button class="btn agregar"><span>Agregar Imágenes</span></button></a>

		</div>

	@endforeach

	<div id="paginas"> 
			{{$albums->links()}}
	</div>

</div>

@endsection