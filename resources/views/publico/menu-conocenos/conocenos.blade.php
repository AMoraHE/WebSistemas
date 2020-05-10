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

	@endforeach

		</div>

		

		<!----------------------------------------------------------------- CUERPO PERFIL-CAMPO_ISC --------------------------------->

<!-------------------------------------------------------------  PERFIL INGRESO ------------------------------------------------------->


<div class="contenedor-perfil-campo">

	<div class="contenedor-componentes-info-carrera-ingreso">

		

		<div class="contenedor-apartado">
			

			<div class="contenedor-perfil">

				<ol class="round">

				@foreach ($perfilingreso as $perfilingres)

					<li><i class="viñeta">{{$perfilingres->vineta}}</i> <p>{{$perfilingres->elemento}}</p></li>
				

				@endforeach

				</ol>

			</div>

			<div class="contenedor-titulo-perfil">

				<img class="imagen-ingre-egre" src="{{ asset('img/ingreso1.png')}}">

			</div>

		</div>


	</div>


<!----------------------------------------------------------------- PERFIL EGRESO---------------------------------------------------------->

<div class="contenedor-componentes-info-carrera-egreso">

	

		<div class="contenedor-apartado">
			<div class="contenedor-titulo-perfil">

				<img class="imagen-ingre-egre" src="{{ asset('img/egreso1.png')}}">

			</div>

			<div class="contenedor-perfil">
				
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
			<div class="contenedor-titulo-campo">

				<h3>Campo Laboral</h3>

			</div>

			<div class="contenedor-perfil">

				<ol class="round">

				@foreach ($campolaboral as $campolabora)

						<li><i class="viñeta">{{$campolabora->vineta}}</i> <p>{{$campolabora->elemento}}</p></li>
						
				@endforeach

				</ol>

			</div>

		</div>

</div>
</div>

<!----------------------------------------------------------------- TABLA LINEAS INVESTIGACIÓN---------------------------------------->

	<div class="contenedor-titulo-seccion">

		<div class="tlinea"></div>

		<h3>Líneas de Investigación</h3>

		<div class="tlinea"></div>

	</div>

	<div class="contenedor-tabla">

		<div class="tabla-informacion-escolar">

				<table>
									
					<thead>
						<tr>
							<th>Programa</th>
							<th>Líneas de Investigación</th>
							<th>CLave LI TECNM</th>
						</tr>
					</thead>

					@foreach ($lineainvestigacion as $lineainvestigacio)

						<tr>
							<td>{{$lineainvestigacio->programa}}</td>
							<td>{{$lineainvestigacio->linea}}</td>
							<td>{{$lineainvestigacio->clave}}</td>
							
						</tr>

					@endforeach

				</table>		

		</div>
	</div>


	<!----------------------------------------------------------------- CUERPO ACADÉMICO  ---------------------------------------------------------->

	<div class="contenedor-titulo-seccion">

		<div class="tlinea"></div>

		<h3>Cuerpos Académicos</h3>

		<div class="tlinea"></div>

	</div>


<!----------------------------------------------------------------- TABLA - CUERPO ACADÉMICO  ---------------------------------------------------------->
		<div class="contenedor-tabla">
			<div class="tabla-informacion-escolar">

				<table>
							
					<thead>
						<tr>
							<th>Nombre del CA</th>
							<th>Grado del CA</th>
							<th>ID CA</th>
							<th>Clave CA</th>
							<th>Integrantes</th>
						</tr>
					</thead>

					@foreach($cuerpos as $cuerpo)

					<tr>
						<td>{{$cuerpo->nombre}}</td>
						<td>{{$cuerpo->grado}}</td>
						<td>{{$cuerpo->idCA}}</td>
						<td>{{$cuerpo->clave}}</td>
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


		<!-------------------------------------------------------------- RETICULA ---------------------------------------------------------->


<div class="contenedor-componentes-principales">

	<div class="contenedor-texto-completo-acordeon">
	<div class="contenedor-acordeon">
	@foreach ($reticulas as $reticula)

	<div class="contenedor-acordeon-subapartado">
				<div class="contenedor-titulo-acordeon">

				<p>{{$reticula->titulo}}<i class="icono-derecha fas fa-plus"></i></p>

				</div>

	</div>

	@endforeach
	</div>
	</div>
</div>
<!-------------------------------------------------------------- organigrama ---------------------------------------------------------->
		<div class="contenedor-titulo-seccion">

		    <div class="tlinea"></div>

		    <h3>Organigrama</h3>

		    <div class="tlinea"></div>

		  </div>

</div>
@endsection



