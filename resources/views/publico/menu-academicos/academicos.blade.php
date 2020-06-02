@extends('layouts.publico')

@section('title', 'Académicos')

@section('content')

<!----------------------------------------------------------------- PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">

	<!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/images/header/{{$header->img}}">

            <div class="encabezado">

               <h1>{{$header->titulo}}</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>


<!------------------------------------------------------------- PROYECTOS ----------------------------------------------------------->

	<div class="contenedor-secciones">

	    <div class="contenedor-seccion-proyecto">

	    	<div class="contenedor-seccion-titulos-grande">

	    		<h1>PROYECTOS</h1>
	    		
	    	</div>

	    	<div class="contenedor-proyectos-1">

				@foreach ($proyectos as $proyecto)

				<div class="contenedor-titulo-seccion">

						<h3>{{$proyecto->proyecto}}</h3>

				</div>

				<div class="contenedor-seccion-cuerpo-dividido-1">

					<div class="contenedor-seccion-img-grande-1">

						<img src="/images/proyectos/{{$proyecto->newimage}}">

					</div>

					<div class="contenedor-seccion-cuerpo-filas-1">

						<div class="contenedor-desarrolladores-1">

							<h3>Desarrolladores</h3>

							@foreach (explode(',', $proyecto->desarrolladores) as $desarrolladores)
								
								@php
								$desarrollador = ltrim($desarrolladores);
								@endphp

								<p><i class="icono-izquierda far fa-user-circle"></i>{{$desarrollador}}</p>

							@endforeach

						</div>

						<div class="contenedor-descripcion-proyecto-1">

							<h3>Descripción</h3>

							<p>{{$proyecto->descripcion}}</p>

						</div>

						
					</div>
				
				</div>

				@endforeach

				<div class="seccion-continuacion">

					<a class="msj" mesanje="ver más noticias?" href="/isc-academicos-proyectos"><button class="btn-leer"><span>Ver más proyectos</span></button></a>
						
				</div>

			</div>

		</div>

<!------------------------------------------------------------- EVENTOS ----------------------------------------------------------->

	<div class="contenedor-seccion-ecp">
	
		<div class="contenedor-seccion-eventos">

			<h1>EVENTOS ACADÉMICOS</h1>

			@foreach ($eventos as $evento)

			<div class="contenedor-titulo-seccion-ecp">

				<h3><i class="icono-izquierda fas fa-file-invoice"></i>{{$evento->titulo}}</h3>

			</div>

			<div class="contenedor-seccion-cuerpo-ecp">

				<div class="contenedor-fecha-ecp">

					<h3><i class=" icono-izquierda far fa-calendar-plus"></i>{{$evento->FInicio}}</h3>

					<h1>|</h1>

					<h3><i class="icono-izquierda far fa-calendar-minus"></i>{{$evento->FCierre}}</h3>
					
				</div>

				<div class="cuerpo-ecp">

					<div class="descripcion-ecp">

						<p>{{$evento->descripcion}}</p>
						
					</div>

					<div class="contenedor-enlaces">
					
						<a target="_blank" rel="" href="/isc-academicos-eventosVer/{{$evento->slug}}">{{$evento->documento}}</a>

					</div>

				</div>
				
			</div>

			<div class="seccion-continuacion">

				<a class="msj" mesanje="ver más noticias?" href="/isc-academicos-eventos"><button class="btn-leer"><span>Ver más eventos</span></button></a>

			</div>

			@endforeach

		</div>

<!------------------------------------------------------------- CONVOCATORIA ----------------------------------------------------------->


		<div class="contenedor-seccion-convocatorias">

			<h1>CONVOCATORIAS</h1>

			@foreach ($convocatorias as $convocatoria)

			<div class="contenedor-titulo-seccion-ecp">

				<h3><i class="icono-izquierda fas fa-file-invoice"></i>{{$convocatoria->convocatoria}}</h3>

			</div>

			<div class="contenedor-seccion-cuerpo-ecp">

				<div class="contenedor-fecha-ecp">

					<h3><i class=" icono-izquierda far fa-calendar-plus"></i>{{$convocatoria->FInicio}}</h3>
					<h1>|</h1>
					<h3><i class="icono-izquierda far fa-calendar-minus"></i>{{$convocatoria->FFin}}</h3>
					
				</div>

				<div class="cuerpo-ecp">

					<div class="descripcion-ecp">

						<p>{{$convocatoria->descripcion}}</p>
						
					</div>

					<div class="contenedor-enlaces">
					
						<a target="_blank" rel="" href="/isc-academicos-convocatoriasVer/{{$convocatoria->slug}}">{{$convocatoria->doc}}</a>

					</div>

					@php
					$var = $convocatoria->slug
					@endphp

				</div>
				
			</div>

			<div class="seccion-continuacion">

				<a class="msj" mesanje="ver más noticias?" href="/isc-academicos-convocatorias"><button class="btn-leer"><span>Ver más convocatorias</span></button></a>

			</div>
			

			@endforeach

		</div>


	</div>

<!------------------------------------------------------------- PROGRAMA ----------------------------------------------------------->

		<div class="contenedor-seccion-programas">

			<h1>PROGRAMAS</h1>


			@foreach ($programas as $programa)

				
			<div class="contenedor-titulo-seccion-ecp">

				<h3><i class="icono-izquierda fas fa-file-invoice"></i>{{$programa->programa}}</h3>

			</div>

			<div class="contenedor-seccion-cuerpo-ecp">

				<div class="contenedor-fecha-ecp">

					<h3><i class=" icono-izquierda far fa-calendar-plus"></i>{{$programa->FInicio}}</h3>
					<h1>|</h1>
					<h3><i class="icono-izquierda far fa-calendar-minus"></i>{{$programa->FFin}}</h3>
					
				</div>

				<div class="cuerpo-ecp">

					<div class="descripcion-ecp">

						<p>{{$programa->descripcion}}</p>
						
					</div>

					<div class="contenedor-enlaces">
					
						<a target="_blank" rel="" href="/isc-academicos-programasVer/{{$programa->slug}}">{{$programa->doc}}</a>

					</div>

						@php
						$var = $programa->slug
						@endphp

				</div>
				
			</div>

			<div class="seccion-continuacion">

				<a class="msj" mesanje="ver más noticias?" href="/isc-academicos-programas"><button class="btn-leer"><span>Ver más programas</span></button></a>

			</div>
			
			@endforeach

		</div>

	</div>

</div>

@endsection
