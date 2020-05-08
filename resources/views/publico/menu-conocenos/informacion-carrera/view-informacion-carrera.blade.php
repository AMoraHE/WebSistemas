@extends('layouts.publico')

@section('title', 'Información Carrera')

@section('content')

<!----------------------------------------------------------------- INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->
<div class="seccion-principal">
	<!------------------------------------------------------------- IMG PARALLAX ----------------------------------------------------------->

	<div class="contenedor-img-parallax">

	    <div class="img-parallax">
	     <div class="parallax">
	       <h1>Información de la carrera</h1>
	       <hr>
	     </div>       
	    </div>

	    <div class="skew-abajo"></div>

	</div> 
<!----------------------------------------------------------------- CUERPO INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->
		
	<div class="fondo-mvo">


	@foreach($informaciones as $informacion)

		
	@if($informacion->categoria == 'Misión')
		<div class="contenedor-mvo">

				<div class="contenedor-mvo-subapartado">

					<div class="contenedor-titulo-mvo">
						<p>{{$informacion->categoria}}</p>			
					
					<div class="info-mvo">
								<p>{{$informacion->descripcion}}</p>
					</div>

					</div>
					<div class="contenedor-img-mvo">
						<img class="imagen-mvo" src="{{ asset('img/mision.png')}}">
					</div>

				</div>
		
		</div>
	@endif	

	@if($informacion->categoria == 'Visión')
		<div class="contenedor-mvo">

				<div class="contenedor-mvo-subapartado">

					<div class="contenedor-titulo-mvo-2">
						<p>{{$informacion->categoria}}</p>			
					
					<div class="info-mvo">
								<p>{{$informacion->descripcion}}</p>
					</div>

					</div>
					<div class="contenedor-img-mvo2">
						<img class="imagen-mvo" src="{{ asset('img/vision.png')}}">
					</div>

				</div>
		
		</div>
	@endif	


	@if($informacion->categoria == 'Objetivo de la carrera')
		<div class="contenedor-mvo">

				<div class="contenedor-mvo-subapartado">

					<div class="contenedor-titulo-mvo">
						<p>{{$informacion->categoria}}</p>			
					
					<div class="info-mvo">
								<p>{{$informacion->descripcion}}</p>
					</div>

					</div>
					<div class="contenedor-img-mvo">
						<img class="imagen-mvo" src="{{ asset('img/isc.png')}}">
					</div>

				</div>
		
		</div>
	@endif


	@if($informacion->categoria == 'Objetivo General')
		<div class="contenedor-mvo">

				<div class="contenedor-mvo-subapartado">

					<div class="contenedor-titulo-mvo-2">
						<p>{{$informacion->categoria}}</p>			
					
					<div class="info-mvo">
								<p>{{$informacion->descripcion}}</p>
					</div>

					</div>
					<div class="contenedor-img-mvo2">
						<img class="imagen-mvo" src="{{ asset('img/TecFCP.png')}}">
					</div>

				</div>
		
		</div>
	@endif


	@endforeach

		</div>

		</div>

@endsection