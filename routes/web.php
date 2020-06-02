<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin-header/{slug}/edit', 'headerController@edit')->middleware('auth');
Route::get('/admin-header-sub/{slug}/edit', 'subHeaderController@edit')->middleware('auth');

//TEMP ROUTES

Route::get('/admin-header', 'PublicController@header');
Route::get('/admin-header-edit', 'PublicController@headerEdit');
Route::get('/admin-footer', 'PublicController@footer');
Route::get('/admin-footer-edit', 'PublicController@footerEdit');

//END TEMP ROUTES

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('Perfil-Usuario', 'UserController@index')->name('perfil-usuario')->middleware('auth');

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit'])->middleware('auth');

Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update'])->middleware('auth');

//RUTAS PÚBLICAS - SEGUIR NOMENCLATURA DE ACUERDO A LA SECCIÓN
Route::get('/', 'PublicController@inicio')->name('ISC-INICIO');
Route::get('/isc-inicio-noticias', 'PublicController@noticias');
Route::get('/isc-inicio-noticiasVerInd/{id}', 'PublicController@noticiasVerInd');
Route::get('/isc-inicio-buscadorNoticias', 'PublicController@buscadorNoticias');
Route::get('/isc-inicio-calendario', 'PublicController@calendario');
Route::get('/isc-inicio-calendarioEventos', 'PublicController@calendarioEventos');
Route::get('/isc-conocenos', 'PublicController@conocenos');
Route::get('/isc-conocenos-MVO', 'PublicController@MVO');
Route::get('/isc-conocenos-perfil_campo_ISC', 'PublicController@PerfilCampoISC');
Route::get('/isc-conocenos-reticula', 'PublicController@reticula');
Route::get('/isc-conocenos-reticulaVer/{slug}', 'PublicController@reticulaVer');
Route::get('/isc-conocenos-reticulaDescargar/{slug}', 'PublicController@reticulaDescargar');
Route::get('/isc-conocenos-lineasInv_cuerposAcad', 'PublicController@lineasCuerpos');
//Route::get('/isc-conocenos-lineasInvestigacion', 'PublicController@LineasInvestigacion');
//Route::get('/isc-conocenos-cuerposAcademicos', 'PublicController@cuerposAcademicos');
Route::get('/isc-conocenos-organigrama', 'PublicController@organigrama');
Route::get('/isc-infraestructura', 'PublicController@infraestructura');
Route::get('/isc-infraestructura-labCisco', 'PublicController@labCisco');
Route::get('/isc-infraestructura-labSistemas', 'PublicController@labSistemas');
Route::get('/isc-infraestructura-labMicroprocesadores', 'PublicController@labMicroprocesadores');
Route::get('/isc-infraestructura-labCelula', 'PublicController@labCelula');
Route::get('/isc-infraestructura-labVerImg/{id}', 'PublicController@labVerImg');
Route::get('/isc-infraestructura-labGaleriaVerImg/{id}', 'PublicController@labGaleriaVerImg');
Route::get('/isc-academicos', 'PublicController@academicos');
Route::get('/isc-academicos-proyectos', 'PublicController@proyectos');
Route::get('/isc-academicos-eventos', 'PublicController@eventos');
Route::get('/isc-academicos-convocatorias', 'PublicController@convocatorias');
Route::get('/isc-academicos-programas', 'PublicController@programas');
Route::get('/isc-academicos-proyectosVerImg/{id}', 'PublicController@proyectosVerImg');
Route::get('/isc-academicos-proyectosGaleriaVerImg/{id}', 'PublicController@proyectosGaleriaVerImg');
Route::get('/isc-academicos-eventosVer/{slug}', 'PublicController@eventosVer');
Route::get('/isc-academicos-eventosDescargar/{slug}', 'PublicController@eventosDescargar');
Route::get('/isc-academicos-convocatoriasVer/{slug}', 'PublicController@convocatoriasVer');
Route::get('/isc-academicos-convocatoriasDescargar/{slug}', 'PublicController@convocatoriasDescargar');
Route::get('/isc-academicos-programasVer/{slug}', 'PublicController@programasVer');
Route::get('/isc-academicos-programasDescargar/{slug}', 'PublicController@programasDescargar');
Route::get('/isc-galeria', 'PublicController@galeria');
Route::get('/isc-galeria-fotos/{id}', 'PublicController@fotos');
Route::get('/isc-galeria-fotosVerImg/{id}', 'PublicController@fotosVerImg');
Route::get('/isc-galeria-fotosGaleriaVerImg/{id}', 'PublicController@fotosGaleriaVerImg');
Route::get('/isc-inicio-contactos', 'PublicController@contactos');
Route::get('/isc-inicio-formContacto/{correo}', 'PublicController@formContacto');
Route::post('/isc-inicio-contactoCorreo', 'PublicController@contactoCorreo');

