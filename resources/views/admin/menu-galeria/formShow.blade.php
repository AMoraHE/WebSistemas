
<!----------------------------------------------------------------- VISTA LABORATORIOS -------------------------------------------------------->

<div class="contenedor-cuerpo-seccion">

	<div class="contenedor-img-grande">

		<img src="/images/galeria/album/{{$album->imgPrin}}" alt="{{$album->imgPrin}}">

	</div>

</div>

	<!--<div class="formulario">

		<label>Descripción</label>
		<textarea name="descripcion" readonly>{{$album->descripcion}}</textarea>

	</div>-->

	<div class="formulario">

		<label>Galería</label>

	</div>


	<div class="seccion-mini-galeria">

		<ul id="carousel{{$album->id}}" class="elastislide-list">

			@foreach ($imagenes as $imagen)

			@if($imagen->albumSlug == $album->slug)

	        <!---------------------------------- MODAL IMG -------------------------------------------->

	        	<li>

	          		<div class="contenedor-img-mini-galeria">

		          		<div class="contenedor-img-mini-galeria-img">

				            <a href="#modal-img{{$imagen->id}}"><img src="/images/galeria/{{$imagen->imagen}}"></a>

				           	<div class="contenedor-img-mini-galeria-button">

					        	<a class="msj" mesanje="eliminar esta imagen?" href="/Album-Galeria-Delete/{{$imagen->id}}"><button class="btn eliminar centrado"><span>Eliminar</span></button></a>
					        	
					        </div> 

				        </div>

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