<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Convocatoria;

class ConvocatoriasController extends Controller
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
      $convocatorias = Convocatoria::orderBy('id', 'DESC')->paginate(5);
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

  'doc' => 'required|mimetypes:application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/vnd.ms-powerpoint,application/msword,application/vnd.ms-excel|max:3072',
  'convocatoria' => 'required|string',
  'descripcion' => 'required|string',
  'FInicio' => 'required|string',
  'FFin' => 'required|string',
  ], [
    'doc.required' => 'Se requiere que seleccione un archivo en formato PDF, WORD, EXCEL, POWERPOINT',
    'doc.mimetypes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: PDF, WORD, EXCEL, POWERPOINT',
    'doc.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 3 MB (3072 KB)',
    'convocatoria.required' => 'Se requiere que ingrese un nombre',
    'convocatoria.string' => 'El nombre ingresado contiene caracteres no válidos',
    'descripcion.required' => 'Se requiere que ingrese una descripcion',
    'descripcion.string' => 'La descripcion ingresada contiene caracteres no válidos',
    'FInicio.required' => 'Se requiere que indique la fecha de inicio',
    'FInicio.string' => 'La fecha de inicio contiene caracteres no válidos',
    'FFin.required' => 'Se requiere que indique la fecha de finalización',
    'FFin.string' => 'La fecha de finalización contiene caracteres no válidos',
  ]);

  if ($validator->fails()) {
      return redirect('/ConvocatoriasAcademicos/create')
                  ->withErrors($validator)
                  ->withInput($request->all());
  }

  else
  {
    $convocatorias = new Convocatoria();

    if ($request->hasFile('doc'))
    {
      $file = $request->file('doc');
      $name2 = time().$file->getClientOriginalName();
      $file->move(public_path().'/docs/convocatorias/',$name2);
      $convocatorias->doc = $name2;
    }


    $convocatorias->convocatoria = $request->input('convocatoria');
    $convocatorias->descripcion = $request->input('descripcion');
    $convocatorias->slug = time();
    $convocatorias->FInicio = $request->input('FInicio');
    $convocatorias->FFin = $request->input('FFin');
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
  public function show($slug)
    {
        $convocatorias = Convocatoria::where('slug', '=', $slug)->firstOrFail();

        $name = $convocatorias->doc;

        return response()->file('docs/convocatorias/'.$name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($slug)
    {
        $convocatorias = Convocatoria::where('slug', '=', $slug)->firstOrFail();

        $name = $convocatorias->doc;

        return response()->download('docs/convocatorias/'.$name);
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
    'doc' => 'mimetypes:application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/vnd.ms-powerpoint,application/msword,application/vnd.ms-excel|max:3072',
    'convocatoria' => 'required|string',
    'descripcion' => 'required|string',
    'FInicio' => 'required|string',
    'FFin' => 'required|string',
    ], [
    'doc.mimetypes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: PDF, WORD, EXCEL, POWERPOINT',
    'doc.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 3 MB (3072 KB)',
    'convocatoria.required' => 'Se requiere que ingrese un nombre',
    'convocatoria.string' => 'El nombre ingresado contiene caracteres no válidos',
    'descripcion.required' => 'Se requiere que ingrese una descripcion',
    'descripcion.string' => 'La descripcion ingresada contiene caracteres no válidos',
    'FInicio.required' => 'Se requiere que indique la fecha de inicio',
    'FInicio.string' => 'La fecha de inicio contiene caracteres no válidos',
    'FFin.required' => 'Se requiere que indique la fecha de finalización',
    'FFin.string' => 'La fecha de finalización contiene caracteres no válidos',
  ]);
        
  if ($validator->fails()) {
      return redirect('/ConvocatoriasAcademicos/'.$convocatorias.'/edit')
                  ->withErrors($validator)
                  ->withInput($request->all());
  }

  else
  {
    $convocatorias = Convocatoria::where('slug', '=', $convocatorias)->firstOrFail();
    $convocatorias->fill($request->except('doc'));

    if ($request->hasFile('doc'))
    {
      $file_path =public_path().'/docs/convocatorias/'.$convocatorias->doc;
      if(file_exists($file_path))
      {
        unlink($file_path);
      }

      $file = $request->file('doc');
      $name2 = time().$file->getClientOriginalName();
      $file->move(public_path().'/docs/convocatorias/',$name2);
      $convocatorias->doc = $name2;
    }

  
    $convocatorias->convocatoria = $request->input('convocatoria');
    $convocatorias->descripcion = $request->input('descripcion');
    $convocatorias->FInicio = $request->input('FInicio');
    $convocatorias->FFin = $request->input('FFin');
    $convocatorias->save();

    return redirect('/ConvocatoriasAcademicos')->with('status','Actualización Exitosa');
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

    $file_path =public_path().'/docs/convocatorias/'.$convocatorias->doc;
    if(file_exists($file_path))
    {
      unlink($file_path);
    }
    $convocatorias->delete();

    return redirect()->route('ConvocatoriasAcademicos')->with('status','Eliminación Exitosa');
}
}