////////Rutas de Menu-inicio///////////
Route::get('/admin', 'InicioController@index')->middleware('auth');

//////Rutas y sub rutas de Noticias
Route::get('noticias-admin/eliminacion-anual', 'NoticiaController@eliminaranual')->middleware('auth');
Route::post('noticias-admin/eliminacion-multiple','NoticiaController@eliminacionmultiple')->middleware('auth');
Route::resource('noticias-admin','NoticiaController')->parameters(['noticias-admin' => 'noticia'])->middleware('auth');

Route::resource('slider','SliderController')->parameters(['slider' => 'slider'])->middleware('auth');
Route::get('/noticias-admin-eliminar/{slug}', 'NoticiaController@destroy')->middleware('auth');
Route::get('/slider-eliminar/{slug}', 'SliderController@destroy')->middleware('auth');
Route::get('slider/filtrar/{id}', 'SliderController@filtrar')->name('filtrarslider')->middleware('auth');

/////Redirecionamiento del menu

Route::get('slider', 'SliderController@index')->name('slider')->middleware('auth');
Route::get('noticias-admin', 'NoticiaController@index')->name('noticias-admin')->middleware('auth');
Route::get('calendario', 'CalendarioController@index')->name('calendario')->middleware('auth');
//Route::get('calendario', 'SliderController@index')->name('calendario');
//Calendario, ruta de eventos del calendario
Route::get('calendarioeventos', 'CalendarioController@eventos')->middleware('auth');
Route::post('calendarioagregar', 'CalendarioController@store')->middleware('auth');
Route::post('calendarioeliminar', 'CalendarioController@destroy')->middleware('auth');
Route::post('calendariomodificar', 'CalendarioController@update')->middleware('auth');
/////Route::post('calendarioeventos?acction=agregar', 'CalendarioController@eventos');

////////////////////////Buscador de noticias///////////////////////////
Route::get('noticias-admin/paginacion', 'NoticiaController@paginacion')->middleware('auth');
Route::get('buscador-noticias', 'NoticiaController@buscador')->middleware('auth');

//Rutas-perfil-ingreso
Route::get('Perfil-Ingreso', 'PerfilIngresoController@index')->name('perfil-ingreso')->middleware('auth');
Route::get('Perfil-Ingreso-Lista', 'PerfilIngresoController@list')->name('editar-perfil-ingreso')->middleware('auth');
Route::get('Perfil-Ingreso-Crear', 'PerfilIngresoController@create')->name('crear-perfil-ingreso')->middleware('auth');
Route::get('Perfil-Ingreso-Editar', 'PerfilIngresoController@edit')->name('editar-elemento')->middleware('auth');
Route::resource('PerfilIngreso', 'PerfilIngresoController')->middleware('auth');
Route::get('Perfil-Ingreso-Eliminar/{slug}', 'PerfilIngresoController@destroy')->name('eliminar-elemento')->middleware('auth');

//Rutas-perfil-egreso
Route::get('Perfil-Egreso', 'PerfilEgresoController@index')->name('perfil-egreso')->middleware('auth');
Route::get('Perfil-Egreso-Lista', 'PerfilEgresoController@list')->name('editar-perfil-egreso')->middleware('auth');
Route::get('Perfil-Egreso-Crear', 'PerfilEgresoController@create')->name('crear-perfil-egreso')->middleware('auth');
Route::get('Perfil-Egreso-Editar', 'PerfilEgresoController@edit')->name('editar-elemento-eg')->middleware('auth');
Route::resource('PerfilEgreso', 'PerfilEgresoController')->middleware('auth');
Route::get('Perfil-Egreso-Eliminar/{slug}', 'PerfilEgresoController@destroy')->name('eliminar-elemento-eg')->middleware('auth');

//Rutas-reticula
Route::get('reticula', 'ReticulaController@index')->name('reticula')->middleware('auth');
Route::get('Crear Reticula', 'ReticulaController@create')->name('crear-reticula')->middleware('auth');
Route::get('Editar reticula', 'ReticulaController@edit')->name('editar-reticula')->middleware('auth');
Route::resource('VerReticula', 'ReticulaController')->middleware('auth');
Route::get('Reticula-Eliminar/{slug}', 'ReticulaController@destroy')->name('eliminar-elemento-reticula')->middleware('auth');
Route::get('/reticula/descargar/{slug}', 'ReticulaController@download')->name('descargar')->middleware('auth');

//Rutas Mision, Vision y objetivos

Route::resource('informacion', 'InformacionCarreraController')->middleware('auth');
Route::get('/informacion/{slug}/edit', 'InformacionCarreraController@edit')->middleware('auth');

