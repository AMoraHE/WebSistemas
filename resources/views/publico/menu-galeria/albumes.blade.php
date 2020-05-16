@extends('layouts.publico')

@section('title', 'Galería')

@section('content')

<!----------------------------------------------------------------- PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">

	<!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/academicos.png">

            <div class="encabezado">

               <h1>Galería</h1>
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



		<div class="contenedor-seccion-flex">

		@foreach ($albums as $album)

			<div class="contenedor-cuerpo-seccion-flex">

				<div class="contenedor-cuerpo-flex">

				<div class="contenedor-titulo-seccion-mas t-azul">
					
					<h3>{{$album->titulo}}</h3>

				</div> 


					<div class="contenedor-seccion-img-lab">

							<img src="/images/galeria/album/{{$album->imgPrin}}" alt="{{$album->imgPrin}}">

							<div class="contenedor-txt-efecto">
				                <h2>Descripción</h2>
				                <p>{{$album->descripcion}}</p>
				                <button href="/isc-galeria-fotos/{{$album->slug}}" class="btn-burbuja-1">Ver álbum</button>
				            </div>
						
					</div>

				</div>

			</div>
		
		@endforeach

		</div>


	</div>

</div>

@endsection
