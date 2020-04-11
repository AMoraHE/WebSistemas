
<!----------------------------------------------------------------- VISTA LABORATORIOS -------------------------------------------------------->

<div class="contenedor-cuerpo-seccion">

	<div class="contenedor-img-grande">

		<img src="/images/galeria/album/{{$album->imgPrin}}" alt="{{$album->imgPrin}}">

	</div>

</div>

	<div class="formulario">

		<label>Descripción:</label>
		<textarea name="descripcion" readonly>{{$album->descripcion}}</textarea>

	</div>

	<div class="formulario">

		<label>Galería:</label>

	</div>


	<div class="seccion-mini-galeria">

		@foreach ($imagenes as $imagen)

		@if($imagen->albumSlug == $album->slug)

		<div class="contenedor-img-mini-galeria">

			<div class="contenedor-img-mini-galeria-img">

				<img src="/images/galeria/{{$imagen->imagen}}">

			</div>

			<a class="msj" mesanje="eliminar esta imagen?" href="/Album-Galeria-Delete/{{$imagen->id}}"><button class="btn eliminar"><span>Eliminar</span></button></a>
			
		</div>

		@endif
		@endforeach
			
	</div>