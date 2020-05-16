
<!----------------------------------------------------------------- VISTA LABORATORIOS -------------------------------------------------------->

<div class="contenedor-cuerpo-seccion">

	<div class="contenedor-seccion-img-grande">

		<a target="_blank" rel="noopener noreferrer" href="/isc-galeria-fotosVerImg/{{$album->id}}"><img src="/images/galeria/album/{{$album->imgPrin}}" alt="{{$album->imgPrin}}"></a>

	</div>

</div>

	<div class="formulario">

		<label>Descripción</label>
		<textarea name="descripcion" readonly>{{$album->descripcion}}</textarea>

	</div>

	<div class="seccion-mini-galeria">

		<h3>Galería de Fotos</h3>

			<ul id="carousel{{$album->id}}" class="elastislide-list">

			@foreach ($imagenes as $imagen)
			@if($imagen->albumSlug == $album->slug)

			<li>

				<div class="contenedor-img-mini-galeria">

		        <!---------------------------------- MODAL IMG -------------------------------------------->

		          <div class="contenedor-img-mini-galeria-img">

		            <a href="#modal-img{{$imagen->id}}">

		            	<img src="/isc-galeria-fotosGaleriaVerImg/{{$imagen->id}}">

			            <div class="hover-galeria">
		                    <img src="/img/icono1.png" alt="">
		                    <p>Abrir</p>
	                	</div>

                	</a>


		          </div>

		        <!---------------------------------- FIN MODAL IMG -------------------------------------------->

				</div>

			</li>

			@endif
			@endforeach

				<script>
				
					$('#carousel{{$album->id}}').elastislide();
				
				</script>

			</ul>

			@foreach ($imagenes as $imagen)

			    <div class="modal-img" id="modal-img{{$imagen->id}}">

	              <a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
	              <img src="/images/galeria/{{$imagen->imagen}}" />

	            </div>

	        @endforeach
		
	</div>

	<div class="seccion-divisor-seccion"></div>

