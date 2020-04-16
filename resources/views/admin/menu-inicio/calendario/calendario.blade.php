@extends('layouts.administrador')

@section('title', 'Calendario')

@section('content')


</script>
  	<div class="seccion-principal">

  		<div class="contenedor-titulo-seccion">

  			<h3>Calendario</h3>

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

              	dayClick:function(date,jsEvent,view){

              		$('#btnAgregar').prop("disabled",false);
              		$('#btnModificar').prop("disabled",true);
              		$('#btnEliminar').prop("disabled",true);

              		limpiarFormulario();
              		$('#txtFechaInicio').val(date.format());
              		$('#txtFechaFinal').val(date.format());
              		$("#ModalEventos").modal();
              	},

              	/****Evento de la BD - Conexion**********/

  	            events:'/calendarioeventos',

  	            /**** FIN Evento de la BD - Conexion**********/



              	eventClick:function(calEvent,jsEvent,view){

              		$('#btnAgregar').prop("disabled",true);
              		$('#btnModificar').prop("disabled",false);
              		$('#btnEliminar').prop("disabled",false);

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
                  EnviarInformacion('modificar',NuevoEvento, true);


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
  										<input type="text" id="txtTitulo" class="form-control" placeholder="Titulo del Evento" required>
  									</div>

    <!-- Apartado Dividido-->

                  <div class="contenedor-formulario-dividido">

                    <div class="columna-de-dos">

    									<div class="formulario">
    										<label>Fecha Inicio:</label>
    										<input  class="fecha" id="txtFechaInicio" name="txtFechaInicio" readonly/>
    									</div>

                    </div>

                    <div class="columna-de-dos">

    									<div class="formulario">
    										<label>Hora Incio:</label>
    										<input class="hora" id="txtHoraInicio" value="08:30" required />
    									</div>

                    </div>

                  </div>

    <!-- Apartado Dividido-->

                  <div class="contenedor-formulario-dividido">

                    <div class="columna-de-dos">

    									<div class="formulario">
    										<label>Fecha Final:</label>
    										<input class="fecha" id="txtFechaFinal" name="texFechaFinal" required/>
    									</div>

                    </div>

                    <div class="columna-de-dos">

    									<div class="formulario">
    										<label>Hora Final:</label>
    										<input class="hora" id="txtHoraFinal" value="12:30" required />
    									</div>

                    </div>

                  </div>

    <!-- FIN Apartado Dividido-->

  								<div class="formulario">

  									<label>Descripción:</label>
  									<textarea id="txtDescripcion" rows="3" class="form-control" required></textarea>

  								</div>

  								<div class="formulario">

  									<label>Color:</label>
  									<input type="color" value="#ff0000" id="txtColor" class="form-control" style="height:36px" required>

  								</div>

  							</div>

  							<div class="modal-pie">

  								<div class="contenedor-botones-modal">

  								    <button type="button" id="btnAgregar" class="btn-modal agregar"><span>Agregar</span></button>
  	        					<button type="button" id="btnModificar" class="btn-modal editar"><span>Modificar</span></button>
  						        <button type="button" id="btnEliminar" class="btn-modal eliminar"><span>Borrar</span></button>
  						        <button type="button" class="btn-modal cancelar" data-dismiss="modal"><span>Cancelar</span></button>

  						    </div>

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
              $('#txtHoraInicio').val('08:30');
              $('#txtHoraFinal').val('12:30');
  		}

  	</script>

  <!----------------------------------------------------------------- SCRIPT DE FECHA ---------------------------------------------------------->

    <script>
  
      $('.fecha').flatpickr({
        locale: {
              firstDayOfWeek: 1,
              weekdays: {
                shorthand: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                longhand: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],         
              }, 
              months: {
                shorthand: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Оct', 'Nov', 'Dic'],
                longhand: ['Enero', 'Febreo', 'Мarzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
              },
          },

      });

    </script>

    <script>
  
      $('.hora').flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
      });

    </script>


@endsection
