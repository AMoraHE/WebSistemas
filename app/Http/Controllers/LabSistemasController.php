<?php

namespace App\Http\Controllers;

use Validator;
use App\Infraestructura;
use App\imagenLab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LabSistemasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infras = Infraestructura::where('slug', 'sistemas')->get();

        $imagenes = DB::table('imagen_labs')->join('infraestructuras', 'imagen_labs.lab_id', '=', 'infraestructuras.slug')->where('infraestructuras.slug', 'sistemas')->select('imagen_labs.*')->get();

        return view('/admin/menu-inf/lab-sistemas/show', compact('infras', 'imagenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $identificador = 'sistemas';
        return view('/admin/menu-inf/lab-sistemas/create', compact('identificador'));
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
        'imgInicio' => 'required|mimes:jpeg,png,bmp,tiff,gif',
        'nombre' => 'required|string',
        'descripcion' => 'required|string',
        'responsable' => 'required|string',
        'correo' => 'required|string|email',
        'slug' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/Lab-Sistemas/create')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $infra = new Infraestructura();

            if($request->hasFile('imgInicio'))
            {
                $file = $request->file('imgInicio');
                $name = time().$file->getClientOriginalName();
                $infra->imgInicio = $name; 
                $file->move(public_path().'/images/infra/',$name);
            }
    
            $infra->nombre = $request->input('nombre');
            $infra->descripcion = $request->input('descripcion');
            $infra->responsable = $request->input('responsable');
            $infra->correo = $request->input('correo');
            $infra->slug = $request->input('slug');

            $infra->save();
                
            return redirect('/Lab-Sistemas')->with('status', 'Registro exitoso');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($infras)
    {
        $infra = Infraestructura::where('slug', '=', $infras)->firstOrFail();
        return view('/admin/menu-inf/lab-sistemas/edit', compact('infra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $infras)
    {
        $validator = Validator::make($request->all(), [
        'imgInicio' => 'mimes:jpeg,png,bmp,tiff,gif',
        'nombre' => 'required|string',
        'descripcion' => 'required|string',
        'responsable' => 'required|string',
        'correo' => 'required|string|email',
        ]);

        if ($validator->fails()) {
            return redirect('/Lab-Sistemas/'.$infras.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $infra = Infraestructura::where('slug', '=', $infras)->firstOrFail();
            $infra->fill($request->except('imgInicio'));

            if($request->hasFile('imgInicio')){
                $oldFile = public_path().'/images/infra/'.$infra->imgInicio;
                if(file_exists($oldFile))
                {
                    unlink($oldFile);
                }

                $file = $request->file('imgInicio');
                $name = time().$file->getClientOriginalName();
                $infra->imgInicio = $name; 
                $file->move(public_path().'/images/infra/',$name);
            }
            
            $infra->save();

            return redirect('/Lab-Sistemas')->with('status', 'Actualización exitosa');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagen = imagenLab::where('id', '=', $id)->firstOrFail();

        $oldFile = public_path().'/images/infra/'.$imagen->imagen;
        if(file_exists($oldFile))
        {
            unlink($oldFile);
        }

        $imagen->delete();

        return redirect('/Lab-Sistemas')->with('status','Eliminación Exitosa');
    }
}
