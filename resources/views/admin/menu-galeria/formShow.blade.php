
<!----------------------------------------------------------------- VISTA LABORATORIOS -------------------------------------------------------->

<div class="contenedor-cuerpo-seccion">

	<div class="contenedor-img-grande">

		<img src="/images/galeria/album/{{$album->imgPrin}}" alt="{{$album->imgPrin}}">

	</div>

</div>

	<div class="formulario">

		<label>Descripción</label>
		<textarea name="descripcion" readonly>{{$album->descripcion}}</textarea>

	</div>

	<div class="formulario">

		<label>Galería</label>

	</div>


	<div class="seccion-mini-galeria">

		@foreach ($imagenes as $imagen)

		@if($imagen->albumSlug == $album->slug)

		<div class="contenedor-img-mini-galeria">

        <!---------------------------------- MODAL IMG -------------------------------------------->

          <div class="contenedor-img-mini-galeria-img hover-img">

            <a href="#modal-img{{$imagen->id}}">

              <img src="/images/galeria/{{$imagen->imagen}}">
              <span><i class="fas fa-expand"></i></span>

            </a>

          </div>

            <div class="modal-img" id="modal-img{{$imagen->id}}">

              <a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
              <img src="/images/galeria/{{$imagen->imagen}}" />

            </div>

        <!---------------------------------- FIN MODAL IMG -------------------------------------------->			

			<a class="msj" mesanje="eliminar esta imagen?" href="/Album-Galeria-Delete/{{$imagen->id}}"><button class="btn eliminar"><span>Eliminar</span></button></a>
			
		</div>

		@endif
		@endforeach
			
	</div>