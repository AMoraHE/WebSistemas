
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
		<textarea name="" readonly>{{$infra->descripcion}}</textarea>

	</div>

	<div class="formulario">

		<label>Mini Galería: </label>

	</div>


	<div class="seccion-mini-galeria">


		@foreach ($imagenes as $imagen)

		<div class="contenedor-img-mini-galeria">

			<div class="contenedor-img-mini-galeria-img">

				<img src="/images/infra/{{$imagen->imagen}}">

			</div>

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