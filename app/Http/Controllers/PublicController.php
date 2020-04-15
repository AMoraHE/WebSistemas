<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\Slider;
use App\Evento;

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
}
