@extends('layouts.administrador')

@section('title', 'Editar Noticia')

@section('content')

	<!----------------------------------------------------------------- SELECT FECHA ---------------------------------------------------------->

	<div class="seccion-principal">

		<div class="contenedor-titulo-seccion-select">

				<h3>Eliminación Anual</h3>

			<div class="contenedor-select-seccion">

					<!----------------------------------------------------------------- SELECTOR DE AÑO ---------------------------------------------------------->

					<?php
					$cont = date('Y');
					?>

					<select name="year" id="year" class="seleccion">

						<option value="">--Elija un Año--</option>

						<?php while ($cont >= 2019) { ?>

						  <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>

						<?php $cont = ($cont-1); } ?>

					</select>

					<i></i>

					<!----------------------------------------------------------------- FIN SELECTOR DE AÑO ---------------------------------------------------------->

			</div>

		</div>


		<!----------------------------------------------------------------- NOTICIA N1 ---------------------------------------------------------->

	@foreach ($noticias as $noticia)

		<div class="contenedor-titulo-seccion">

				<h3>{{$noticia->titulo}}</h3>

		</div>

		<div class="contenedor-cuerpo-noticia">

				<div class="contenedor-img-noticia">

					<img src="/images/news/{{$noticia->newimage}}">

				</div>

				<div class="contenedor-texto">

					<p>{{$noticia->redaccion}}</p>

				</div>

		</div>

	@endforeach


	<!------------------------------------------------------------- BOTON ELIMINAR MASIVO ---------------------------------------------------------->

		<div class="contenedor-botones">

			<a onclick="return confirm('¿Desea realizar la eliminacion anual?')"><button class="btn"><span>Eliminar</span></button></a>

			<a onclick="return confirm('¿Desea cancelar la eliminacion anual?')" href="{{url()->previous()}}"><button class="btn"><span>Cancelar</span></button></a>

		</div>

	</div>

@endsection
