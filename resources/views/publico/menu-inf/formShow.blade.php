
<!----------------------------------------------------------------- VISTA LABORATORIOS -------------------------------------------------------->

<div class="contenedor-img-encabezado">

<div class="img-encabezado">

<img src="/images/infra/{{$infra->imgInicio}}" alt="{{$infra->imgInicio}}">

  <div class="encabezado">

	  <h1 class="titulo-infra diseño-titulo-infra">{{$infra->nombre}}</h1>

  </div>

</div>   

<div class="skew-abajo"></div>

</div>
		<label class="elegantshadow-infra subtitulo-infra">Descripción:</label>
	<div class="formulario-infra">

	<div class="formulario-infra-hijo">
		{{$infra->descripcion}}
	</div>

	</div>
	<label class="elegantshadow-infra subtitulo-infra">Responsable:</label>
	<div class="formulario-infra">
		
		{{$infra->responsable}}
		
	</div>
	<label class="elegantshadow-infra subtitulo-infra">Correo Electrónico:</label>
	<div class="formulario-infra">

		{{$infra->correo}}

	</div>

	<label class="elegantshadow-infra subtitulo-infra">Mini Galería:</label>

	<div class="seccion-mini-galeria">

		<h3>Galería de Fotos</h3>

			<ul id="carousel{{$infra->id}}" class="elastislide-list">

			@foreach ($imagenes as $imagen)

			<li>

				<div class="contenedor-img-mini-galeria">

		        <!---------------------------------- MODAL IMG -------------------------------------------->

		          <div class="contenedor-img-mini-galeria-img">

		            <a href="#modal-img{{$imagen->id}}">

		            	<img src="/images/infra/{{$imagen->imagen}}">

			            <div class="hover-galeria">
		                    <img src="/img/icono1.png" alt="">
		                    <p>Abrir</p>
	                	</div>

                	</a>


		          </div>

		        <!---------------------------------- FIN MODAL IMG -------------------------------------------->

				</div>

			</li>

			@endforeach

				<script>
				
					$('#carousel{{$infra->id}}').elastislide();
				
				</script>

			</ul>

			@foreach ($imagenes as $imagen)

			    <div class="modal-img" id="modal-img{{$imagen->id}}">

	              <a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
	              <img src="/images/infra/{{$imagen->imagen}}" />

	            </div>

	        @endforeach
		
	</div>