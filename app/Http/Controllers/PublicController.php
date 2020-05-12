<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Noticia;
use App\Slider;
use App\Evento;
use App\Mail\SendMail;
use App\informacion;
use App\perfil_ingreso;
use App\album;
use App\albumGaleria;
use App\Area;
use App\campo_laboral;
use App\Convocatoria;
use App\CuerposAcademico;
use App\EventosAcademico;
use App\imagenLab;
use App\Infraestructura;
use App\lineas_investigacion;
use App\Organigrama;
use App\perfil_egreso;
use App\Programa;
use App\Proyecto;
use App\ProyectoGaleria;
use App\reticula;
use Validator;

class PublicController extends Controller
{
  public function inicio()
  {
    $sliders = Slider::all();
    $noticias = Noticia::latest()->take(4)->get();
    $proyectos = Proyecto::latest()->take(6)->get();

    return view('publico/menu-inicio/inicio', compact('noticias','sliders', 'proyectos'));
  }

  public function noticias()
  {
    $noticias = Noticia::orderBy('id', 'DESC')->paginate(10);
    return view('publico.menu-inicio.noticias.noticias', compact('noticias'));
  }

  public function noticiasVerInd($id)
  {
    $noticias = Noticia::where("id", '=', $id)->firstOrFail();
    return view('publico.menu-inicio.noticias.noticia-individual', compact('noticias'));
  }

  public function buscadorNoticias(Request $request)
  {
    $noticias = Noticia::orderBy('id', 'DESC')->where('titulo', 'like',"%".$request->key."%")->paginate(10);
    return view('publico.menu-inicio.noticias.noticias',compact('noticias'));
  }

  public function calendario()
  {
    return view('publico.menu-inicio.calendario.calendario');
  }

  public function calendarioEventos(Request $request)
  {
    $eventos = Evento::all();

    $accion = $request->input('accion');

    switch ($accion)
    {
    	case 'agregar':
    	$evento = new Evento();

    	$evento->title = $request->input('title');
    	$evento->descripcion = $request->input('descripcion');
    	$evento->color = $request->input('color');
    	$evento->textColor = $request->input('textColor');
    	$evento->start = $request->input('start');
    	$evento->end = $request->input('end');

    	$evento->save();

    	return $evento;

      break;

    	default:
    	return $eventos;
      break;
  	}
  }

  public function conocenos()
  {
    $informaciones = informacion::all();
    $perfilingreso = perfil_ingreso::oldest()->take(4)->get();
    $perfilegreso = perfil_egreso::oldest()->take(4)->get();
    $campolaboral = campo_laboral::oldest()->take(4)->get();
    $reticulas = reticula::latest()->take(1)->get();
    $lineainvestigacion = lineas_investigacion::latest()->take(3)->get();
    $cuerpos = CuerposAcademico::latest()->take(3)->get();
    $director = DB::table('organigramas')->join('areas', 'organigramas.area_id', '=', 'areas.id')->select('organigramas.*', 'areas.nombre')->where('areas.id', '<', '5')->orderBy('areas.id', 'ASC')->get();
    $laboratorio = DB::table('organigramas')->join('areas', 'organigramas.area_id', '=', 'areas.id')->select('organigramas.*', 'areas.nombre')->where('areas.id', '=', '5')->get();
    $docente = DB::table('organigramas')->join('areas', 'organigramas.area_id', '=', 'areas.id')->select('organigramas.*', 'areas.nombre')->where('areas.id', '=', '6')->get();

    return view('publico.menu-conocenos.conocenos', compact('informaciones', 'perfilingreso', 'perfilegreso', 'campolaboral', 'reticulas', 'lineainvestigacion', 'cuerpos', 'director', 'laboratorio', 'docente'));
  }

  public function MVO()
  {
    $informaciones = informacion::all();
    return view('publico.menu-conocenos.informacion-carrera.view-informacion-carrera', compact('informaciones'));
  }

  public function perfilCampoISC()
  {
    $perfilingreso = perfil_ingreso::all();
    $perfilegreso = perfil_egreso::all();
    $campolaboral = campo_laboral::all();

    return view('publico.menu-conocenos.perfil-campo-ISC.view-perfil-campo-ISC', compact('perfilingreso', 'perfilegreso', 'campolaboral'));
  }

  public function reticula()
  {
    $reticulas = reticula::orderBy('id', 'DESC')->paginate(5);
    return view('publico.menu-conocenos.reticula.view-reticula', compact('reticulas'));
  }

