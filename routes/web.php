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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('Perfil-Usuario', 'UserController@index')->name('perfil-usuario')->middleware('auth');

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit'])->middleware('auth');

Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update'])->middleware('auth');

Route::get('/', function () {
    return view('layouts.publico');
});

////////Rutas de Menu-inicio///////////
Route::get('admin', 'InicioController@index')->middleware('auth');

//////Rutas y sub rutas de Noticias
  Route::get('noticias-admin/eliminacion-anual', 'NoticiaController@eliminaranual')->middleware('auth');
  Route::post('noticias-admin/eliminacion-anual','NoticiaController@eliminacionmultiple')->middleware('auth');
    Route::resource('noticias-admin','NoticiaController')->parameters(['noticias-admin' => 'noticia'])->middleware('auth');

Route::resource('slider','SliderController')->parameters(['slider' => 'slider'])->middleware('auth');



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

//Rutas Lineas Investigación
Route::get('LineasInvestigacion', 'LineasInvestigacionController@index')->name('LineasInvestigacion')->middleware('auth');

Route::get('CrearLineaInvestigacion', 'LineasInvestigacionController@create')->name('crear-Linea-Investigacion')->middleware('auth');

Route::get('EditarLineaInvestigacion', 'LineasInvestigacionController@edit')->name('editar-Linea-Investigacion')->middleware('auth');

Route::resource('Lineas-Investigacion', 'LineasInvestigacionController')->middleware('auth');

Route::get('Eliminar-Linea-Investigacion/{slug}', 'LineasInvestigacionController@destroy')->name('eliminar-Linea-Investigacion')->middleware('auth');

//Rutas Cuerpos academicos
Route::resource('CuerposAcademicos', 'CuerposAcademicosController')->middleware('auth');

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

Route::get('Agregar nuveo elemento', 'OrganigramaController@create')->name('OrganigramaCrear')->middleware('auth');

//Rutas Infraestructura
Route::resource('Lab-Celula', 'CelulaController')->middleware('auth');
Route::resource('Lab-Sistemas', 'LabSistemasController')->middleware('auth');
Route::resource('Lab-Cisco', 'LabCiscoController')->middleware('auth');
Route::resource('Lab-Micro', 'LabMicroController')->middleware('auth');

Route::get('/Lab-Celula/create', 'CelulaController@create')->middleware('auth');
Route::get('/Lab-Celula-Index', 'CelulaController@index')->name('celulaIndex')->middleware('auth');
Route::get('/Lab-Celula/{infra}/edit', 'CelulaController@edit')->middleware('auth');

Route::get('/Lab-Sistemas/create', 'LabSistemasController@create')->middleware('auth');
Route::get('/Lab-Sistemas', 'LabSistemasController@index')->middleware('auth');

Route::get('/Lab-Cisco/create', 'LabCiscoController@create')->middleware('auth');
Route::get('/Lab-cisco', 'LabCiscoController@index')->middleware('auth');

Route::get('/Lab-Micro/create', 'LabMicroController@create')->middleware('auth');
Route::get('/Lab-Micro', 'LabMicroController@index')->middleware('auth');

//Route::get('/Lab-Celula', 'CelulaController@create');
Route::resource('Lab-Celula', 'CelulaController')->middleware('auth');
Route::get('/Lab-Celula/create', 'CelulaController@create');
Route::get('/Lab-Celula', 'CelulaController@index')->middleware('auth');

//Ruta Eventos-academicos

Route::resource('eventos', 'EventosController')->middleware('auth');


Route::get('/EventosAcademicos', function () {
    return view('.admin.menu-academicos.Eventos.view');
})->name('EventosAcademicos')->middleware('auth');

Route::get('/editar-eventos', function () {
    return view('.admin.menu-academicos.Eventos.edit');
})->name('EditarEventos')->middleware('auth');
Route::get('/agregar-evento', function () {
    return view('.admin.menu-academicos.Eventos.create');
})->name('AgregarEventos')->middleware('auth');

Route::get('/editar-proyecto', function () {
    return view('.admin.menu-academicos.proyectos.edit');
})->name('EditarProyectos')->middleware('auth');
Route::get('/agregar-proyecto', function () {
    return view('.admin.menu-academicos.proyectos.create');
})->name('AgregarProyectos')->middleware('auth');

//Rutas Proyectos-academicos

Route::resource('ProyectosAcademicos', 'ProyectoController')->middleware('auth');

Route::get('/ProyectosAcademicos', 'ProyectoController@index')->name('ProyectosAcademicos')->middleware('auth');

Route::get('/ProyectosAcademicos/create', 'ProyectoController@create')->name('AgregarProyectos')->middleware('auth');


Route::get('/ProyectosAcademicos/edit', 'ProyectoController@edit')->name('EditarProyectos')->middleware('auth');



//Ruta convocatorias-acdemicos
Route::resource('ConvocatoriasAcademicos', 'ConvocatoriasController')->middleware('auth');

Route::get('/ConvocatoriasAcademicos', 'ConvocatoriasController@index')->name('ConvocatoriasAcademicos')->middleware('auth');

Route::get('/ConvocatoriasAcademicos/create', 'ConvocatoriasController@create')->name('AgregarConvocatorias')->middleware('auth');


Route::get('/ConvocatoriasAcademicos/edit', 'ConvocatoriasController@edit')->name('EditarConvocatorias')->middleware('auth');




//Ruta programas-acdemicos
Route::resource('programas', 'ProgramasController')->middleware('auth');

Route::get('/ProgramasAcademicos', function () {
    return view('.admin.menu-academicos.programas.view');})->name('ProgramasAcademicos')->middleware('auth');

Route::get('/editar-programas', function () {
    return view('.admin.menu-academicos.programas.edit');
})->name('EditarProgramas')->middleware('auth');
Route::get('/agregar-programas', function () {
    return view('.admin.menu-academicos.programas.create');
})->name('AgregarProgramas')->middleware('auth');
