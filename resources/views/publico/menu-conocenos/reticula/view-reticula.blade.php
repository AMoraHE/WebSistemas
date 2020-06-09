@extends('layouts.publico')

@section('title', 'Reticula')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- RETICULA ---------------------------------------------------------->

<div class="seccion-principal">


	<div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/images/header/{{$subheader->sImg}}">

            <div class="encabezado">

               <h1>{{$subheader->sTitulo}}</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>
<!----------------------------------------------------------------- CUERPO RETICULA ---------------------------------------------------------->


<div class="contenedor-secciones">
	
	<div class="contenedor-completo-acordeon">
					
			@foreach ($reticulas as $reticula)

			<div class="contenedor-acordeon-subapartado">
				
				<div class="contenedor-titulo-acordeon">
					
					<h3>{{$reticula->titulo}}<i class="icono-aco-derecha fas fa-caret-down"></i></h3>

				</div>

				<div class="info-acordeon-centrado">
					
					<p>{{$reticula->programa}}</p>
					<p><b>PLAN:</b> {{$reticula->plan}}</p>
					<p><b>ESPECIALIDAD:</b> {{$reticula->especialidad}}</p>

					<div class="border-abajo"></div>

					<div class="contenedor-enlaces">
						
						<a target="_blank" rel="noopener noreferrer" href="/isc-conocenos-reticulaVer/{{$reticula->slug}}">{{$reticula->documento}}</a>

					</div>

					@php
					$var = $reticula->slug
					@endphp

<!------------------------------------------------------------------------------------ BOTONES RETICULA ------------------------------------------------------------------------------->

					<div class="contenedor-botones">

						<a href="/isc-conocenos-reticulaDescargar/{{$reticula->slug}}"><button class="icono-izquierda btn ret-verde"><span>Descargar <i class="icono-derecha far fa-save"></i></span></button></a>
						
					</div>

				</div>


			</div>

			@endforeach

	</div>

	<div id="paginas">
			{{$reticulas->links()}}
	</div>

</div>
				
</div>

@endsection