  public function reticulaVer($slug)
  {
    $reticula = reticula::where('slug', '=', $slug)->firstOrFail();
    $name = $reticula->documento;
    return response()->file('docs/ret/'.$name);
  }

  public function reticulaDescargar($slug)
  {
    $reticula = reticula::where('slug', '=', $slug)->firstOrFail();
    $name = $reticula->documento;
    return response()->download('docs/ret/'.$name);
  }

  public function lineasInvestigacion()
  {
    $lineainvestigacion = lineas_investigacion::all();
    return view('publico.menu-conocenos.lineas-investigacion.view-lineas', compact('lineainvestigacion'));
  }

  public function cuerposAcademicos()
  {
    $cuerpos = CuerposAcademico::all();
    return view('publico.menu-conocenos.cuerpo-academico.view-cuerpo-academico', compact('cuerpos'));
  }

  public function organigrama()
  {
    $director = DB::table('organigramas')->join('areas', 'organigramas.area_id', '=', 'areas.id')->select('organigramas.*', 'areas.nombre')->where('areas.id', '<', '5')->orderBy('areas.id', 'ASC')->get();

    $laboratorio = DB::table('organigramas')->join('areas', 'organigramas.area_id', '=', 'areas.id')->select('organigramas.*', 'areas.nombre')->where('areas.id', '=', '5')->get();

    $docente = DB::table('organigramas')->join('areas', 'organigramas.area_id', '=', 'areas.id')->select('organigramas.*', 'areas.nombre')->where('areas.id', '=', '6')->get();

    return view('publico.menu-conocenos.organigrama.view-organigrama', compact('director', 'laboratorio', 'docente'));
  }

  public function labCisco()
  {
    $infras = Infraestructura::where('slug', '=', 'cisco')->get();
    $imagenes = imagenLab::all()->where('lab_id', '=', 'cisco');
    return view('publico.menu-inf.lab-cisco.show', compact('infras', 'imagenes'));
  }

  public function labSistemas()
  {
    $infras = Infraestructura::where('slug', '=', 'sistemas')->get();
    $imagenes = imagenLab::all()->where('lab_id', '=', 'sistemas');
    return view('publico.menu-inf.lab-sistemas.show', compact('infras', 'imagenes'));
  }

  public function labMicroprocesadores()
  {
    $infras = Infraestructura::where('slug', '=', 'micro')->get();
    $imagenes = imagenLab::all()->where('lab_id', '=', 'micro');
    return view('publico.menu-inf.lab-micro.show', compact('infras', 'imagenes'));
  }

  public function labCelula()
  {
    $infras = Infraestructura::where('slug', '=', 'celula')->get();
    $imagenes = imagenLab::all()->where('lab_id', '=', 'celula');
    return view('publico.menu-inf.lab-celula.show', compact('infras', 'imagenes'));
  }

  public function labVerImg($id)
  {
    $infras = Infraestructura::where('id', '=', $id)->firstOrFail();
    $name = $infras->imgInicio;
    return response()->file('images/infra/'.$name);
  }

  public function labGaleriaVerImg($id)
  {
    $infrasGal = imagenLab::where('id', '=', $id)->firstOrFail();
    $name = $infrasGal->imagen;
    return response()->file('images/infra/'.$name);
  }

  public function academicos()
  {
    $proyectos = Proyecto::latest()->take(4)->get();
    $eventos = EventosAcademico::latest()->take(2)->get();
    $convocatorias = Convocatoria::latest()->take(2)->get();
    $programas = Programa::latest()->take(2)->get();

    return view('publico.menu-academicos.academicos', compact('proyectos', 'eventos', 'convocatorias', 'programas'));
  }

  public function proyectos()
  {
    $proyectos = Proyecto::orderBy('id', 'DESC')->paginate(5);
    $imagenes = DB::table('proyecto_galerias')->join('proyectos', 'proyecto_galerias.proySlug', '=', 'proyectos.slug')->select('proyecto_galerias.*')->get();
    return view('/publico/menu-academicos/proyectos/view-proyectos-academicos', compact('proyectos', 'imagenes'));
  }

  public function proyectosVerImg($id)
  {
    $proye = Proyecto::where('id', '=', $id)->firstOrFail();
    $name = $proye->newimage;
    return response()->file('images/proyectos/'.$name);
  }

  public function proyectosGaleriaVerImg($id)
  {
    $proyeGal = ProyectoGaleria::where('id', '=', $id)->firstOrFail();
    $name = $proyeGal->imagen;
    return response()->file('images/proyectos/'.$name);
  }

