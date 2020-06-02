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
use App\header;
use App\subheader;
use App\contactosGen;
use App\infoFooter;
use App\rSocial;
use Validator;

class PublicController extends Controller
{
  //TEMP

  public function footer()
  {
    return view('admin.menu-footer.view-footer');
  }

  public function footerEdit()
  {
    return view('admin.menu-footer.editar-footer');
  }
  //END TEMP

  public function inicio()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $informaciones = informacion::where('slug', 'ObjetivoCarrera')->firstOrFail();
    $FSlider = Slider::latest()->first();
    $idFS = $FSlider->id;
    $FNoticia = Noticia::latest()->first();
    $idFN = $FNoticia->id;

    $sliders = Slider::where('id', '!=', $idFS)->orderBy('id', 'DESC')->get();
    $noticias = Noticia::latest()->where('id', '!=', $idFN)->take(4)->get();
    $proyectos = Proyecto::latest()->take(6)->get();

    return view('publico/menu-inicio/inicio', compact('noticias','sliders', 'proyectos', 'FSlider', 'FNoticia', 'informaciones', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function noticias()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $header = header::where('slug', 'noticias')->firstOrFail();
    $noticias = Noticia::orderBy('id', 'DESC')->paginate(10);
    return view('publico.menu-inicio.noticias.noticias', compact('noticias', 'header', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function noticiasVerInd($id)
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $header = header::where('slug', 'noticias')->firstOrFail();
    $noticias = Noticia::where("id", '=', $id)->firstOrFail();
    return view('publico.menu-inicio.noticias.noticia-individual', compact('noticias', 'header', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function buscadorNoticias(Request $request)
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $header = header::where('slug', 'noticias')->firstOrFail();
    $noticias = Noticia::orderBy('id', 'DESC')->where('titulo', 'like',"%".$request->key."%")->paginate(10);
    return view('publico.menu-inicio.noticias.noticias',compact('noticias', 'header', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function calendario()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $header = header::where('slug', 'calendario')->firstOrFail();
    return view('publico.menu-inicio.calendario.calendario', compact('header' , 'redes', 'infoFooter', 'contactosGen'));
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
  {$redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $header = header::where('slug', 'conocenos')->firstOrFail();
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

    return view('publico.menu-conocenos.conocenos', compact('informaciones', 'perfilingreso', 'perfilegreso', 'campolaboral', 'reticulas', 'lineainvestigacion', 'cuerpos', 'director', 'laboratorio', 'docente', 'header' , 'redes', 'infoFooter', 'contactosGen'));
  }

  public function MVO()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $subheader = subheader::where('sSlug', 'MVO')->firstOrFail();
    $informaciones = informacion::all();
    return view('publico.menu-conocenos.informacion-carrera.view-informacion-carrera', compact('informaciones', 'subheader', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function perfilCampoISC()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $subheader = subheader::where('sSlug', 'perfilC')->firstOrFail();
    $perfilingreso = perfil_ingreso::all();
    $perfilegreso = perfil_egreso::all();
    $campolaboral = campo_laboral::all();

    return view('publico.menu-conocenos.perfil-campo-ISC.view-perfil-campo-ISC', compact('perfilingreso', 'perfilegreso', 'campolaboral', 'subheader', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function reticula()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $subheader = subheader::where('sSlug', 'reticula')->firstOrFail();
    $reticulas = reticula::orderBy('id', 'DESC')->paginate(5);
    return view('publico.menu-conocenos.reticula.view-reticula', compact('reticulas', 'subheader', 'redes', 'infoFooter', 'contactosGen'));
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

  public function lineasCuerpos()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $subheader = subheader::where('sSlug', 'LiCa')->firstOrFail();
    $lineainvestigacion = lineas_investigacion::all();
    $cuerpos = CuerposAcademico::all();

    return view('publico.menu-conocenos.lineas-cuerpos.view-lineas-cuerpos', compact('lineainvestigacion', 'cuerpos', 'subheader', 'redes', 'infoFooter', 'contactosGen'));
  }

  /*public function lineasInvestigacion()
  {
    $lineainvestigacion = lineas_investigacion::all();
    return view('publico.menu-conocenos.lineas-investigacion.view-lineas', compact('lineainvestigacion'));
  }

  public function cuerposAcademicos()
  {
    $cuerpos = CuerposAcademico::all();
    return view('publico.menu-conocenos.cuerpo-academico.view-cuerpo-academico', compact('cuerpos'));
  }*/

  public function organigrama()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $subheader = subheader::where('sSlug', 'organigrama')->firstOrFail();
    $director = DB::table('organigramas')->join('areas', 'organigramas.area_id', '=', 'areas.id')->select('organigramas.*', 'areas.nombre')->where('areas.id', '<', '5')->orderBy('areas.id', 'ASC')->get();

    $laboratorio = DB::table('organigramas')->join('areas', 'organigramas.area_id', '=', 'areas.id')->select('organigramas.*', 'areas.nombre')->where('areas.id', '=', '5')->get();

    $docente = DB::table('organigramas')->join('areas', 'organigramas.area_id', '=', 'areas.id')->select('organigramas.*', 'areas.nombre')->where('areas.id', '=', '6')->get();

    return view('publico.menu-conocenos.organigrama.view-organigrama', compact('director', 'laboratorio', 'docente', 'subheader', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function infraestructura()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $header = header::where('slug', 'infraestructura')->firstOrFail();
    $infras = Infraestructura::all();

    return view('publico.menu-inf.infraestructura', compact('infras', 'header', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function labCisco()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $infras = Infraestructura::where('slug', '=', 'cisco')->get();
    $imagenes = imagenLab::all()->where('lab_id', '=', 'cisco');
    return view('publico.menu-inf.lab-cisco.show', compact('infras', 'imagenes', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function labSistemas()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $infras = Infraestructura::where('slug', '=', 'sistemas')->get();
    $imagenes = imagenLab::all()->where('lab_id', '=', 'sistemas');
    return view('publico.menu-inf.lab-sistemas.show', compact('infras', 'imagenes', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function labMicroprocesadores()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $infras = Infraestructura::where('slug', '=', 'micro')->get();
    $imagenes = imagenLab::all()->where('lab_id', '=', 'micro');
    return view('publico.menu-inf.lab-micro.show', compact('infras', 'imagenes', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function labCelula()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $infras = Infraestructura::where('slug', '=', 'celula')->get();
    $imagenes = imagenLab::all()->where('lab_id', '=', 'celula');
    return view('publico.menu-inf.lab-celula.show', compact('infras', 'imagenes', 'redes', 'infoFooter', 'contactosGen'));
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
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $header = header::where('slug', 'academicos')->firstOrFail();
    $proyectos = Proyecto::latest()->take(1)->get();
    $eventos = EventosAcademico::latest()->take(1)->get();
    $convocatorias = Convocatoria::latest()->take(1)->get();
    $programas = Programa::latest()->take(1)->get();

    return view('publico.menu-academicos.academicos', compact('proyectos', 'eventos', 'convocatorias', 'programas', 'header', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function proyectos()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $subheader = subheader::where('sSlug', 'proy')->firstOrFail();
    $proyectos = Proyecto::orderBy('id', 'DESC')->paginate(5);
    $imagenes = DB::table('proyecto_galerias')->join('proyectos', 'proyecto_galerias.proySlug', '=', 'proyectos.slug')->select('proyecto_galerias.*')->get();
    return view('/publico/menu-academicos/proyectos/view-proyectos-academicos', compact('proyectos', 'imagenes', 'subheader', 'redes', 'infoFooter', 'contactosGen'));
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
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $subheader = subheader::where('sSlug', 'eventosacad')->firstOrFail();
    $eventos = EventosAcademico::orderBy('id', 'DESC')->paginate(5);
    return view('/publico/menu-academicos/Eventos/view', compact('eventos', 'subheader', 'redes', 'infoFooter', 'contactosGen'));
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
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $subheader = subheader::where('sSlug', 'convocatorias')->firstOrFail();
    $convocatorias = Convocatoria::orderBy('id', 'DESC')->paginate(5);
    return view('/publico/menu-academicos/convocatorias/view-convocatorias-academicos', compact('convocatorias', 'subheader', 'redes', 'infoFooter', 'contactosGen'));
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
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $subheader = subheader::where('sSlug', 'programas')->firstOrFail();
    $programas = Programa::orderBy('id', 'DESC')->paginate(5);
    return view('/publico/menu-academicos/programas/view', compact('programas', 'subheader', 'redes', 'infoFooter', 'contactosGen'));
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

  public function galeria()
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $header = header::where('slug', 'galeria')->firstOrFail();
    $albums = album::orderBy('id', 'DESC')->get();
    return view('publico.menu-galeria.albumes', compact('albums', 'header', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function fotos($slug)
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $albums = album::where('slug', $slug)->firstOrFail();
    $ASlug = $albums->slug;
    $imagenes = albumGaleria::where('albumSlug', $ASlug)->get();
    return view('publico.menu-galeria.galeria.galeria', compact('albums', 'imagenes', 'redes', 'infoFooter', 'contactosGen'));
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
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();

    $header = header::where('slug', 'contactanos')->firstOrFail();
    $directors = DB::table('organigramas')->join('areas', 'organigramas.area_id', '=', 'areas.id')->select('organigramas.*', 'areas.nombre')->where('areas.id', '=', '4')->orderBy('areas.id', 'ASC')->get();

    return view('publico.correos', compact('directors', 'header', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function formContacto($correo)
  {
    $redes = rSocial::all();
    $infoFooter = infoFooter::all();
    $contactosGen = contactosGen::all();
    
    $subheader = subheader::where('sSlug', 'contact')->firstOrFail();
    $destinatario = $correo;
    return view('publico.formCorreo', compact('destinatario', 'subheader', 'redes', 'infoFooter', 'contactosGen'));
  }

  public function contactoCorreo(Request $request)
  {
    $destin = Organigrama::where('correo', '=', $request->destinatario)->firstOrFail();
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
          'destin' => $destin->integrante,
          'remitente' => $request->remitente,
          'nombre' => $request->nombre,
          'mensaje' => $request->mensaje
        );

        Mail::to($request->destinatario)->send(new SendMail($data));
        return redirect('/isc-inicio-contactos')->with('status','Su correo fue enviado, gracias por ponerse en contacto');
      }
  }
}
