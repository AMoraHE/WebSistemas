
<!----------------------------------------------------------------- VISTA LABORATORIOS -------------------------------------------------------->

	<div class="contenedor-cuerpo-seccion">

		<div class="contenedor-img-grande">

			<img src="/images/infra/{{$infra->imgInicio}}" alt="{{$infra->imgInicio}}">

		</div>

	</div>

	<div class="formulario">
		
		<label>Responsable</label>
		<input type="text" name="" id ="" value="{{$infra->responsable}}" class="form-control" readonly>

	</div>

	<div class="formulario">

		<label>Correo Electrónico</label>
		<input type="email" name="correo" value="{{$infra->correo}}" id="correo" readonly>

	</div>


	<div class="formulario">

		<label>Descripción:</label>
		<textarea readonly>{{$infra->descripcion}}</textarea>

	</div>

	<div class="formulario">

		<label>Mini Galería: </label>

	</div>


	<div class="seccion-mini-galeria">


		@foreach ($imagenes as $imagen)

		<div class="contenedor-img-mini-galeria">

			<!---------------------------------- MODAL IMG -------------------------------------------->

			<div class="contenedor-img-mini-galeria-img hover-img">

				<a href="#modal-img{{$imagen->id}}">

					<img src="/images/infra/{{$imagen->imagen}}">
					<span><i class="fas fa-expand"></i></span>

				</a>

			</div>

			    <div class="modal-img" id="modal-img{{$imagen->id}}">

	              <a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
	              <img src="/images/infra/{{$imagen->imagen}}" />

            	</div>

        <!---------------------------------- FIN MODAL IMG -------------------------------------------->

			@if($infra->slug == 'cisco')
			<a class="msj" mesanje="eliminar esta imagen?" href="/Lab-Cisco-Delete/{{$imagen->id}}"><button class="btn eliminar"><span>Eliminar</span></button></a>
			@elseif($infra->slug == 'celula')
			<a class="msj" mesanje="eliminar esta imagen?" href="/Lab-Celula-Delete/{{$imagen->id}}"><button class="btn eliminar"><span>Eliminar</span></button></a>
			@elseif($infra->slug == 'sistemas')
			<a class="msj" mesanje="eliminar esta imagen?" href="/Lab-Sistemas-Delete/{{$imagen->id}}"><button class="btn eliminar"><span>Eliminar</span></button></a>
			@elseif($infra->slug == 'micro')
			<a class="msj" mesanje="eliminar esta imagen?" href="/Lab-Micro-Delete/{{$imagen->id}}"><button class="btn eliminar"><span>Eliminar</span></button></a>
			@endif

		</div>

		@endforeach
			
	</div>