<div class="contenedor-cuerpo-seccion">

			<div class="contenedor-img-slider">

				<img src="/images/{{$infra->imgInicio}}" alt="{{$infra->imgInicio}}">

			</div>

		</div>

		<div class="formulario">
		
		<label for="">Responsable</label>
		<input type="text" name="" id ="" value="{{$infra->responsable}}" class="form-control" readonly>

		</div>

		<div class="formulario">

		<label for="">Correo Electrónico</label>
		<input type="email" name="correo" value="{{$infra->correo}}" id="correo" readonly>

		</div>


		<div class="formulario">

		<label for="">Descripción:</label>
		<textarea name="" readonly>{{$infra->descripcion}}</textarea>

		</div>

		<div class="formulario">

		<label for="">Mini Galería: </label>

		</div>

		<div class="seccion-mini-galeria">

			<img src="/images/{{$infra->img1}}">

			<img src="/images/{{$infra->img2}}">

			<img src="/images/{{$infra->img3}}">

			<img src="/images/{{$infra->img4}}">

			<img src="/images/{{$infra->img5}}">

			<img src="/images/{{$infra->img6}}">

			<!---------------Boton agregar mas img a la mini galeria-------------------------->

			<div class="contenedores-botones">

				<button class="btn"><span>Agregar</span></button>
				
			</div>
			
		</div>

	</div>