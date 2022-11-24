<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Inscripcion;
use App\Models\Grupo;
use App\Models\Curso;
use App\Models\Dependiente;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->nivel==0){
            $inscripciones = Inscripcion::all();
        }else{
            $dependientes = Auth::user()->dependientes;
            $inscripciones=Inscripcion::whereIn('dependiente_id',$dependientes->pluck('id'))->get();
           
        }
        $data['inscripciones']=$inscripciones;
        return view('inscripciones.index',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dependientes = Dependiente::all();
        $data['dependientes']=$dependientes;
        $grupos = Grupo::all();
        $data['grupos']=$grupos;
        $cursos = Curso::all();
        $data['cursos']=$cursos;
        return view('inscripciones.create',$data);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form=$request->except (["_token"]);
       $grupo_id=$form['grupo_id'];
       $grupo=Grupo::find($grupo_id); 
       $form['curso_id']=$grupo->curso->id;
        
       //dd($form);
        $inscripcion=Inscripcion::create($form);
  
        return redirect()->route('home')->with('status','Inscripcion exitosa');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function show(Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscripcion $inscripcion)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscripcion $inscripcion)
    {
        if ($inscripcion->delete()){
            $msj='Borrado exitosamente';
        }else{
            $msj='Ocurrio un error';
        } 
        return redirect()->route('inscripcion.index')->with('status',$msj);
    }
}
