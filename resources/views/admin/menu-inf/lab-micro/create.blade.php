@extends('layouts.administrador')

@section('title', 'Laboratorio de Microprocesadores')

@section('content')
@include('common.errors')

<div class="seccion-principal">

		<div class="contenedor-titulo-seccion">
	
			<h3>Editar - Laboratorio de Microprocesadores</h3>

		</div>

<!----------------------------------------------------------------- Lab microprocesadores---------------------------------------------------------->

<form class="form-group" files = "true" method="POST" action="/Lab-Micro" enctype="multipart/form-data">
	@include('admin.menu-inf.form')

	<!----------------------------------------------------------------- Cargar Imagen ---------------------------------------------------------->

	<div class="formulario">

        <label for="">Tamaño de imagen recomendado: 1100px de ancho y 450px de alto</label>
        
     </div>


  	<div class="contenedor-cargar-img">

  			<div class="contenedor-txt-seccion">

  				<label for="">Cargar IMG</label>

  			</div>

  			<div class="contenedor-boton-cargar">

  				<label for="file-upload" class="subir">
  					<i class="fas fa-cloud-upload-alt"></i> Subir Archivo
  				</label>

  				<input id="file-upload" name="image" value="/img/slider/" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />

  				<div id="info-img">No se Eligió Archivo</div>


  			</div>


  			<div class="contenedor-img-seccion">

  				<img id="img-pre" src="/img/LogoNuevaImagen.png">

  			</div>


  	</div>

  	<!----------------------------------------------------------------- Información ---------------------------------------------------------->
	

	<div class="formulario">
		
		<label for="">Responsable</label>
		<input type="text" name="" id ="" value="" placeholder="Nombre del Responsable" class="form-control" required>

		</div>

		<div class="formulario">

		<label for="">Correo Electrónico</label>
		<input type="email" name="correo" id="correo" placeholder="Ej: usuario@servidor.com" required>

		</div>


		<div class="formulario">

		<label for="">Descripción:</label>
		<textarea name="" placeholder="Inserte Descripción del Laboratorio ... " required></textarea>

		</div>



	  <div class="contenedor-botones">
                      
        <a onclick="return confirm('¿Seguro que desea actualizar?')"><button type="submit" class="btn"><span>Guardar</span></button></a>
        <a onclick="return confirm('¿Desea bandonar sin guardar?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
      
    </div>
</form>

</div>
@endsection