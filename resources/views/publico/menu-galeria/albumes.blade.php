@extends('layouts.publico')

@section('title', 'Galería')

@section('content')

<!----------------------------------------------------------------- PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">

	<!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/images/header/{{$header->img}}">

            <div class="encabezado">

               <h1>{{$header->titulo}}</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>


<!------------------------------------------------------------- INFRA ----------------------------------------------------------->

	<div class="contenedor-secciones">

		<div class="contenedor-seccion-titulos-grande">

  			<h1>Álbumes</h1>

  		</div>


	    <div class="galeria">

	        <div class="linea"></div>

	        <div class="contenedor-album">

	        	@foreach ($albums as $album)

	            <div class="album">

	                <img src="/images/galeria/album/{{$album->imgPrin}}" alt="{{$album->imgPrin}}">

	                <div class="efecto-album">

	                   	<h2>{{$album->titulo}}</h2>
	                    <button href="/isc-galeria-fotos/{{$album->slug}}" class="btn-burbuja-1">Ver álbum</button>

	                </div>

	            </div>

	            @endforeach

	        </div>

	    </div>

	</div>

</div>

@endsection
