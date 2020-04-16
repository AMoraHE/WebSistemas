
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

			<div class="contenedor-img-mini-galeria-img">

				<img src="/images/infra/{{$imagen->imagen}}">

			</div>


		</div>

		@endforeach
			
	</div>