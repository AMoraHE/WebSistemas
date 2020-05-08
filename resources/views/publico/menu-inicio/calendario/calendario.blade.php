@extends('layouts.publico')

@section('title', 'Calendario')

@section('content')

  
  <div class="seccion-principal">

    <!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/Calendario.png">

            <div class="encabezado">

               <h1>Eventos Escolares</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>


    <!------------------------------------------------------------- CALENDARIO ----------------------------------------------------------->

    <div class="contenedor-secciones">

  		<div class="contenedor-titulo-seccion-mas">

  			<h3>Calendario Escolar</h3>

  		</div>

  		 <div class="contenedor-calendario">


  			<div id="CalendarioWeb"></div>


  		</div>

  	</div>

  </div>

  <!------------------------------------------------------------- FUNCION ----------------------------------------------------------->


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
              		$('#txtDescripcion').text(calEvent.descripcion);
              		$('#txtID').text(calEvent.id);
              		$('#txtTitulo').text(calEvent.title);
              		$('#txtColor').val(calEvent.color);

              		FechaHora= calEvent.start._i.split(" "); //Separamos Fecha de la Hora
              		$('#txtFechaInicio').text(FechaHora[0]); //Agarra el 0 Como Fecha
              		$('#txtHoraInicio').text(FechaHora[1]);  //Agarra el 1 Como Hora

              		FechaHora= calEvent.end._i.split(" ");
              		$('#txtFechaFinal').text(FechaHora[0]);
              		$('#txtHoraFinal').text(FechaHora[1]);


              		$("#ModalEventos").modal();

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
  								<h5 id="tituloEvento"></h5>
  								<span class="close" data-dismiss="modal">&times;</span>
  							</div>

  							<div class="modal-cuerpo">

                  <div class="contenedor-modal-dividido">

                  <!-- COLOR-->

                  <div class="s-color">


                    <input type="color" value="#ff0000" id="txtColor" class="form-control" disabled />


                    <div class="contenedor-fecha-cal">

                      <div class="FeCh">

                        <h3 id="txtFechaInicio"></h3>

                      </div>

                      <div class="FeCh">

                        <p id="txtHoraInicio"></p>

                      </div>

                    </div>
                    

                  </div>

                  <!-- INFO-->

                    
                    <div class="contenedor-modal-info">
                    
                    <p id="txtDescripcion"></p>
                      
                    </div>


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
