@extends('layouts.publico')

@section('title', 'Galería')

@section('content')

<div class="seccion-principal">

	    <!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/Noticias.png">

            <div class="encabezado">

            	<h1>Galería</h1>
            	<hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>

<div class="contenedor-secciones">
		
	@foreach ($albums as $album)
	
<!----------------------------------------------------------------- GALERÍA ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>{{$album->titulo}}</h3>

		</div>


		@include('publico.menu-galeria.formShow')

<!----------------------------------------------------------------- BOTONES GALERÍA ---------------------------------------------------------->


	@endforeach

</div>

	<div id="paginas"> 
			{{$albums->links()}}
	</div>

</div>

@endsection