  public function eventos()
  {
    $eventos = EventosAcademico::orderBy('id', 'DESC')->paginate(5);
    return view('/publico/menu-academicos/Eventos/view', compact('eventos'));
  }

  public function eventosVer($slug)
  {
    $evento = EventosAcademico::where('slug', '=', $slug)->firstOrFail();
    $name = $evento->documento;
    return response()->file('docs/eventos/'.$name);
  }

  public function eventosDescargar($slug)
  {
    $evento = EventosAcademico::where('slug', '=', $slug)->firstOrFail();
    $name = $evento->documento;
    return response()->download('docs/eventos/'.$name);
  }

  public function convocatorias()
  {
    $convocatorias = Convocatoria::orderBy('id', 'DESC')->paginate(5);
    return view('/publico/menu-academicos/convocatorias/view-convocatorias-academicos', compact('convocatorias'));
  }

  public function convocatoriasVer($slug)
  {
    $convocatorias = Convocatoria::where('slug', '=', $slug)->firstOrFail();
    $name = $convocatorias->doc;
    return response()->file('docs/convocatorias/'.$name);
  }

  public function convocatoriasDescargar($slug)
  {
    $convocatorias = Convocatoria::where('slug', '=', $slug)->firstOrFail();
    $name = $convocatorias->doc;
    return response()->download('docs/convocatorias/'.$name);
  }

  public function programas()
  {
    $programas = Programa::orderBy('id', 'DESC')->paginate(5);
    return view('/publico/menu-academicos/programas/view', compact('programas'));
  }

  public function programasVer($slug)
  {
    $programas = Programa::where('slug', '=', $slug)->firstOrFail();
    $name = $programas->doc;
    return response()->file('docs/programas/'.$name);
  }

  public function programasDescargar($slug)
  {
    $programas =Programa::where('slug', '=', $slug)->firstOrFail();
    $name = $programas->doc;
    return response()->download('docs/programas/'.$name);
  }

  public function fotos()
  {
    $albums = album::orderBy('id', 'DESC')->paginate(5);
    $imagenes = DB::table('album_galerias')->join('albums', 'album_galerias.albumSlug', '=', 'albums.slug')->select('album_galerias.*')->get();
    return view('/publico/menu-galeria/galeria/show', compact('albums', 'imagenes'));
  }

  public function fotosVerImg($id)
  {
    $albums = album::where('id', '=', $id)->firstOrFail();
    $name = $albums->imgPrin;
    return response()->file('images/galeria/album/'.$name);
  }

  public function fotosGaleriaVerImg($id)
  {
    $albumsGal = albumGaleria::where('id', '=', $id)->firstOrFail();
    $name = $albumsGal->imagen;
    return response()->file('images/galeria/'.$name);
  }

  public function contactos()
  {
    return view('publico.correos');
  }

  public function formContacto($correo)
  {
    $destinatario = $correo;
    return view('publico.formCorreo', compact('destinatario'));
  }

  public function contactoCorreo(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'destinatario' => 'required|email',
      'remitente' => 'required|email',
      'nombre' => 'required|string',
      'mensaje' => 'required|string',
      ], [
        'destinatario.required' => 'Se requiere que indique la dirección de correo electrónico del destinatario',
        'destinatario.email' => 'No ha ingresado una dirección de correo electrónico válida para el destinatario',
        'remitente.required' => 'Se requiere que indique su dirección de correo electrónico',
        'remitente.email' => 'No ha ingresado una dirección de correo electrónico válida',
        'nombre.required' => 'Se requiere que ingrese su nombre',
        'nombre.string' => 'El nombre ingresado contiene caracteres no válidos',
        'mensaje.required' => 'Se requiere que ingrese el mensaje del correo',
        'mensaje.string' => 'El mensaje ingresado contiene caracteres no válidos',
      ]);

      if ($validator->fails())
      {
        return redirect('/isc-inicio-formContacto/{{$request->destinatario}}')->withErrors($validator)->withInput($request->all());
      }

      else
      {
        $data = array(
          'remitente' => $request->remitente,
          'nombre' => $request->nombre,
          'mensaje' => $request->mensaje
        );

        Mail::to($request->destinatario)->send(new SendMail($data));
        return redirect('/isc-inicio-contactos')->with('status','Su correo fue enviado, gracias por ponerse en contacto');
      }
  }
}
