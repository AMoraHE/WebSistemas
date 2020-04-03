@extends('layouts.administrador')

@section('title', 'Perfil')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

		<div class="seccion-principal">

			<div class="formulario">
			
				<a onclick="return confirm('¿Desea modificar su perfil?')" href="{{route('users.edit', $user)}}"><button class="btn"><span>Editar</span></button></a>

			
			</div>

<!----------------------------------------------------------------- RETICULA 1 ---------------------------------------------------------->

		

		<div class="contenedor-cuerpo-seccion">

				<div class="contenedor-texto-conocenos-reticula">

					<label>Usuario:</label>
					<label>{{$user->name}}</label>
					<label>Correo electrónico:</label>
					<label>{{$user->email}}</label>
					
				</div>

		</div>

		<div class="contenedor-botones">

			<a onclick="return confirm('¿Desea regresar al menú anterior?')" href="/admin"><button class="btn"><span>Regresar</span></button></a>

		</div>

		
				
	</div>

@endsection