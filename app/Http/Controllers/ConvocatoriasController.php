<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Convocatoria;

class ConvocatoriasController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $convocatorias = Convocatoria::all();
      return view('/admin/menu-academicos/convocatorias/view-convocatorias-academicos', compact('convocatorias'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
          return view('/admin/menu-academicos/convocatorias/create');
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

  'imagen' => 'required|mimes:jpeg,png,bmp,tiff,gif',
  'convocatoria' => 'required|string',
  'descripcion' => 'required|string',

  ]);

  if ($validator->fails()) {
      return redirect('/ConvocatoriasAcademicos/create')
                  ->withErrors($validator)
                  ->withInput($request->all());
  }

  else
  {
    $convocatorias = new Convocatoria();

    if ($request->hasFile('imagen'))
    {
      $file = $request->file('imagen');
      $name2 = time().$file->getClientOriginalName();
      $file->move(public_path().'/images/convocatoria/',$name2);
      $convocatorias->newimage = $name2;
    }


    $convocatorias->convocatoria = $request->input('convocatoria');
    $convocatorias->descripcion = $request->input('descripcion');
    $convocatorias->slug = time();
    $convocatorias->save();

    return redirect()->route('ConvocatoriasAcademicos')->with('status','Inserción Exitosa');
  }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Convocatoria $convocatorias)
  {
      return view('/admin/menu-academicos/convocatorias/view-convocatorias-academicos', compact('convocatorias'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($convocatorias)
  {
      $convocatorias = Convocatoria::where('slug', '=', $convocatorias)->firstOrFail();
           return view('/admin/menu-academicos/convocatorias/edit', compact('convocatorias'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $convocatorias)
  {
        $validator = Validator::make($request->all(), [

  'image' => 'mimes:jpeg,png,bmp,tiff,gif',
  'convocatorias' => 'required|string',
  'descripcion' => 'required|string',
  ]);

  if ($validator->fails()) {
      return redirect('/ConvocatoriasAcademicos/'.$convocatorias->slug.'/edit')
                  ->withErrors($validator)
                  ->withInput($request->all());
  }

  else
  {
    $convocatorias = Convocatoria::where('slug', '=', $convocatorias)->firstOrFail();
          $proyecto->fill($request->except('image'));
    if ($request->hasFile('image'))
    {
      $file_path =public_path().'/images/convocatoria/'.$convocatorias->newimage;
      if(file_exists($file_path))
      {
        unlink($file_path);
      }

      $file = $request->file('image');
      $name2 = time().$file->getClientOriginalName();
      $file->move(public_path().'/images/proyectos/',$name2);
    $convocatorias->newimage = $name2;
    }

  
  $convocatorias->convocatoria = $request->input('Convocatoria');

  $convocatorias->descripcion = $request->input('descripcion');

    $convocatorias->slug = time();
    $convocatorias->save();

    return redirect()->route('ConvocatoriasAcademicos')->with('status','Actualización Exitosa');
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
 $convocatorias = Convocatoria::where('slug', '=', $slug)->firstOrFail();
 $file_path =public_path().'/images/convocatorias/'.$convocatorias->newimage;
  if(file_exists($file_path))
  {
    unlink($file_path);
  }
  $convocatorias->delete();

      return redirect()->route('ConvocatoriasAcademicos')->with('status','Eliminación Exitosa');
}
}
