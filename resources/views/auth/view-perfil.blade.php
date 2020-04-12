@extends('layouts.administrador')

@section('title', 'Perfil')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

<div class="seccion-principal">

		<div class="contenedor-titulo-seccion">

			<h3>Perfil - {{$user->name}}</h3> 

		</div>

		<div class="contenedor-botones">
			
			<a class="msj" mesanje="editar perfil?" href="{{route('users.edit', $user)}}"><button class="btn editar"><span>Editar</span></button></a>
	
		</div>

<!----------------------------------------------------------------- Perfil ---------------------------------------------------------->

		<div class="contenedor-cuerpo-seccion">

			<div class="seccion-avatar">

		        <img class="avatar" src="/images/perfil/{{$user->perfil_img}}">

		    </div>

		</div>



		<div class="formulario">

			<label for="">Usuario</label>
			<input type="text" name="" value="{{$user->name}}" id="" readonly>
					
		</div>

		<div class="formulario">
					
			<label for="">Correo electrónico</label>
			<input type="email" name="" value="{{$user->email}}" id="" readonly>

		</div>

		<div class="contenedor-botones">

			<a class="msj" mesanje="Volver?" href="/admin"><button class="btn volver"><span>Volver</span></button></a>

		</div>

		
				
</div>

@endsection