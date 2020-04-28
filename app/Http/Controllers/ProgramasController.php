<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Programa;

class ProgramasController extends Controller
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
      $programas = Programa::orderBy('id', 'DESC')->paginate(5);
      return view('admin.menu-academicos.programas.view', compact('programas'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
          return view('admin.menu-academicos.programas.create');
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
      'programa' => 'required|string',
      'descripcion' => 'required|string',
      'FInicio' => 'required|string',
      'FFin' => 'required|string',
    ], [
      'doc.required' => 'Se requiere que seleccione un archivo en formato PDF, WORD, EXCEL, POWERPOINT',
      'doc.mimetypes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: PDF, WORD, EXCEL, POWERPOINT',
      'doc.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 3 MB (3072 KB)',
      'programa.required' => 'Se requiere que ingrese un nombre',
      'programa.string' => 'El nombre ingresado contiene caracteres no válidos',
      'descripcion.required' => 'Se requiere que ingrese una descripcion',
      'descripcion.string' => 'La descripcion ingresada contiene caracteres no válidos',
      'FInicio.required' => 'Se requiere que indique la fecha de inicio',
      'FInicio.string' => 'La fecha de inicio contiene caracteres no válidos',
      'FFin.required' => 'Se requiere que indique la fecha de finalización',
      'FFin.string' => 'La fecha de finalización contiene caracteres no válidos',
    ]);

    if ($validator->fails()) {
        return redirect('/ProgramasAcademicos/create')
                    ->withErrors($validator)
                    ->withInput($request->all());
    }

    else
    {
      $programas = new Programa();

      if ($request->hasFile('doc'))
      {
        $file = $request->file('doc');
        $name2 = time().$file->getClientOriginalName();
        $file->move(public_path().'/docs/programas/',$name2);
        $programas->doc = $name2;
      }


      $programas->programa = $request->input('programa');
      $programas->descripcion = $request->input('descripcion');
      $programas->slug = time();
      $programas->FInicio = $request->input('FInicio');
      $programas->FFin = $request->input('FFin');
      $programas->save();

      return redirect()->route('ProgramasAcademicos')->with('status','Inserción Exitosa');
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
        $programas = Programa::where('slug', '=', $slug)->firstOrFail();

        $name = $programas->doc;

        return response()->file('docs/programas/'.$name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($slug)
    {
        $programas =Programa::where('slug', '=', $slug)->firstOrFail();

        $name = $programas->doc;

        return response()->download('docs/programas/'.$name);
    }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($programas)
  {
      $programas = Programa::where('slug', '=', $programas)->firstOrFail();
           return view('/admin/menu-academicos/programas/edit', compact('programas'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $programas)
  {
    $validator = Validator::make($request->all(), [
    'doc' => 'mimetypes:application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/vnd.ms-powerpoint,application/msword,application/vnd.ms-excel|max:3072',
    'programa' => 'required|string',
    'descripcion' => 'required|string',
    'FInicio' => 'required|string',
    'FFin' => 'required|string',
    ], [
      'doc.mimetypes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: PDF, WORD, EXCEL, POWERPOINT',
      'doc.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 3 MB (3072 KB)',
      'programa.required' => 'Se requiere que ingrese un nombre',
      'programa.string' => 'El nombre ingresado contiene caracteres no válidos',
      'descripcion.required' => 'Se requiere que ingrese una descripcion',
      'descripcion.string' => 'La descripcion ingresada contiene caracteres no válidos',
      'FInicio.required' => 'Se requiere que indique la fecha de inicio',
      'FInicio.string' => 'La fecha de inicio contiene caracteres no válidos',
      'FFin.required' => 'Se requiere que indique la fecha de finalización',
      'FFin.string' => 'La fecha de finalización contiene caracteres no válidos',
    ]);

    if ($validator->fails()) {
        return redirect('/ProgramasAcademicos/'.$programas.'/edit')
                    ->withErrors($validator)
                    ->withInput($request->all());
    }

    else
    {
      $programas = Programa::where('slug', '=', $programas)->firstOrFail();
      $programas->fill($request->except('doc'));

      if ($request->hasFile('doc'))
      {
        $file_path =public_path().'/docs/programas/'.$programas->doc;
        if(file_exists($file_path))
        {
          unlink($file_path);
        }

        $file = $request->file('doc');
        $name2 = time().$file->getClientOriginalName();
        $file->move(public_path().'/docs/programas/',$name2);
        $programas->doc = $name2;
      }


      $programas->programa = $request->input('programa');
      $programas->descripcion = $request->input('descripcion');
      $programas->FInicio = $request->input('FInicio');
      $programas->FFin = $request->input('FFin');
      $programas->save();

      return redirect('/ProgramasAcademicos')->with('status','Actualización Exitosa');
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
    $programas = Programa::where('slug', '=', $slug)->firstOrFail();

    $file_path =public_path().'/docs/programas/'.$programas->doc;
    if(file_exists($file_path))
    {
      unlink($file_path);
    }
    $programas->delete();

    return redirect()->route('ProgramasAcademicos')->with('status','Eliminación Exitosa');
  }
}