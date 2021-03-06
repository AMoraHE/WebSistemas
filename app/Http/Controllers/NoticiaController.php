<?php

namespace App\Http\Controllers;

use Validator;
use App\Noticia;
use App\Slider;
use App\Http\Requests\StoreNoticiaRequest;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
 {
    $noticias = Noticia::orderBy('id', 'desc')->paginate(5);
    return view('admin.menu-inicio.noticias.noticias', compact('noticias'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('admin.menu-inicio.noticias.crear');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
    'titulo' => 'required|string',
    'image' => 'required|mimes:jpeg,png,bmp,tiff,gif|max:1024',
    'redaccion' => 'required|string',
    ], [
      'titulo.required' => 'Se requiere que ingrese el título de la noticia',
      'titulo.string' => 'El título ingresado contiene caracteres no válidos',
      'image.required' => 'Se requiere que seleccione un archivo en formato JPEG, PNG, BMP, TIFF, GIF',
      'image.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
      'image.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 1 MB (1024 KB)',
      'redaccion.required' => 'Se requiere que redacte el contenido de la noticia',
      'redaccion.string' => 'El texto redactado contiene caracteres no válidos',
    ]);

    if ($validator->fails()) {
        return redirect('/noticias-admin/create')
                    ->withErrors($validator)
                    ->withInput($request->all());
    }

    else
    {
      $noticia = new Noticia();

      if ($request->hasFile('image'))
      {
        $file = $request->file('image');
        $name2 = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/news/',$name2);
        $noticia->newimage = $name2;
      }

      $noticia->titulo = $request->input('titulo');
      $noticia->slug = time();
      $noticia->redaccion = $request->input('redaccion');
      $noticia->save();

      return redirect()->route('noticias-admin')->with('status','Inserción Exitosa');
    }
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show(Noticia $noticia)
  {
    return view('admin.menu-inicio.noticias.show', compact('noticia'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit(Noticia $noticia)
  {
    return view('admin.menu-inicio.noticias.editar', compact('noticia'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request,Noticia $noticia)
  {
    $validator = Validator::make($request->all(), [
    'titulo' => 'required|string',
    'image' => 'mimes:jpeg,png,bmp,tiff,gif|max:1024',
    'redaccion' => 'required|string',
    ], [
      'titulo.required' => 'Se requiere que ingrese el título de la noticia',
      'titulo.string' => 'El título ingresado contiene caracteres no válidos',
      'image.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
      'image.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 1 MB (1024 KB)',
      'redaccion.required' => 'Se requiere que redacte el contenido de la noticia',
      'redaccion.string' => 'El texto redactado contiene caracteres no válidos',
    ]);

    if ($validator->fails()) {
        return redirect('/noticias-admin/'.$noticia->slug.'/edit')
                    ->withErrors($validator)
                    ->withInput($request->all());
    }

    else
    {
      if ($request->hasFile('image'))
      {
        $file_path =public_path().'/images/news/'.$noticia->newimage;
        if(file_exists($file_path))
        {
          unlink($file_path);
        }

        $file = $request->file('image');
        $name2 = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/news/',$name2);
        $noticia->newimage = $name2;
      }

      $noticia->fill($request->all());
      $noticia->save();

      return redirect()->route('noticias-admin')->with('status','Actualización Exitosa');
    }
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($slug)
  {
    $noticia = Noticia::where('slug', '=', $slug)->firstOrFail();
    $file_path =public_path().'/images/news/'.$noticia->newimage;
    if(file_exists($file_path))
    {
      unlink($file_path);
    }

    $noticia->delete();
    return redirect()->route('noticias-admin')->with('status','Eliminacion Exitosa');;
  }



  public function buscador(Request $request)
  {
    $noticias = Noticia::orderBy('id', 'desc')->where('titulo', 'like',"%".$request->key."%")->paginate(10);
    return view('admin.menu-inicio.noticias.noticias',compact('noticias'));
  }

    //////Eliminacion anual////////////////
  public function eliminaranual()
  {
    $noticias = Noticia::orderBy('id', 'desc')->paginate(5);
    return view('admin.menu-inicio.noticias.eliminacion-anual',compact('noticias'));
  }

  public function eliminacionmultiple(Request $request)
  {


    /////

    $year =$request->year;
  //  $noticias = Noticia::purgeYear($year);
    $photos= Noticia::whereYear('created_at',$year)->get();


    foreach ($photos as $photo) {
    
      if (file_exists(public_path('/images/news/'.$photo->newimage))) {
        unlink(public_path('/images/news/'.$photo->newimage));
      }
    //  $photo->delete();
    }
  $noticias = Noticia::purgeYear($year);

      return redirect('/noticias-admin')->with('status','Eliminación anual exitosa');;
  }
}
