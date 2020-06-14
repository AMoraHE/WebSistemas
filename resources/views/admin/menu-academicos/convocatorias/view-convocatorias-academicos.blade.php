@extends('layouts.administrador')

@section('title', 'Convocatorias')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- convocatorias ---------------------------------------------------------->


<div class="seccion-principal">

	<div class="titulos-secciones-principales">

    	<h1>CONVOCATORIAS</h1>
    
  	</div>

	<!-----------------Botones--------->

	<div class="contenedor-botones">

		<a class="msj" mesanje="agregar una nueva convocatoria?" href="/ConvocatoriasAcademicos/create"><button class="btn agregar"><span>Agregar</span></button></a>

	</div>

	@foreach ($convocatorias as $convocatoria)

	<div class="contenedor-titulo-seccion">

		<h3>{{$convocatoria->convocatoria}}</h3>

	</div>

	<!----------------------------------------------------------------- FORMULARIO ---------------------------------------------------------->

			<div class="contenedor-formulario-dividido">

			    <div class="columna-de-dos">

			      <div class="formulario">

			        <label>Fecha Inicio</label>
			        <input  data-date-format="l j, F, Y" id="FInicio" name="FInicio" value="{{$convocatoria->FInicio}}" readonly />

			      </div>

			    </div>

			    <div class="columna-de-dos">

			      <div class="formulario">

			        <label>Fecha Cierre</label>
			        <input data-date-format="l j, F, Y" id="FFin" name="FFin" value="{{$convocatoria->FFin}}" readonly />

			      </div>

			    </div>

			</div>

			<div class="formulario">

				<label>Descripción</label>
				<div class="descripcion-infra">
					{!! $convocatoria->descripcion !!}
				</div>
				
				
			</div>

			<div class="contenedor-enlaces">
			
				<a target="_blank" rel="noopener noreferrer" href="/ConvocatoriasAcademicos/{{$convocatoria->slug}}">{{$convocatoria->doc}}</a>

			</div>

			@php
			$var = $convocatoria->slug
			@endphp


<!---------------BOTONES convocatoria------------------------------------->

	<div class="contenedor-botones">

		<a href="{{route('descargar-convocatoria', ['slug' => $var])}}"><button class="btn"><span>Descargar</span></button></a>

		 <a class="msj" mesanje="editar esta convocatoria?" href="/ConvocatoriasAcademicos/{{$convocatoria->slug}}/edit"><button class="btn editar"><span>Editar</span></button></a>

		 <a class="msj" mesanje="eliminar esta convocatoria?" href="/ConvocatoriasAcademicos-Eliminar/{{$convocatoria->slug}}"><button type="submit" class="btn eliminar"><span>Eliminar</span></button></a> 	

	</div>

	@endforeach

	<div id="paginas">
			{{$convocatorias->links()}}
	</div>

</div>

@endsection
