@extends('layouts.publico')

@section('title', 'Proyectos')

@section('content')

<!----------------------------------------------------------------- PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">

	<!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/Convocatorias.jpg">

            <div class="encabezado">

               <h1>Académicos</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>


	<!------------------------------------------------------------- PROYECTOS ----------------------------------------------------------->

	<strong>PROYECTOS</strong>

    <div class="contenedor-secciones">

	@foreach ($proyectos as $proyecto)

	<div class="contenedor-titulo-seccion">

			<h3>{{$proyecto->proyecto}}</h3>

	</div>

	<div class="contenedor-seccion-img-grande">

		<img src="/images/proyectos/{{$proyecto->newimage}}">
		<div class="skew-abajo"></div>

	</div>

	<div class="contenedor-seccion-cuerpo-dividido">

		<div class="contenedor-desarrolladores">

			<h3>Desarrolladores</h3>

			@foreach (explode(', ', $proyecto->desarrolladores) as $desarrolladores)
									
				<p><i class="icono-izquierda far fa-user-circle"></i>{{$desarrolladores}}</p>

			@endforeach

		</div>

		<div class="contenedor-descripcion-proyecto">

			<h3>Descripción</h3>

			<p>{{$proyecto->descripcion}}</p>

		</div>

		
	</div>
	
	<div class="seccion-divisor-seccion"></div>
	@endforeach

	</div>

	<strong>EVENTOS ACADÉMICOS</strong>

	<div class="contenedor-secciones">

		@foreach ($eventos as $evento)

		<div class="contenedor-titulo-seccion">

			<h3><i class="icono-izquierda fas fa-file-invoice"></i>{{$evento->titulo}}</h3>

		</div>

		<div class="contenedor-seccion-convocatoria">

			<div class="contenedor-fecha-conv">

				<div class="fecha-divi">

					<div class="fecha-conv">

						<p>Inicia</p>

						<div class="c-fecha fc-inicio">

							<p>{{$evento->FInicio}}</p>

						</div>
						
					</div>

				</div>

				<div class="fecha-divi">

					<div class="fecha-conv">

						<p>Termina</p>
						
						<div class="c-fecha fc-final">

							<p>{{$evento->FCierre}}</p>

						</div>

					</div>

				</div>
				
			</div>

			<div class="desc-conv">

				<div class="c-descripcion">

					<p>{{$evento->descripcion}}</p>
					
				</div>

				<div class="contenedor-enlaces">
				
					<a target="_blank" rel="" href="/isc-academicos-eventosVer/{{$evento->slug}}">{{$evento->documento}}</a>

				</div>

			</div>
			
		</div>

		<!---------------BOTONES convocatoria------------------------------------->

		<div class="contenedor-botones">

			<a href="/isc-academicos-eventosDescargar/{{$evento->slug}}"><button class="btn"><span>Descargar <i class="icono-derecha far fa-save"></i></span></button></a>

		</div>




		<div class="seccion-divisor-seccion"></div>		

		@endforeach

	</div>

	<strong>CONVOCATORIAS</strong>

	<div class="contenedor-secciones">

		@foreach ($convocatorias as $convocatoria)

		<div class="contenedor-titulo-seccion">

			<h3><i class="icono-izquierda fas fa-file-invoice"></i>{{$convocatoria->convocatoria}}</h3>

		</div>

		<div class="contenedor-seccion-convocatoria">

			<div class="contenedor-fecha-conv">

				<div class="fecha-divi">

					<div class="fecha-conv">

						<p>Inicia</p>

						<div class="c-fecha fc-inicio">

							<p>{{$convocatoria->FInicio}}</p>

						</div>
						
					</div>

				</div>

				<div class="fecha-divi">

					<div class="fecha-conv">

						<p>Termina</p>
						
						<div class="c-fecha fc-final">

							<p>{{$convocatoria->FFin}}</p>

						</div>

					</div>

				</div>
				
			</div>

			<div class="desc-conv">

				<div class="c-descripcion">

					<p>{{$convocatoria->descripcion}}</p>
					
				</div>

				<div class="contenedor-enlaces">
				
					<a target="_blank" rel="noopener noreferrer" href="/isc-academicos-convocatoriasVer/{{$convocatoria->slug}}">{{$convocatoria->doc}}</a>

				</div>

				@php
				$var = $convocatoria->slug
				@endphp
				
			</div>
			
		</div>

		<!---------------BOTONES convocatoria------------------------------------->

		<div class="contenedor-botones">

			<a href="/isc-academicos-convocatoriasDescargar/{{$convocatoria->slug}}"><button class="btn"><span>Descargar <i class="icono-derecha far fa-save"></i></span></button></a>

		</div>




		<div class="seccion-divisor-seccion"></div>

		

		@endforeach

	</div>

	<strong>PROGRAMAS</strong>

	<div class="contenedor-secciones">

		@foreach ($programas as $programa)

			<div class="contenedor-titulo-seccion">

				<h3><i class="icono-izquierda fas fa-file-invoice"></i>{{$programa->programa}}</h3>

			</div>

			<div class="contenedor-seccion-convocatoria">

				<div class="contenedor-fecha-conv">

					<div class="fecha-divi">

						<div class="fecha-conv">

							<p>Inicia</p>

							<div class="c-fecha fc-inicio">

								<p>{{$programa->FInicio}}</p>

							</div>
							
						</div>

					</div>

					<div class="fecha-divi">

						<div class="fecha-conv">

							<p>Termina</p>
							
							<div class="c-fecha fc-final">

								<p>{{$programa->FFin}}</p>

							</div>

						</div>

					</div>
					
				</div>

				<div class="desc-conv">

					<div class="c-descripcion">

						<p>{{$programa->descripcion}}</p>
						
					</div>

					<div class="contenedor-enlaces">
					
						<a target="_blank" rel="noopener noreferrer" href="/isc-academicos-programasVer/{{$programa->slug}}">{{$programa->doc}}</a>

					</div>

					@php
					$var = $programa->slug
					@endphp
							
				</div>
				
			</div>

			<!---------------BOTONES convocatoria------------------------------------->

			<div class="contenedor-botones">

				<a href="/isc-academicos-programasDescargar/{{$programa->slug}}"><button class="btn"><span>Descargar <i class="icono-derecha far fa-save"></i></span></button></a>

			</div>




			<div class="seccion-divisor-seccion"></div>

		
		@endforeach

	</div>

</div>

@endsection
