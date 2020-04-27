<?php

namespace App\Http\Controllers; 

use Validator;
use App\reticula;
use Illuminate\Http\Request;

class ReticulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reticulas = reticula::orderBy('id', 'DESC')->paginate(5);

        return view('admin.menu-conocenos.reticula.view-reticula', compact('reticulas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu-conocenos.reticula.agregar-reticula');
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
            'programa' => 'required|string',
            'plan' => 'required|string',
            'especialidad' => 'required|string',
            'doc' => 'required|mimetypes:application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/vnd.ms-powerpoint,application/msword,application/vnd.ms-excel|max:3072'
        ], [
            'titulo.required' => 'Se requiere que ingrese un título para la retícula',
            'titulo.string' => 'El título ingresado contiene caracteres no válidos',
            'programa.required' => 'Se requiere que ingrese el nombre del programa para la retícula',
            'programa.string' => 'El nombre del programa contiene caracteres no válidos',
            'plan.required' => 'Se requiere que ingrese el nombre del plan para la retícula',
            'plan.string' => 'El nombre del plan contiene caracteres no válidos',
            'especialidad.required' => 'Se requiere que ingrese el nombre de la especialidad para la retícula',
            'especialidad.string' => 'El nombre de la especialidad contiene caracteres no válidos',
            'doc.required' => 'Se requiere que seleccione un archivo en formato PDF, WORD, EXCEL, POWERPOINT',
            'doc.mimetypes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: PDF, WORD, EXCEL, POWERPOINT',
            'doc.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 3 MB (3072 KB)'
        ]);

        if ($validator->fails()) {
            return redirect('/Crear Reticula')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $reticula = new reticula();

            if ($request->hasFile('doc'))
            {
                $file = $request->file('doc');
                $name = time().$file->getClientOriginalName();
                $file->move(public_path().'/docs/ret/',$name);
                $reticula->documento = $name;
            }

            $reticula->titulo = $request->input('titulo');
            $reticula->programa = $request->input('programa');
            $reticula->plan = $request->input('plan');
            $reticula->especialidad = $request->input('especialidad');
            $reticula->slug = time();
            $reticula->save();

            return redirect()->route('reticula')->with('status','Registro Exitoso');
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
        $reticula = reticula::where('slug', '=', $slug)->firstOrFail();

        $name = $reticula->documento;

        return response()->file('docs/ret/'.$name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($slug)
    {
        $reticula = reticula::where('slug', '=', $slug)->firstOrFail();

        $name = $reticula->documento;

        return response()->download('docs/ret/'.$name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $reticula = reticula::where('slug', '=', $slug)->firstOrFail();

        return view('admin.menu-conocenos.reticula.editar-reticula', compact('reticula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string',
            'programa' => 'required|string',
            'plan' => 'required|string',
            'especialidad' => 'required|string',
            'doc' => 'mimetypes:application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/vnd.ms-powerpoint,application/msword,application/vnd.ms-excel|max:3072',
        ], [
            'titulo.required' => 'Se requiere que ingrese un título para la retícula',
            'titulo.string' => 'El título ingresado contiene caracteres no válidos',
            'programa.required' => 'Se requiere que ingrese el nombre del programa para la retícula',
            'programa.string' => 'El nombre del programa contiene caracteres no válidos',
            'plan.required' => 'Se requiere que ingrese el nombre del plan para la retícula',
            'plan.string' => 'El nombre del plan contiene caracteres no válidos',
            'especialidad.required' => 'Se requiere que ingrese el nombre de la especialidad para la retícula',
            'especialidad.string' => 'El nombre de la especialidad contiene caracteres no válidos',
            'doc.mimetypes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: PDF, WORD, EXCEL, POWERPOINT',
            'doc.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 3 MB (3072 KB)'
        ]);

        if ($validator->fails()) {
            return redirect('/VerReticula/'.$slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $reticula = reticula::where('slug', '=', $slug)->firstOrFail();

            if ($request->hasFile('doc'))
            {
                $oldFile = public_path().'/docs/ret/'.$reticula->documento;
                if(file_exists($oldFile))
                {
                    unlink($oldFile);
                }

                $file = $request->file('doc');
                $name = time().'-'.$file->getClientOriginalName();
                $file->move(public_path().'/docs/ret/',$name);
                $reticula->documento = $name;
            }

            $reticula->titulo = $request->input('titulo');
            $reticula->programa = $request->input('programa');
            $reticula->plan = $request->input('plan');
            $reticula->especialidad = $request->input('especialidad');
            $reticula->save();

            return redirect()->route('reticula')->with('status','Actualización Exitosa');
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
        $reticula = reticula::where('slug', '=', $slug)->firstOrFail();

        $oldFile = public_path().'/docs/ret/'.$reticula->documento;
        if(file_exists($oldFile))
        {
            unlink($oldFile);
        }

        $reticula->delete();
        
        return redirect()->route('reticula')->with('status','Eliminación Exitosa');
    }
}
