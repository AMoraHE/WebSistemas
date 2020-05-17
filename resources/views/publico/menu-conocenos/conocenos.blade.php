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

               <h1>Conócenos</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>
		
	<div class="fondo-mvo-con">

		<div class="contenedor-mvo-con">
			@foreach($informaciones as $informacion)

				
			@if($informacion->categoria == 'Misión')
				

						 <div class="contenedor-mvo-subapartado-con">

							<div class="contenedor-titulo-mvo-con">
								<a href="/isc-conocenos-MVO" class="titulo-con">
								<p>{{$informacion->categoria}}</p>			
								</a>
							<div class="info-mvo-con">
										<p>{{$informacion->descripcion}}</p>
							</div>

							</div>
							

						</div>
				
				
			@endif	

			@if($informacion->categoria == 'Visión')
				

						<div class="contenedor-mvo-subapartado-con">

							<div class="contenedor-titulo-mvo-con2">
								<a href="/isc-conocenos-MVO" class="titulo-con">
								<p>{{$informacion->categoria}}</p>			
								</a>
							<div class="info-mvo-con">
										<p>{{$informacion->descripcion}}</p>
							</div>

							</div>

						</div>
				
			
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

			<a href="/isc-conocenos-perfil_campo_ISC" class="contenedor-titulo-perfil-con">

				<p>Perfil Ingreso</p>

			</a>

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

			<a href="/isc-conocenos-perfil_campo_ISC" class="contenedor-titulo-perfil-con2">

				<p>Perfil Egreso</p>

			</a>

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

			<a href="/isc-conocenos-perfil_campo_ISC" class="contenedor-titulo-campo-con">

				<p>Campo Laboral</p>

			</a>

			<div class="contenedor-perfil-con">

				<ol class="round">

				@foreach ($campolaboral as $campolabora)

						<li><i class="viñeta">{{$campolabora->vineta}}</i> <p>{{$campolabora->elemento}}</p></li>
						
				@endforeach

				</ol>

			</div>
		</div>

</div>

<div class="separador2"></div>
</div>

<!----------------------------------------------------------------- TABLA LINEAS INVESTIGACIÓN---------------------------------------->
<div class="contenedor-lineas-cuerpos-reticula">

<div class="contenedor-lineas-cuerpos">

	<div class="contenedor-lineas-cuerpos-ind">

	<a href="/isc-conocenos-lineasInv_cuerposAcad" class="contenedor-titulo-seccion-con">

		<p>Líneas de Investigación</p>

	</a>

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
				
		</div>
	</div>
	</div>

	<!----------------------------------------------------------------- CUERPO ACADÉMICO -------------------------------------------------->
	<div class="contenedor-lineas-cuerpos-ind">
	<a href="/isc-conocenos-lineasInv_cuerposAcad" class="contenedor-titulo-seccion-con">

		<p>Cuerpos Académicos</p>

	</a>

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
								@foreach (explode(',', $cuerpo->integrantes) as $integrantes)
								<li>{{$integrantes}}</li>
								@endforeach
							</ol>
						</td>

					</tr>

					@endforeach

				</table>		
		
			</div>
		</div>

</div>
</div>
		<!-------------------------------------------------------------- RETICULA ---------------------------------------------------------->


	<div class="contenedor-texto-completo-acordeon-con">
	<div class="contenedor-acordeon-con">
	@foreach ($reticulas as $reticula)

	<div class="contenedor-acordeon-subapartado-con">
				<a href="/isc-conocenos-reticula" class="contenedor-titulo-acordeon-con">

				<p>{{$reticula->titulo}}</p>

				</a>

				<div class="info-acordeon-con">

			<p>{{$reticula->programa}}</p>
			<p>PLAN: {{$reticula->plan}}</p>
			<p>ESPECIALIDAD: {{$reticula->especialidad}}</p>	

	<div class="contenedor-enlaces-con">
			
		<a target="_blank" rel="noopener noreferrer" href="/isc-conocenos-reticulaVer/{{$reticula->slug}}">{{$reticula->documento}}</a>

	</div>

	</div>

	</div>

	@endforeach
	</div>
	</div>

<!-------------------------------------------------------------- organigrama ---------------------------------------------------------->
	<div class="contenedor-texto-completo-org-con">
		<div class="contenedor-org-con">

		<div class="contenedor-org-subapartado-con">

					<a href="/isc-conocenos-organigrama" class="contenedor-titulo-org-con">

					<p>Organigrama</p>

					</a>

					<div class="info-org-con">

						<img class="imagen-ingre-egre" src="{{ asset('img/org2.jpg')}}">
		
		</div>

		</div>

		</div>
	</div>

</div>




</div>

@endsection



