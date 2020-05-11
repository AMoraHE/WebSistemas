@extends('layouts.publico')

@section('title', 'Conocenos')

@section('content')

<!----------------------------------------------------------------- MVO ---------------------------------------------------------->


<div class="seccion-principal">

	<div class="contenedor-img-parallax">

	    <div class="img-parallax">
	     <div class="parallax">
	       <h1>CONOCENOS</h1>
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
								<p>{{$informacion->categoria}}</p>			
							
							<div class="info-mvo-con">
										<p>{{$informacion->descripcion}}</p>
							</div>

							</div>
							

						</div>
				
				
			@endif	

			@if($informacion->categoria == 'Visión')
				

						<div class="contenedor-mvo-subapartado-con">

							<div class="contenedor-titulo-mvo-con2">
								<p>{{$informacion->categoria}}</p>			
							
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

		</div>

</div>
<div class="separador2"></div>
</div>

<!----------------------------------------------------------------- TABLA LINEAS INVESTIGACIÓN---------------------------------------->
<div class="contenedor-lineas-cuerpos-reticula">

<div class="contenedor-lineas-cuerpos">
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

		</div>
	</div>


	<!----------------------------------------------------------------- CUERPO ACADÉMICO  ---------------------------------------------------------->

	<div class="contenedor-titulo-seccion-con">

		<h3>Cuerpos Académicos</h3>

	</div>


<!----------------------------------------------------------------- TABLA - CUERPO ACADÉMICO  ---------------------------------------------------------->
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

			</div>
		</div>

</div>
		<!-------------------------------------------------------------- RETICULA ---------------------------------------------------------->


	<div class="contenedor-texto-completo-acordeon-con">
	<div class="contenedor-acordeon-con">
	@foreach ($reticulas as $reticula)

	<div class="contenedor-acordeon-subapartado-con">
				<div class="contenedor-titulo-acordeon-con">

				<p>{{$reticula->titulo}}<i class="icono-derecha fas fa-plus"></i></p>

				</div>

	</div>

	@endforeach
	</div>
	</div>
</div>
<!-------------------------------------------------------------- organigrama ---------------------------------------------------------->
		<div class="contenedor-titulo-seccion">

		    <h3>Organigrama</h3>
		  </div>

</div>
@endsection



