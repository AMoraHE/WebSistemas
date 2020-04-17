
<!----------------------------------------------------------------- VISTA LABORATORIOS -------------------------------------------------------->

<div class="contenedor-cuerpo-seccion">

	<div class="contenedor-img-grande">

		<a target="_blank" rel="noopener noreferrer" href="/isc-galeria-fotosVerImg/{{$album->id}}"><img src="/images/galeria/album/{{$album->imgPrin}}" alt="{{$album->imgPrin}}"></a>

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

			<div class="contenedor-img-mini-galeria-img">

				<a target="_blank" rel="noopener noreferrer" href="/isc-galeria-fotosGaleriaVerImg/{{$imagen->id}}"><img src="/images/galeria/{{$imagen->imagen}}"></a>

			</div>

			
		</div>

		@endif
		@endforeach
			
	</div>