//Rutas Lineas Investigación
Route::get('LineasInvestigacion', 'LineasInvestigacionController@index')->name('LineasInvestigacion')->middleware('auth');
Route::get('CrearLineaInvestigacion', 'LineasInvestigacionController@create')->name('crear-Linea-Investigacion')->middleware('auth');
Route::get('EditarLineaInvestigacion', 'LineasInvestigacionController@edit')->name('editar-Linea-Investigacion')->middleware('auth');
Route::resource('Lineas-Investigacion', 'LineasInvestigacionController')->middleware('auth');
Route::get('Eliminar-Linea-Investigacion/{slug}', 'LineasInvestigacionController@destroy')->name('eliminar-Linea-Investigacion')->middleware('auth');

//Rutas Cuerpos academicos
Route::resource('CuerposAcademicos', 'CuerposAcademicosController')->middleware('auth');
Route::get('/CuerposAcademicosEliminar/{slug}', 'CuerposAcademicosController@destroy')->middleware('auth');
Route::get('/CuerposAcademicos/{slug}/edit', 'CuerposAcademicosController@edit')->middleware('auth');

//Rutas Campo Laboral
Route::get('Campo-Laboral', 'CampoLaboralController@index')->name('CampoLaboralIndex')->middleware('auth');
Route::get('Campo-Laboral-Lista', 'CampoLaboralController@list')->name('CampoLaboralLista')->middleware('auth');
Route::get('Campo-Laboral-Crear', 'CampoLaboralController@create')->name('CampoLaboralCrear')->middleware('auth');
Route::get('CampoLaboral-Editar', 'CampoLaboralController@edit')->name('CampoLaboralEditar')->middleware('auth');
Route::resource('CampoLaboral', 'CampoLaboralController')->middleware('auth');
Route::get('Campo-Laboral-Eliminar/{slug}', 'CampoLaboralController@destroy')->name('CampoLaboralEliminar')->middleware('auth');

//Rutas Organigrama
Route::resource('Organigrama', 'OrganigramaController')->middleware('auth');
Route::get('Organigrama/filtrar/{nombre}', 'OrganigramaController@filtrar')->name('filtrar')->middleware('auth');
Route::get('Agregar nuevo elemento', 'OrganigramaController@create')->name('OrganigramaCrear')->middleware('auth');
Route::get('/Organigrama/{slug}/edit', 'OrganigramaController@edit')->middleware('auth');
Route::get('/Organigrama-Eliminar/{slug}', 'OrganigramaController@destroy')->middleware('auth');

//Rutas Infraestructura
Route::resource('Lab-Celula', 'CelulaController')->middleware('auth');
Route::resource('Img-Lab-Celula', 'ImagenCelulaController')->middleware('auth');
Route::resource('Lab-Sistemas', 'LabSistemasController')->middleware('auth');
Route::resource('Img-Lab-Sistemas', 'ImagenSistemasController')->middleware('auth');
Route::resource('Lab-Cisco', 'LabCiscoController')->middleware('auth');
Route::resource('Img-Lab-Cisco', 'ImagenCiscoController')->middleware('auth');
Route::resource('Lab-Micro', 'LabMicroController')->middleware('auth');
Route::resource('Img-Lab-Micro', 'ImagenMicroController')->middleware('auth');

Route::get('/Lab-Celula/create', 'CelulaController@create')->middleware('auth');
Route::get('/Lab-Celula-Index', 'CelulaController@index')->name('celulaIndex')->middleware('auth');
Route::get('/Lab-Celula/{infra}/edit', 'CelulaController@edit')->middleware('auth');
Route::get('/Lab-Celula-Delete/{id}', 'CelulaController@destroy')->middleware('auth');
Route::get('/Img-Lab-Celula/create', 'ImagenCelulaController@create')->middleware('auth');

Route::get('/Lab-Sistemas/create', 'LabSistemasController@create')->middleware('auth');
Route::get('/Lab-Sistemas', 'LabSistemasController@index')->middleware('auth');
Route::get('/Lab-Sistemas-Delete/{id}', 'LabSistemasController@destroy')->middleware('auth');
Route::get('/Img-Lab-Sistemas/create', 'ImagenSistemasController@create')->middleware('auth');

Route::get('/Lab-Cisco/create', 'LabCiscoController@create')->middleware('auth');
Route::get('/Lab-cisco', 'LabCiscoController@index')->middleware('auth');
Route::get('/Lab-Cisco-Delete/{id}', 'LabCiscoController@destroy')->middleware('auth');
Route::get('/Img-Lab-Cisco/create', 'ImagenCiscoController@create')->middleware('auth');

