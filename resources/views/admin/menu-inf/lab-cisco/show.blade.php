@extends('layouts.administrador')

@section('title', 'Laboratorio de Cisco')

@section('content')

<div class="seccion-principal">

<!----------------------------------------------------------------- Lab Cisco---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>Laboratorio de Cisco</h3>

		</div>

		<div class="contenedor-botones">

			<a href="#"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->

		</div>

		<div class="contenedor-cuerpo-seccion">

			<div class="contenedor-img-slider">

				<img src="/img/LogoNuevaImagenGrande.png">

			</div>

		</div>

		<div class="formulario">
		
		<label for="">Responsable</label>
		<input type="text" name="" id ="" value="" class="form-control" readonly>

		</div>

		<div class="formulario">

		<label for="">Correo Electrónico</label>
		<input type="email" name="correo" id="correo" readonly>

		</div>


		<div class="formulario">

		<label for="">Descripción:</label>
		<textarea name="" readonly></textarea>

		</div>

		<div class="formulario">

		<label for="">Mini Galería: </label>

		</div>

		<div class="seccion-mini-galeria">

			<img src="/img/LogoNuevaImagen.png">

			<img src="/img/LogoNuevaImagen.png">

			<img src="/img/LogoNuevaImagen.png">

			<img src="/img/LogoNuevaImagen.png">

			<img src="/img/LogoNuevaImagen.png">

			<img src="/img/LogoNuevaImagen.png">

			<!---------------Boton agregar mas img a la mini galeria-------------------------->

			<div class="contenedores-botones">

				<button class="btn"><span>Agregar</span></button>
				
			</div>
			
		</div>

	</div>


@endsection