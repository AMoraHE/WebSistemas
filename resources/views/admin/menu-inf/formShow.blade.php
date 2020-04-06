
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

		<img src="/images/infra/{{$infra->img1}}">

		<img src="/images/infra/{{$infra->img2}}">

		<img src="/images/infra/{{$infra->img3}}">

		<img src="/images/infra/{{$infra->img4}}">

		<img src="/images/infra/{{$infra->img5}}">

		<img src="/images/infra/{{$infra->img6}}">
			
	</div>