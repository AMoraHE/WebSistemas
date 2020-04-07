@extends('layouts.administrador')

@section('title', 'Celula de Desarrollo de Software')

@section('content')
@include('common.errors')


<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">
	
			<h3>Agregar - Celula de Desarrollo de Software</h3>

	 </div>


<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->

	<form class="form-group" files = "true" method="POST" action="/Lab-Celula" enctype="multipart/form-data">
	 

	  <!----------------------------------------------------------------- Cargar Imagen ---------------------------------------------------------->
	  @include('admin.menu-inf.form')

	  	<div class="contenedor-botones">     

			<a onclick="return confirm('¿Desea guardar la información ingresada?')"><button type="submit" class="btn"><span>Guardar</span></button></a>
			<a onclick="return confirm('¿Desea abandonar sin guardar?')" href="/Lab-Celula"><button type="button" class="btn"><span>Cancelar</span></button></a>

		</div>
		
	</form>

</div>


@endsection