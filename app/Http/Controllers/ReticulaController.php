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
        $reticulas = reticula::all();

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
            'doc' => 'required|mimetypes:application/pdf',
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
            'doc' => 'mimetypes:application/pdf',
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
            $reticula->slug = time();
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
