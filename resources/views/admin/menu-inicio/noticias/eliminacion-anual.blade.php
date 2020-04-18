@extends('layouts.administrador')

@section('title', 'Editar Noticia')

@section('content')

<!----------------------------------------------------------------- NOTICIAS --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

    	<h3>ELIMINACIÓN ANUAL</h3>
    
  	</div>

	<div class="contenedor-select">
<!---------------------------------------------------------------------- SELECTOR DE AÑO -------------------------------------------------------------->

		<div class="contenedor-select-seccion">

		<?php
		$cont = date('Y');
		?>
		<form id="formulario" class="form-goup" method="POST" action="/noticias-admin/eliminacion-multiple" enctype="multipart/form-data">
			@csrf

		<select name="year" id="year" class="seleccion">

			<option value="">--Elija un Año--</option>

				<?php while ($cont >= 2019) { ?>

			<option  value="<?php echo($cont); ?>"><?php echo($cont); ?></option>

				<?php $cont = ($cont-1); } ?>

		</select>

		<i></i>

		</div>

	</div>
<!---------------------------------------------------------------------- boton ELIMINACION ANUAL -------------------------------------------------------------->

			<div class="contenedor-botones-centrado">

				<a id="save" texto="eliminar todas las noticias?"><button class="btn eliminar centrado"><span>Eliminar</span></button></a>

			</div>

		</form>



<!-------------------------------------------------------------------------- NOTICIAS -------------------------------------------------------------------------->

	@foreach ($noticias as $noticia)

	<div class="contenedor-titulo-seccion">

		<h3>{{$noticia->titulo}}</h3>

	</div>

	<div class="contenedor-cuerpo-dividido">

		<div class="contenedor-img-dividido">

			<img src="/images/news/{{$noticia->newimage}}">

		</div>

		<div class="contenedor-texto-dividido">

			<p>{{$noticia->redaccion}}</p>

		</div>

	</div>

	@endforeach

	<div id="paginas">
			{{$noticias->links()}}
	</div>


	<!------------------------------------------------------------- BOTONES NOTICIA CANCELAR ---------------------------------------------------------->

	<div class="contenedor-botones">

		<a class="msj" mesanje="cancelar?" href="/noticias-admin"><button class="btn cancelar"><span>Cancelar</span></button></a>

	</div>

</div>

@endsection
