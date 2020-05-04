
<!----------------------------------------------------------------- VISTA LABORATORIOS -------------------------------------------------------->

	<div class="contenedor-cuerpo-seccion">

		<div class="contenedor-img-grande">

			<a target="_blank" rel="noopener noreferrer" href="/isc-infraestructura-labVerImg/{{$infra->id}}">			
				<img src="/images/infra/{{$infra->imgInicio}}" alt="{{$infra->imgInicio}}">
				<section class="caption-infra">
					<h2>{{$infra->nombre}}</h2 >
				</section>
			</a>
			
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

<!-- slider agregado para la mini galeria -->
	<div class="slideshow" >
		<ul class="slider config">
			@foreach ($imagenes as $imagen)
				<li>
				<a target="_blank" rel="noopener noreferrer" href="/isc-infraestructura-labGaleriaVerImg/{{$imagen->id}}">
				<img src="/images/infra/{{$imagen->imagen}}" >
					</a>
				</li>
			@endforeach
		</ul>
		<ol class="pagination config">
			
		</ol>
	
		<div class="left">
			<span class="fa fa-chevron-left"></span>
		</div>

		<div class="right">
			<span class="fa fa-chevron-right"></span>
		</div>
	</div>
			
