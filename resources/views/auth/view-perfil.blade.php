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
			
			<a onclick="return confirm('¿Desea modificar su perfil?')" href="{{route('users.edit', $user)}}"><button class="btn"><span>Editar</span></button></a>
	
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

			<a onclick="return confirm('¿Desea regresar al menú anterior?')" href="/admin"><button class="btn"><span>Regresar</span></button></a>

		</div>

		
				
</div>

@endsection