Route::get('/Lab-Micro/create', 'LabMicroController@create')->middleware('auth');
Route::get('/Lab-Micro', 'LabMicroController@index')->middleware('auth');
Route::get('/Lab-Micro-Delete/{id}', 'LabMicroController@destroy')->middleware('auth');
Route::get('/Img-Lab-Micro/create', 'ImagenMicroController@create')->middleware('auth');

//Route::get('/Lab-Celula', 'CelulaController@create');
Route::resource('Lab-Celula', 'CelulaController')->middleware('auth');
Route::get('/Lab-Celula/create', 'CelulaController@create');
Route::get('/Lab-Celula', 'CelulaController@index')->middleware('auth');

//Ruta Eventos-academicos

Route::resource('EventosAcademicos', 'EventosAcademicosController')->middleware('auth');
Route::get('/EventosAcademicos', 'EventosAcademicosController@index')->name('EventosAcademicos')->middleware('auth');
Route::get('/EventosAcademicos/create', 'EventosAcademicosController@create')->name('AgregarEventos')->middleware('auth');
Route::get('/EventosAcademicos/edit', 'EventosAcademicosController@edit')->name('EditarEventos')->middleware('auth');
Route::get('/EventosAcademicos/descargar/{slug}', 'EventosAcademicosController@download')->name('descargar-evento')->middleware('auth');
Route::get('/EventosAcademicos/eliminar/{slug}', 'EventosAcademicosController@destroy')->name('EliminarEvento')->middleware('auth');

//Rutas Proyectos-academicos

Route::resource('ProyectosAcademicos', 'ProyectoController')->middleware('auth');
Route::resource('ProyectosAcademicosGaleria', 'ProyectoGaleriaController')->middleware('auth');
Route::get('/ProyectosAcademicos', 'ProyectoController@index')->name('ProyectosAcademicos')->middleware('auth');
Route::get('/ProyectosAcademicos/create', 'ProyectoController@create')->name('AgregarProyectos')->middleware('auth');
Route::get('/ProyectosAcademicos/edit', 'ProyectoController@edit')->name('EditarProyectos')->middleware('auth');
Route::get('/ProyectosAcademicosGaleria-Delete/{id}', 'ProyectoGaleriaController@destroy')->middleware('auth');
Route::get('ProyectosAcademicos-Eliminar/{slug}', 'ProyectoController@destroy')->middleware('auth');
Route::get('/ProyectosAcademicos/agregar/{slug}', 'ProyectoController@agregar')->middleware('auth');

//Ruta convocatorias-acdemicos
Route::resource('ConvocatoriasAcademicos', 'ConvocatoriasController')->middleware('auth');
Route::get('/ConvocatoriasAcademicos', 'ConvocatoriasController@index')->name('ConvocatoriasAcademicos')->middleware('auth');
Route::get('/ConvocatoriasAcademicos/create', 'ConvocatoriasController@create')->name('AgregarConvocatorias')->middleware('auth');
Route::get('/ConvocatoriasAcademicos/edit', 'ConvocatoriasController@edit')->name('EditarConvocatorias')->middleware('auth');
Route::get('/ConvocatoriasAcademicos/descargar/{slug}', 'ConvocatoriasController@download')->name('descargar-convocatoria')->middleware('auth');
Route::get('/ConvocatoriasAcademicos-Eliminar/{slug}', 'ConvocatoriasController@destroy')->middleware('auth');

//Ruta programas-acdemicos
Route::resource('ProgramasAcademicos', 'ProgramasController')->middleware('auth');
Route::get('/ProgramasAcademicos', 'ProgramasController@index')->name('ProgramasAcademicos')->middleware('auth');
Route::get('/ProgramasAcademicos/create', 'ProgramasController@create')->name('AgregarPrograma')->middleware('auth');
Route::get('/ProgramasAcademicos/edit', 'ProgramasController@edit')->name('EditarPrograma')->middleware('auth');
Route::get('/ProgramasAcademicos/descargar/{slug}', 'ProgramasController@download')->name('descargar-programa')->middleware('auth');
Route::get('/ProgramasAcademicos-Eliminar/{slug}', 'ProgramasController@destroy')->middleware('auth');

//Rutas Galeria
Route::resource('Album', 'AlbumController')->middleware('auth');
Route::resource('AlbumGaleria', 'AlbumGaleriaController')->middleware('auth');

Route::get('/Album-Index', 'AlbumController@index')->middleware('auth');
Route::get('/Album/create', 'AlbumController@create')->middleware('auth');
Route::get('/Album/{slug}/edit', 'AlbumController@edit')->middleware('auth');
Route::get('/Album/agregar/{slug}', 'AlbumController@agregar')->middleware('auth');
Route::get('/Album-Delete/{slug}', 'AlbumController@destroy')->middleware('auth');
Route::get('/Album-Galeria-Delete/{id}', 'AlbumGaleriaController@destroy')->middleware('auth');