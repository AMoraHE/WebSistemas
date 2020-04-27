@extends('layouts.administrador')

@section('title', 'Editar Perfil')

@section('content')

	<!--------------------------------------------------------------- Editar Perfil ----------------------------------------------------------> 

<div class="seccion-principal">
	    
	    <div class="contenedor-titulo-seccion">

	        <h3>Actualizar Perfil</h3>

	    </div>

	    <!----------------------------------------------------------------- Perfil ---------------------------------------------------------->

	    <form id="formulario" class="form-group" method="POST" action="{{route('users.update', $user)}}" enctype="multipart/form-data">
	    {{ csrf_field() }}
    	{{ method_field('patch') }}

	    	<div class="formulario">

	 			<label>Tamaño mínimo de la imagen recomendado: 500 x 500 pixeles. Tamaño máximo del archivo: 512KB.</label>

	 		</div>

			<div class="contenedor-cargar-img">

				<div class="contenedor-txt-seccion">

					<label>Seleccionar imagen</label>

				</div>

				<div class="contenedor-boton-cargar">

				<label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i>Subir Archivo</label>

				<input id="file-upload" onchange='cambiar()' name="imgPerfil" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

				</div>

				<div class="contenedor-img-seccion-cuadrado">

	 				<img id="img-pre" src="/images/perfil/{{$user->perfil_img}}">

	 			</div>

			</div>

			<div id="info-img">No se eligió archivo</div>

			@if ($errors->has('imgPerfil'))
      			<span class="invalid-feedback" role="alert">
        			<strong>{{ $errors->first('imgPerfil') }}</strong>
      			</span>
    		@endif

		    <div class="formulario"> 
		      
		          <label for="">Usuario</label>
		          @if ($errors->any())
		          <input type="text" name="name" id ="nombre" value="{{old('name')}}" placeholder="Ingrese su nombre" class="form-control">
		          @else
		          <input type="text" name="name" id ="nombre" value="{{$user->name}}" placeholder="Ingrese su nombre" class="form-control">
		          @endif
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
		          @if ($errors->any())
		          <input type="email" name="email" id ="correo" value="{{old('email')}}" placeholder="Ingrese su correo electrónico" class="form-control" required>
		          @else
		          <input type="email" name="email" id ="correo" value="{{$user->email}}" placeholder="Ingrese su correo electrónico" class="form-control" required>
		          @endif
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
		                
		        <a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>

		        <a class="msj" mesanje="Cancelar?" href="{{route('perfil-usuario')}}"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
		        
		    </div>

		</form>

</div>

@endsection