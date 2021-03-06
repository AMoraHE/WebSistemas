<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Proyecto;
use Illuminate\Support\Facades\DB;
use App\ProyectoGaleria;

class ProyectoController extends Controller
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
        $proyectos = Proyecto::orderBy('id', 'DESC')->paginate(5);

        $imagenes = DB::table('proyecto_galerias')->join('proyectos', 'proyecto_galerias.proySlug', '=', 'proyectos.slug')->select('proyecto_galerias.*')->get();

        return view('/admin/menu-academicos/proyectos/view-proyectos-academicos', compact('proyectos', 'imagenes'));
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

    public function agregar($slug)
    {
        $identificador = $slug;
        $imagenes = ProyectoGaleria::where('proySlug', '=', $slug)->get();

        return view('/admin/menu-academicos/proyectos/agregar-img-galeria', compact('imagenes', 'identificador'));
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
    
    'imagen' => 'required|mimes:jpeg,png,bmp,tiff,gif|max:1024',
    'proyecto' => 'required|string',
    'desarrolladores' => 'required|string',
    'descripcion' => 'required|string', 
    ], [
            'imagen.required' => 'Se requiere que seleccione un archivo en formato JPEG, PNG, BMP, TIFF, GIF',
            'imagen.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
            'imagen.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 1 MB (1024 KB)',
            'proyecto.required' => 'Se requiere que ingrese el nombre del proyecto',
            'proyecto.string' => 'El nombre ingresado contiene caracteres no válidos',
            'desarrolladores.required' => 'Se requiere que ingrese los nombres de los integrantes',
            'desarrolladores.string' => 'Los nombres ingresados contienen caracteres no válidos',
            'descripcion.required' => 'Se requiere que ingrese la descripción del proyecto',
            'descripcion.string' => 'La descripción ingresada contiene caracteres no válidos',
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

      $proyecto->proyecto = $request->input('proyecto');
      $proyecto->desarrolladores = $request->input('desarrolladores');
      $proyecto->descripcion = $request->input('descripcion');
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
    'image' => 'mimes:jpeg,png,bmp,tiff,gif|max:1024',
    'proyecto' => 'required|string',
    'desarrolladores' => 'required|string',
    'descripcion' => 'required|string',
   
    ], [
            'image.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
            'image.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 1 MB (1024 KB)',
            'proyecto.required' => 'Se requiere que ingrese el nombre del proyecto',
            'proyecto.string' => 'El nombre ingresado contiene caracteres no válidos',
            'desarrolladores.required' => 'Se requiere que ingrese los nombres de los integrantes',
            'desarrolladores.string' => 'Los nombres ingresados contienen caracteres no válidos',
            'descripcion.required' => 'Se requiere que ingrese la descripción del proyecto',
            'descripcion.string' => 'La descripción ingresada contiene caracteres no válidos',
        ]);

    if ($validator->fails()) {
        return redirect('/ProyectosAcademicos/'.$proyectos.'/edit')
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

     
      $proyecto->proyecto = $request->input('proyecto');
      $proyecto->desarrolladores = $request->input('desarrolladores');
      $proyecto->descripcion = $request->input('descripcion');
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
        $imagen = ProyectoGaleria::where('proySlug', '=', $slug)->get();

        foreach ($imagen as $image )
        {
            $oldFile = public_path().'/images/proyectos/'.$image->imagen;
            if(file_exists($oldFile))
            {
                unlink($oldFile);
            }
        }

        $file_path =public_path().'/images/proyectos/'.$proyecto->newimage;
        if(file_exists($file_path))
        {
            unlink($file_path);
        }

        ProyectoGaleria::where('proySlug', '=', $slug)->delete();
        $proyecto->delete();

        return redirect()->route('ProyectosAcademicos')->with('status','Eliminación Exitosa');
}
}
