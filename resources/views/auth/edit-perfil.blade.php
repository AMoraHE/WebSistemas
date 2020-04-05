@extends('layouts.administrador')

@section('title', 'Editar Perfil')

@section('content')

	<!--------------------------------------------------------------- Editar Perfil ----------------------------------------------------------> 

<div class="seccion-principal">
	    
	    <div class="contenedor-titulo-seccion">

	        <h3>Actualizar Perfil</h3>

	    </div>

	    <!----------------------------------------------------------------- Perfil ---------------------------------------------------------->

	    <form class="form-group" method="POST" action="{{route('users.update', $user)}}" enctype="multipart/form-data">
	    {{ csrf_field() }}
    	{{ method_field('patch') }}

	    	<div class="formulario">

	 			<label for="">Tamaño de imagen recomendado: 200px de ancho y 200px de alto</label>

	 		</div>

			<div class="contenedor-cargar-img">

				<div class="contenedor-txt-seccion">

					<label for="">Cargar IMG</label>

				</div>

				<div class="contenedor-boton-cargar">

				<label for="file-upload" class="subir"><i class="fas fa-cloud-upload-alt"></i>Subir Archivo</label>

				<input id="file-upload" onchange='cambiar()' name="imgPerfil" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

					<div id="info-img">No se Eligió Archivo</div>

				</div>

				<div class="contenedor-img-seccion">

	 				<img id="img-pre" src="/images/perfil/{{$user->perfil_img}}">

	 			</div>

			</div>

			@if ($errors->has('imgPerfil'))
      			<span class="invalid-feedback" role="alert">
        			<strong>{{ $errors->first('imgPerfil') }}</strong>
      			</span>
    		@endif

		    <div class="formulario"> 
		      
		          <label for="">Usuario</label>
		          <input type="text" name="name" id ="nombre" value="{{$user->name}}" placeholder="Ingrese su nombre" class="form-control">
		    </div>

		    <div class="formulario">
		    	@if ($errors->has('name'))
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $errors->first('name') }}</strong>
	                </span>
                @endif
		    </div>

		    <div class="formulario"> 
		          <label for="">Correo electrónico</label>
		          <input type="email" name="email" id ="correo" value="{{$user->email}}" placeholder="Ingrese su correo electrónico" class="form-control" required>
		    </div>

		    <div class="formulario">
		    	@if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
		    </div>

		    <div class="formulario"> 
		          <label for="">Contraseña</label>
		          <input type="password" name="password" id ="contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" value="" placeholder="Ingrese su contraseña" class="form-control" required>
		    </div>

		    <div class="formulario">
		    	@if ($errors->has('password'))
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $errors->first('password') }}</strong>
	                </span>
                @endif
		    </div>

		    <div class="formulario"> 
		          <label for="">Verficar contraseña</label>
		          <input type="password" name="password_confirmation" id ="valida-contraseña" value="" placeholder="Compruebe su contraseña" class="form-control" required>
		    </div>

		    <div class="contenedor-botones">
		                
		        <a onclick="return confirm('¿Desea guardar los cambios?')"><button class="btn" type="submit"><span>Guardar</span></button></a>

		        <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="{{route('perfil-usuario')}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
		        
		    </div>

		</form>

</div>

@endsection