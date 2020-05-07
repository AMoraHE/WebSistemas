@extends('layouts.publico')

@section('title', 'Noticias')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<div class="seccion-principal">

	<!------------------------------------------------------------- IMG PARALLAX ----------------------------------------------------------->

	<div class="contenedor-img-parallax">

	    <div class="img-parallax">
	     <div class="parallax">
	       <h1>Noticias</h1>
	       <hr>
	     </div>       
	    </div>

	    <div class="skew-abajo"></div>

	</div> 

<!--------------------------------------------------------------------------NOTICIA---------------------------------------------------------------------->


<!----------------------------------------------------------------- BUSCADOR NOTICIAS ------------------------------------------------------------------->

	<div class="contenedor-buscador">

		<div class="buscador">

        	<form  files = "true" method="GET" action="/isc-inicio-buscadorNoticias" enctype="multipart/form-data">
          		@csrf

          		<div class="contenedor-secciones">        			

	          		<div class="formulario">

						<input type="search" name="key" placeholder="Noticia">
						<button type="submit" class="btn-buscar"><span><i class="icono izquierda fas fa-search"></i></span></button>


					</div>

				</div>

			</form>

		</div>

	</div>

<!----------------------------------------------------------------- NOTICIAS ----------------------------------------------------------------------------->



<div class="contenedor-secciones">
	
	@foreach ($noticias as $noticia)


	<div class="contenedor-titulo-contenido">
				
		<h3>{{$noticia->titulo}}</h3>

	</div>

	<div class="contenedor-seccion-noticias">

		<div class="contenedor-img-contenido-noticia">


				<img src="/images/news/{{$noticia->newimage}}">

				<div class="seccion-fecha-noticia">

					<p>{{$noticia->created_at}}</p>

				</div>

			
		</div>


		<div class="contenedor-cuerpo-contenido-noticia">

			<div class="contenedor-cuerpo-txt-noticia">

				<p>{{$noticia->redaccion}}</p>

				<div class="seccion-continuacion">

					<a class="msj" mesanje="ver más noticias?" href="/isc-inicio-noticiasVerInd/{{$noticia->id}}"><button class="btn-leer"><span>Leer Más...</span></button></a>
						
				</div>

			</div>

		</div>

	</div>

	<div class="seccion-divisor-noticia"></div>

<!-------------------------------------------------------------- Paginacion ----------------------------------------------------------------------------->

	@endforeach

</div>

	<div id="paginas">
			{{$noticias->links()}}
	</div>

</div>

@endsection
