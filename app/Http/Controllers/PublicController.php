<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Noticia;
use App\Slider;
use App\Evento;
use Validator;
use App\Mail\SendMail;

class PublicController extends Controller
{
  public function inicio()
  {
    $sliders = Slider::all();
    $noticias = Noticia::latest()->take(4)->get();

    return view('publico/menu-inicio/inicio', compact('noticias','sliders'));
  }

  public function noticias()
  {
    $noticias = Noticia::orderBy('id', 'DESC')->paginate(10);
    return view('publico.menu-inicio.noticias.noticias', compact('noticias'));
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

  public function contactos()
  {
    return view('publico.correos');
  }

  public function formContacto($correo)
  {
    $destinatario = $correo;
    return view('publico.formCorreo', compact('destinatario'));
  }

  public function contactoCorreo(Request$request)
  {
    $validator = Validator::make($request->all(), [
      'destinatario' => 'required|email',
      'remitente' => 'required|email',
      'nombre' => 'required|string',
      'mensaje' => 'required|string',
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
