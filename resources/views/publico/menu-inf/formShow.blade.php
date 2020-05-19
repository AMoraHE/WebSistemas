
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

	<div class="mini-galeria-infra">

		<!-- slider agregado para la mini galeria -->

	</div>