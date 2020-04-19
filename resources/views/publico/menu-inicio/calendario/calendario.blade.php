@extends('layouts.publico')

@section('title', 'Calendario')

@section('content')


</script>
  	<div class="seccion-principal">

  		<div class="contenedor-titulo-seccion">
        <div class="tlinea"></div>

  			<h3>Calendario</h3>

        <div class="tlinea"></div>

  		</div>

  		 <div class="contenedor-calendario">


  			<div id="CalendarioWeb"></div>


  		</div>

  	</div>

  	<script>

      	$(document).ready(function(){
              $('#CalendarioWeb').fullCalendar({
              	header:{
              		left:'today,prev,next',
              		center:'title',
              		right:'month,basicWeek,basicDay, agendaWeek,agendaDay'
              	},

              	/****Evento de la BD - Conexion**********/

  	            events:'/isc-inicio-calendarioEventos',

  	            /**** FIN Evento de la BD - Conexion**********/



              	eventClick:function(calEvent,jsEvent,view){

              		//H5 Titulo
              		$('#tituloEvento').html(calEvent.title);
              		//Mostrar la información del evento en los inputs
              		$('#txtDescripcion').val(calEvent.descripcion);
              		$('#txtID').val(calEvent.id);
              		$('#txtTitulo').val(calEvent.title);
              		$('#txtColor').val(calEvent.color);

              		FechaHora= calEvent.start._i.split(" "); //Separamos Fecha de la Hora
              		$('#txtFechaInicio').val(FechaHora[0]); //Agarra el 0 Como Fecha
              		$('#txtHoraInicio').val(FechaHora[1]);  //Agarra el 1 Como Hora

              		FechaHora= calEvent.end._i.split(" ");
              		$('#txtFechaFinal').val(FechaHora[0]);
              		$('#txtHoraFinal').val(FechaHora[1]);


              		$("#ModalEventos").modal();

              	},

              	editable:true,
              	eventDrop:function(calEvent){
              		$('#txtID').val(calEvent.id);
              		$('#txtTitulo').val(calEvent.title);
              		$('#txtColor').val(calEvent.color);
              		$('#txtDescripcion').val(calEvent.descripcion);

              		var fechaHora=calEvent.start.format().split("T");
              		$('#txtFechaInicio').val(fechaHora[0]);
              		$('#txtHoraIncio').val(fechaHora[1]);

              		var fechaHora=calEvent.end.format().split("T");
              		$('#txtFechaFinal').val(fechaHora[0]);
              		$('#txtHoraFinal').val(fechaHora[1]);

              		RecolectarDatosGUI();
                  EnviarInformacion('modificar',NuevoEvento,true);


              	}

              });
      	});
  	</script>

  	<!-- Modal Modificar , Agregar, Eliminar-->

  		  <div id="ModalEventos" class="modal">
  					<div class="flex" id="flex">
  						<div class="contenido-modal">

  							<form class="form-horizontal" method="POST" action="addEvent.php">

  							<div class="modal-encabezado">
  								<h5 id="tituloEvento">Agregar Evento</h5>
  								<span class="close" data-dismiss="modal">&times;</span>
  							</div>

  							<div class="modal-cuerpo">

  								<input type="hidden" id="txtID" name="txtID">

  									<div class="formulario">
  										<label>Titulo:</label>
  										<input type="text" id="txtTitulo" class="form-control" placeholder="Titulo del Evento" readonly>
  									</div>

    <!-- Apartado Dividido-->

                  <div class="contenedor-formulario-dividido">

                    <div class="columna-de-dos">

    									<div class="formulario">
    										<label>Fecha Inicio:</label>
    										<input  type="date" id="txtFechaInicio" class="form-control" name="txtFechaInicio" readonly/>
    									</div>

                    </div>

                    <div class="columna-de-dos">

    									<div class="formulario">
    										<label>Hora Incio:</label>
    										<input type="time" id="txtHoraInicio" value="08:30" class="form-control" readonly />
    									</div>

                    </div>

                  </div>

    <!-- Apartado Dividido-->

                  <div class="contenedor-formulario-dividido">

                    <div class="columna-de-dos">

    									<div class="formulario">
    										<label>Fecha Final:</label>
    										<input type="date" id="txtFechaFinal" class="form-control" name="texFechaFinal" readonly>
    									</div>

                    </div>

                    <div class="columna-de-dos">

    									<div class="formulario">
    										<label>Hora Final:</label>
    										<input type="time" id="txtHoraFinal" value="12:30" class="form-control" readonly />
    									</div>

                    </div>

                  </div>

    <!-- FIN Apartado Dividido-->

  								<div class="formulario">

  									<label>Descripción:</label>
  									<textarea id="txtDescripcion" rows="3" class="form-control" readonly></textarea>

  								</div>

  								<div class="formulario">

  									<label>Color:</label>
  									<input type="color" value="#ff0000" id="txtColor" class="form-control" style="height:36px" readonly>

  								</div>

  							</div>

  							<div class="modal-pie">

  							</div>

  							</form>

  						</div>

  					</div>

  			</div>





  	<script>

  	var NuevoEvento;

  		$('#btnAgregar').click(function(){
  			RecolectarDatosGUI();
  			EnviarInformacion('agregar',NuevoEvento);
  		});

  		$('#btnEliminar').click(function(){
  			RecolectarDatosGUI();
  			EnviarInformacion('eliminar',NuevoEvento);
  		});


  		$('#btnModificar').click(function(){
  			RecolectarDatosGUI();
  			EnviarInformacion('modificar',NuevoEvento);
  		});

  		function RecolectarDatosGUI(){

  			NuevoEvento= {
  				id:$('#txtID').val(),
  				title:$('#txtTitulo').val(),
  				start:$('#txtFechaInicio').val()+" "+$('#txtHoraInicio').val(),
  				color:$('#txtColor').val(),
  				descripcion:$('#txtDescripcion').val(),
  				textColor:"#FFFFFF",
          _token:"{{csrf_token()}}",
  				end:$('#txtFechaFinal').val()+" "+$('#txtHoraFinal').val()

  			};

  		}

  		function EnviarInformacion(accion,objEvento,modal){
  			$.ajax({
  				type:'POST',
  				url:'calendario'+accion,
  				data:objEvento,
  				success:function(msg){

  					if(msg){
  						$('#CalendarioWeb').fullCalendar('refetchEvents');
  						if(!modal){
  							$("#ModalEventos").modal('toggle');
  						}


  					}

  				},

  				error:function(){
  					alert("Hay un error ..");
  				}

  			});
  		}


  		function limpiarFormulario(){

  			$('#txtID').val('');
              $('#txtTitulo').val('');
              $('#txtColor').val('');
              $('#txtDescripcion').val('');
              $('#tituloEvento').html('Agregar Evento');
  		}

  	</script>


@endsection
