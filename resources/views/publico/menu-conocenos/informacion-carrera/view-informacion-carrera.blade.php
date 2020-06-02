@extends('layouts.publico')

@section('title', 'Información Carrera')

@section('content')

<!----------------------------------------------------------------- INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->
<div class="seccion-principal">
	<!------------------------------------------------------------- IMG PARALLAX ----------------------------------------------------------->
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
<!----------------------------------------------------------------- CUERPO INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->
		
	<div class="fondo-mvo">


	@foreach($informaciones as $informacion)

		
	@if($informacion->categoria == 'Misión')
		<div class="contenedor-mvo">

				<div class="contenedor-mvo-subapartado">

					<div class="contenedor-img-mvo">
						<img class="imagen-mvo" src="/images/informacion/{{$informacion->img}}">
					</div>

					<div class="contenedor-titulo-mvo">
						<p>{{$informacion->categoria}}</p>			
					
					<div class="info-mvo">
								<p>{{$informacion->descripcion}}</p>
					</div>

					</div>

				</div>
		
		</div>
	@endif	

	@if($informacion->categoria == 'Visión')
		<div class="contenedor-mvo">

				<div class="contenedor-mvo-subapartado">

					<div class="contenedor-img-mvo2">
						<img class="imagen-mvo" src="/images/informacion/{{$informacion->img}}">
					</div>

					<div class="contenedor-titulo-mvo-2">
						<p>{{$informacion->categoria}}</p>			
					
					<div class="info-mvo">
								<p>{{$informacion->descripcion}}</p>
					</div>

					</div>
					

				</div>
		
		</div>
	@endif	


	@if($informacion->categoria == 'Objetivo de la carrera')
		<div class="contenedor-mvo">

				<div class="contenedor-mvo-subapartado">

					<div class="contenedor-img-mvo">
						<img class="imagen-mvo" src="/images/informacion/{{$informacion->img}}">
					</div>

					<div class="contenedor-titulo-mvo">
						<p>{{$informacion->categoria}}</p>			
					
					<div class="info-mvo">
								<p>{{$informacion->descripcion}}</p>
					</div>

					</div>

				</div>
		
		</div>
	@endif


	@if($informacion->categoria == 'Objetivo General')
		<div class="contenedor-mvo">

				<div class="contenedor-mvo-subapartado">

					<div class="contenedor-img-mvo2">
						<img class="imagen-mvo" src="/images/informacion/{{$informacion->img}}">
					</div>

					<div class="contenedor-titulo-mvo-2">
						<p>{{$informacion->categoria}}</p>			
					
					<div class="info-mvo">
								<p>{{$informacion->descripcion}}</p>
					</div>

					</div>

				</div>
		
		</div>
	@endif

	
	@endforeach

		</div>

		</div>

@endsection