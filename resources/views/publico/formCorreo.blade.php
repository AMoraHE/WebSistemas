@extends('layouts.publico')

@section('title', 'Formulario Correo')

@section('content')

<!----------------------------------------------------------------- AGREGAR PROYECTOS ---------------------------------------------------------->

<div class="seccion-principal">

	<!------------------------------------------------------------- IMG PARALLAX ----------------------------------------------------------->

	<div class="contenedor-img-parallax">

	    <div class="img-parallax"> <!--style="background:url(../img/contacto.jpg);"-->
	     <div class="parallax">
	       <h1>Queremos saber de ti</h1>
	       <hr>

	     </div>       
	    </div>

	    <div class="skew-abajo"></div>

	</div>

	<!------------------------------------------------------------- FORMULARIO ----------------------------------------------------------->

	<div class="info-contacto-1">

		<div class="info-contacto-2">
				
			<p class="contacto">Nos interesa conocer tus opiniones y dudas sobre la carrera.</p>
		    <p>Escríbenos y nos pondremos en contacto contigo.</p>

		</div>
			
	</div>

	<div class="contenedor-secciones">

		<div class="contenedor-titulo-seccion-mas">


			<h3>Formulario de Contacto</h3>


		</div>

	<!----------------------------------------------------------------- CARGRA IMG PROYECTOS ---------------------------------------------------------->

		<form id="formulario" class="form-goup" method="POST" action="/isc-inicio-contactoCorreo" >
		@csrf

		<div class="formulario">

			<label>Destinatario</label>
			<input type="email" name="destinatario" id="destinatario" value="{{$destinatario}}" class="form-control" readonly>

			@if ($errors->has('destinatario'))

	      		<span class="invalid-feedback" role="alert">

	        		<strong>{{ $errors->first('destinatario') }}</strong>

	      		</span>

	    	@endif

		</div>

		<div class="formulario">

			<label>Remitente</label>
			<input type="email" name="remitente" id="remitente" value="{{old('remitente')}}" placeholder="Ingrese su direccion de correo electrónico..." class="form-control" required>

			@if ($errors->has('remitente'))

	      		<span class="invalid-feedback" role="alert">

	        		<strong>{{ $errors->first('remitente') }}</strong>

	      		</span>

	    	@endif

		</div>


	   <div class="formulario">

			<label>Nombre</label>
			<input type="text" name="nombre" placeholder="Ingrese su nombre" required>{{old('nombre')}}</input>

			@if ($errors->has('nombre'))

	      		<span class="invalid-feedback" role="alert">

	        		<strong>{{ $errors->first('nombre') }}</strong>

	      		</span>

	    	@endif

		</div>	

	    <div class="formulario">

			<label>Mensaje</label>
			<textarea name="mensaje" placeholder="Redacte el mensaje que desea enviar" required>{{old('mensaje')}}</textarea>

			@if ($errors->has('mensaje'))

	      		<span class="invalid-feedback" role="alert">

	        		<strong>{{ $errors->first('mensaje') }}</strong>

	      		</span>

	    	@endif

		</div>	

	    

		<div class="contenedor-botones">

			<a id="save" texto="guardar el nuevo proyecto?"><button class="btn guardar" type="submit" name="send"><span>Enviar</span></button></a>
	 		<a class="msj" mesanje="cancelar?" href="{{url()->previous()}}"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
		

		</div>

	</form>

	</div>

</div>
	
@endsection