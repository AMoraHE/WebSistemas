
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

		<label>Galería: </label>

	</div>


	<div class="seccion-mini-galeria">

		@foreach ($imagenes as $imagen)

		@if($imagen->albumSlug == $album->slug)
		<img src="/images/galeria/{{$imagen->imagen}}">
		<a onclick="return confirm('¿Desea eliminar esta imagen?')" href="/Album-Galeria-Delete/{{$imagen->id}}"><button class="btn"><span>Eliminar</span></button></a>
		@endif

		@endforeach
			
	</div>