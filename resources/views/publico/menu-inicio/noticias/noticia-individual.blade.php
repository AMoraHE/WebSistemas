@extends('layouts.publico')

@section('title', 'Noticia individual')

@section('content')

<!----------------------------------------------------------------- NOTICIAS --------------------------------------------------------------------------->

<div class="seccion-principal">

    <!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/images/header/{{$header->img}}">

            <div class="encabezado">

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>

	<!----------------------------------------------------------------- NOTICIAS----------------------------------------------------------------------------->
	<div class="contenedor-secciones"> 


		<div class="contenedor-noticias-individuales">

			<div class="contenedor-titulo-seccion-ind">

				<h3>{{$noticias->titulo}}</h3>

			</div>
			
				<div class="contenedor-img-noticia-ind">

					<div class="contenedor-img-noticia-ind-img">

					<!---------------------------------- MODAL IMG -------------------------------------------->

						<a href="#modal-img{{$noticias->id}}">

							<img src="/images/news/{{$noticias->newimage}}">

						</a>

					</div>

				</div>

					<div class="modal-img" id="modal-img{{$noticias->id}}">

						<a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
						<img src="/images/news/{{$noticias->newimage}}" />

									
					</div>

				<!---------------------------------- FIN MODAL IMG -------------------------------------------->

				<div class="redaccion-noticia-ind">

					{!! $noticias->redaccion !!}

				</div>

				<!--<div class="contenedor-botones">

					<a class="msj" mesanje="ver más noticias?" href="/isc-inicio-noticias"><button class="btn"><span>Regresar</span></button></a>
			
				</div>-->


		</div>

	</div>

</div>

@endsection
