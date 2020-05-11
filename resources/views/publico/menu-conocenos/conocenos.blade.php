@extends('layouts.publico')

@section('title', 'Conocenos')

@section('content')

<!----------------------------------------------------------------- MVO ---------------------------------------------------------->


<div class="seccion-principal">

    <!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/Conocenos.jpg">

            <div class="encabezado">

               <h1>Conocenos</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>
		
	<div class="fondo-mvo-con">

		<div class="contenedor-mvo-con">
			@foreach($informaciones as $informacion)

				
			@if($informacion->categoria == 'Misión')
				

						<a href="/isc-conocenos-MVO" class="contenedor-mvo-subapartado-con">

							<div class="contenedor-titulo-mvo-con">
								<p>{{$informacion->categoria}}</p>			
							
							<div class="info-mvo-con">
										<p>{{$informacion->descripcion}}</p>
							</div>

							</div>
							

						</a>
				
				
			@endif	

			@if($informacion->categoria == 'Visión')
				

						<a href="/isc-conocenos-MVO" class="contenedor-mvo-subapartado-con">

							<div class="contenedor-titulo-mvo-con2">
								<p>{{$informacion->categoria}}</p>			
							
							<div class="info-mvo-con">
										<p>{{$informacion->descripcion}}</p>
							</div>

							</div>

						</a>
				
			
			@endif	

			

			@endforeach

		</div>
	</div>

		

		<!----------------------------------------------------------------- CUERPO PERFIL-CAMPO_ISC --------------------------------->

<!-------------------------------------------------------------  PERFIL INGRESO ------------------------------------------------------->

<div class="separador"></div>
<div class="contenedor-perfil-campo-con">

	<div class="contenedor-componentes-info-carrera-ingreso-con">

		<div class="contenedor-apartado-con">

			<div class="contenedor-titulo-perfil-con">

				<img class="imagen-ingre-egre-con" src="{{ asset('img/ingreso1.png')}}">

			</div>

			<div class="contenedor-perfil-con">

				<ol class="round">

				@foreach ($perfilingreso as $perfilingres)

					<li><i class="viñeta">{{$perfilingres->vineta}}</i> <p>{{$perfilingres->elemento}}</p></li>

				@endforeach

				</ol>

			</div>

		</div>


	</div>


<!----------------------------------------------------------------- PERFIL EGRESO---------------------------------------------------------->

<div class="contenedor-componentes-info-carrera-egreso-con">

		<div class="contenedor-apartado-con">

			<div class="contenedor-titulo-perfil-con2">

				<img class="imagen-ingre-egre-con" src="{{ asset('img/egreso1.png')}}">

			</div>

			<div class="contenedor-perfil-con">
				
				<ol class="round">

				@foreach ($perfilegreso as $perfilegres)
				

					<li><i class="viñeta">{{$perfilegres->vineta}}</i> <p>{{$perfilegres->elemento}}</p></li>
					  
				
				@endforeach

			</ol>

			</div>
					

		</div>

</div>


<!----------------------------------------------------------------- CAMPO LABORAL---------------------------------------------------------->

<div class="contenedor-componentes-info-carrera">

	

		<div class="contenedor-apartado-campo">

			<div class="contenedor-titulo-campo-con">

				<img class="imagen-ingre-egre-con1" src="{{ asset('img/laboral.png')}}">

			</div>

			<div class="contenedor-perfil-con">

				<ol class="round">

				@foreach ($campolaboral as $campolabora)

						<li><i class="viñeta">{{$campolabora->vineta}}</i> <p>{{$campolabora->elemento}}</p></li>
						
				@endforeach

				</ol>

			</div>
<div class="contenedor-botones">
			
		<a href="/isc-conocenos-perfil_campo_ISC"><button class="btn"><span>Ver más</span></button></a>

	</div>
		</div>

</div>

<div class="separador2"></div>
</div>

<!----------------------------------------------------------------- TABLA LINEAS INVESTIGACIÓN---------------------------------------->
<div class="contenedor-lineas-cuerpos-reticula">

<div class="contenedor-lineas-cuerpos">

	<div class="contenedor-lineas-cuerpos-ind">

	<div class="contenedor-titulo-seccion-con">

		<h3>Líneas de Investigación</h3>

	</div>

	<div class="contenedor-tabla">

		<div class="tabla-informacion-escolar-con">

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
				<div class="contenedor-botones">
			
		<a href="/isc-conocenos-lineasInvestigacion"><button class="btn"><span>Ver más</span></button></a>

	</div>
		</div>
	</div>
	</div>

	<!----------------------------------------------------------------- CUERPO ACADÉMICO -------------------------------------------------->
	<div class="contenedor-lineas-cuerpos-ind">
	<div class="contenedor-titulo-seccion-con">

		<h3>Cuerpos Académicos</h3>

	</div>

		<div class="contenedor-tabla">
			<div class="tabla-informacion-escolar-con">

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
							<ol>
								@foreach (explode(', ', $cuerpo->integrantes) as $integrantes)
								<li>{{$integrantes}}</li>
								@endforeach
							</ol>
						</td>

					</tr>

					@endforeach

				</table>		
		<div class="contenedor-botones">
			
		<a href="/isc-conocenos-cuerposAcademicos"><button class="btn"><span>Ver más</span></button></a>

		</div>
			</div>
		</div>

</div>
</div>
		<!-------------------------------------------------------------- RETICULA ---------------------------------------------------------->


	<div class="contenedor-texto-completo-acordeon-con">
	<div class="contenedor-acordeon-con">
	@foreach ($reticulas as $reticula)

	<div class="contenedor-acordeon-subapartado-con">
				<div class="contenedor-titulo-acordeon-con">

				<p>{{$reticula->titulo}}</p>

				</div>

				<div class="info-acordeon-con">

			<p>{{$reticula->programa}}</p>
			<p>PLAN: {{$reticula->plan}}</p>
			<p>ESPECIALIDAD: {{$reticula->especialidad}}</p>	

	<div class="contenedor-enlaces">
			
		<a target="_blank" rel="noopener noreferrer" href="/isc-conocenos-reticulaVer/{{$reticula->slug}}">{{$reticula->documento}}</a>

	</div>

	<div class="contenedor-botones">
			
		<a href="/isc-conocenos-reticula"><button class="btn"><span>Ver más</span></button></a>

	</div>
	</div>

	</div>

	@endforeach
	</div>
	</div>

<!-------------------------------------------------------------- organigrama ---------------------------------------------------------->
	<a href="/isc-conocenos-organigrama" class="contenedor-texto-completo-org-con">
		<div class="contenedor-org-con">

		<div class="contenedor-org-subapartado-con">

					<div class="contenedor-titulo-org-con">

					<p>Organigrama</p>

					</div>

					<div class="info-org-con">

						<img class="imagen-ingre-egre" src="{{ asset('img/org2.jpg')}}">
		
		</div>

		</div>

		</div>
	</a>

</div>




</div>

@endsection



