<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Proyecto;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('/admin/menu-academicos/proyectos/view-proyectos-academicos', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('/admin/menu-academicos/proyectos/create');
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
    'aplicacion' => 'required|string',
    'imagen' => 'required|mimes:jpeg,png,bmp,tiff,gif',
    'proyecto' => 'required|string',
    'desarrolladores' => 'required|string',
    'objetivo' => 'required|string',
    'descripcion' => 'required|string',
    'resultados' => 'required|string',
    
    ]);

    if ($validator->fails()) {
        return redirect('/ProyectosAcademicos/create')
                    ->withErrors($validator)
                    ->withInput($request->all());
    }

    else
    {
      $proyecto = new Proyecto();

      if ($request->hasFile('imagen'))
      {
        $file = $request->file('imagen');
        $name2 = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/proyectos/',$name2);
        $proyecto->newimage = $name2;
      }

      $proyecto->aplicacion = $request->input('aplicacion');
      $proyecto->proyecto = $request->input('proyecto');
      $proyecto->desarrolladores = $request->input('desarrolladores');
      $proyecto->objetivo = $request->input('objetivo');
      $proyecto->descripcion = $request->input('descripcion');
      $proyecto->resultados = $request->input('resultados');
      $proyecto->slug = time();
      $proyecto->save();

      return redirect()->route('ProyectosAcademicos')->with('status','Inserción Exitosa');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        return view('/admin/menu-academicos/proyectos/view-proyectos-academicos', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($proyectos)
    {
        $proyecto = Proyecto::where('slug', '=', $proyectos)->firstOrFail();
             return view('/admin/menu-academicos/proyectos/edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $proyectos)
    {
          $validator = Validator::make($request->all(), [
    'aplicacion' => 'required|string',
    'image' => 'required|mimes:jpeg,png,bmp,tiff,gif',
    'proyecto' => 'required|string',
    'desarrolladores' => 'required|string',
    'objetivo' => 'required|string',
    'descripcion' => 'required|string',
    'resultados' => 'required|string',
    ]);

    if ($validator->fails()) {
        return redirect('/ProyectosAcademicos/'.$proyectos->slug.'/edit')
                    ->withErrors($validator)
                    ->withInput($request->all());
    }

    else
    {
        $proyecto = Proyecto::where('slug', '=', $proyectos)->firstOrFail();
            $proyecto->fill($request->except('image'));
      if ($request->hasFile('image'))
      {
        $file_path =public_path().'/images/proyectos/'.$proyecto->newimage;
        if(file_exists($file_path))
        {
          unlink($file_path);
        }

        $file = $request->file('image');
        $name2 = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/proyectos/',$name2);
        $proyecto->newimage = $name2;
      }

      $proyecto->aplicacion = $request->input('aplicacion');
      $proyecto->proyecto = $request->input('proyecto');
      $proyecto->desarrolladores = $request->input('desarrolladores');
      $proyecto->objetivo = $request->input('objetivo');
      $proyecto->descripcion = $request->input('descripcion');
      $proyecto->resultados = $request->input('resultados');
      $proyecto->slug = time();
      $proyecto->save();

      return redirect()->route('ProyectosAcademicos')->with('status','Actualización Exitosa');
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
   $proyecto = Proyecto::where('slug', '=', $slug)->firstOrFail();
   $file_path =public_path().'/images/proyectos/'.$proyecto->newimage;
    if(file_exists($file_path))
    {
      unlink($file_path);
    }
    $proyecto->delete();

        return redirect()->route('ProyectosAcademicos')->with('status','Eliminación Exitosa');
}
}
