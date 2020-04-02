@extends('layouts.administrador')

@section('title', 'Celula de Desarrollo')

@section('content')

	<div class="seccion-principal">

<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>Celula de Desarrollo de Software</h3>

		</div>

		<div class="contenedor-cuerpo-seccion">

			<div class="contenedor-img-slider">

				<img src="/img/LogoNuevaImagenGrande.png">

			</div>

		</div>

		<div class="formulario">


		<label>Descripcion: </label>
		<textarea></textarea>

		</div>

		<div class="formulario">
		
		<label>Responsable: </label>
		<input></input>

		</div>

		<div class="formulario">

		<label>Correo: </label>
		<input></input>

		</div>

		<div class="seccion-mini-galeria">

			<img src="/img/LogoNuevaImagen.png">

			<img src="/img/LogoNuevaImagen.png">

			<img src="/img/LogoNuevaImagen.png">

			<img src="/img/LogoNuevaImagen.png">

			<img src="/img/LogoNuevaImagen.png">

			<img src="/img/LogoNuevaImagen.png">
			
		</div>

		<div class="contenedor-botones">

			<a href="{{route('LabCelulaE')}}"><button class="btn"><span>Editar</span></button></a> <!-- Editar Todo -->

		</div>


	</div>


@endsection