@extends('layouts.publico')

@section('title', 'Conócenos')

@section('content')

<!----------------------------------------------------------------- MVO ---------------------------------------------------------->


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

    <!------------------------------------------------------------- CONOCENOS ----------------------------------------------------------->
		
	<div class="contenedor-secciones">
		
			
			<div class="contenedor-seccion-titulos-grande">
		 		<h1>INFORMACIÓN DE LA CARRERA</h1>
			</div>

			
			<div class="contenedor-seccion-mov-cuerpo-dividido">
					
				@foreach($informaciones as $informacion)

					
				@if($informacion->categoria == 'Misión')
					

					<div class="contenedor-mvo-subapartado-con">

						<div class="contenedor-titulo-mvo-con">

							<a href="/isc-conocenos-MVO"><h3>{{$informacion->categoria}}</h3></a>

						</div>

						<div class="info-mvo-con">
								
							<p>{!! $informacion->descripcion !!}</p>
								
						</div>
								

					</div>
					
					
				@endif	

				@if($informacion->categoria == 'Visión')
					

					<div class="contenedor-mvo-subapartado-con">

						<div class="contenedor-titulo-mvo-con">

							<a href="/isc-conocenos-MVO"><h3>{{$informacion->categoria}}</h3></a>

						</div>

						<div class="info-mvo-con">

							{!! $informacion->descripcion !!}

						</div>


					</div>
					
				
				@endif

			
				@endforeach

			</div>

	</div>



<!-------------------------------------------------------------  PERFIL INGRESO ------------------------------------------------------->

<div class="separador"></div>

<div class="contenedor-secciones-mov">

	<div class="contenedor-secciones">

				<div class="contenedor-seccion-titulos-grande">

					 <h1>PERFIL DE LA CARRERA</h1>

				</div>

				<div class="contenedor-seccion-mov-cuerpo-dividido">
					
										

					<div class="contenedor-mvo-subapartado-con">

						<div class="contenedor-titulo-mvo-con">

							<a href="/isc-conocenos-MVO"><h3>Perfil Ingreso</h3></a>

						</div>

						<div class="info-mvo-con">

							<ol class="round">
								

							@foreach ($perfilingreso as $perfilingres)

								<li><i class="viñeta">{{$perfilingres->vineta}}</i> <p>{!! $perfilingres->elemento !!}</p></li>

							@endforeach

							</ol>

								
						</div>
								

					</div>
					
					

					

					<div class="contenedor-mvo-subapartado-con">

						<div class="contenedor-titulo-mvo-con">

							<a href="/isc-conocenos-MVO"><h3>Perfil Egreso</h3></a>

						</div>

						<div class="info-mvo-con">

							<ol class="round">

							@foreach ($perfilegreso as $perfilegres)

								<li><i class="viñeta">{{$perfilingres->vineta}}</i> <p>{!! $perfilegres->elemento !!}</p></li>

							@endforeach

							</ol>

						</div>


					</div>
			
			</div>

		</div>

		<div class="separador-abajo"></div>

	</div>

<!----------------------------------------------------------------- TABLAS-------------------------------------------------->

<div class="contenedor-secciones">

	<div class="partido-li">
		
		<div class="seccion1-li">
				
			<div class="contenedor-lineas-cuerpos-ind">

				<div class="contenedor-titulo-mvo-con ti-padding">
						
					<a href="/isc-conocenos-lineasInv_cuerposAcad"><h3>Líneas de Investigación</h3></a>

				</div>

				<div class="contenedor-tabla">
							
					<div class="tabla-informacion-escolar t-con">
								
						<table>
										
							<thead>
								<tr>
									<th>Programa</th>
									<th>Líneas de Investigación</th>
								</tr>
							</thead>

							@foreach ($lineainvestigacion as $lineainvestigacio)

								<tr>
									<td>{{$lineainvestigacio->programa}}</td>
									<td>{{$lineainvestigacio->linea}}</td>
											
								</tr>

							@endforeach

						</table>	

					</div>

				</div>

			</div>

<!----------------------------------------------------------------- CUERPO ACADÉMICO -------------------------------------------------->
			<div class="contenedor-lineas-cuerpos-ind">

				<div class="contenedor-titulo-mvo-con ti-padding">
						
					<a href="/isc-conocenos-lineasInv_cuerposAcad"><h3>Cuerpos Académicos</h3></a>

				</div>
								
				<div class="contenedor-tabla">
					
					<div class="tabla-informacion-escolar t-con">
						
						<table>
							
							<thead>
								<tr>
									<th>Nombre del CA</th>
									<th>Grado del CA</th>
									<th>Integrantes</th>
								</tr>
							</thead>

							@foreach($cuerpos as $cuerpo)

							<tr>
								<td>{{$cuerpo->nombre}}</td>
								<td>{{$cuerpo->grado}}</td>
								<td>
										@foreach (explode(',', $cuerpo->integrantes) as $integrantes)

										@php
										$integrante = ltrim($integrantes);
										@endphp

										<p><i class="icono-izquierda far fa-user-circle"></i>{{$integrante}}</p>

										@endforeach
								</td>

							</tr>

							@endforeach

						</table>	

					</div>


				</div>

			</div>

			
		</div>

		<!-------------------------------------------------------------- RETICULA ---------------------------------------------------------->

		<div class="seccion2-li">
			
				
				<div class="contenedor-acordeon-con">
					
				@foreach ($reticulas as $reticula)

					<div class="contenedor-acordeon-subapartado-con">

						<div class="contenedor-titulo-mvo-con">
								
							<a href="/isc-conocenos-reticula"><h3>Retícula</h3></a>

						</div>
						
						<div class="info-acordeon-con">

							<p><b>{{$reticula->titulo}}</b></p>
							<p>{{$reticula->programa}}</p>
							<p><b>PLAN:</b> {{$reticula->plan}}</p>
							<p><b>ESPECIALIDAD:</b> {{$reticula->especialidad}}</p>

							<div class="border-abajo"></div>

							<div class="contenedor-enlaces">
								
								<a target="_blank" rel="noopener noreferrer" href="/isc-conocenos-reticulaVer/{{$reticula->slug}}">{{$reticula->documento}}</a>

							</div>

						</div>


					</div>

				@endforeach

				</div>


<!-------------------------------------------------------------- organigrama ---------------------------------------------------------->

			<div class="contenedor-texto-completo-org-con">
				
				<div class="contenedor-org-con">
					
					<div class="contenedor-org-subapartado-con">
						
						<div class="contenedor-titulo-mvo-con ti-padding">
										
							<a href="/isc-conocenos-organigrama"><h3>Organigrama</h3></a>

						</div>

						<div class="info-org-con">
							
							<img class="imagen-ingre-egre" src="{{ asset('img/org2.jpg')}}">

						</div>

					</div>

				</div>


			</div>

		</div>

	</div>
	
</div>





	
		
</div>

@endsection



