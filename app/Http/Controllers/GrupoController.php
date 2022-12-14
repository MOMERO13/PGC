<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Grupo;
use App\Models\Curso;
use App\Models\Dependiente;
use App\Models\Instructor;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $grupos = Grupo::all();
        $data['grupos']=$grupos;
        //dd($data);
        return view ('grupos.index',$data);
        
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructores = Instructor::all();
        $data['instructores']=$instructores;
        $cursos = Curso::all();
        $data['cursos']=$cursos;
        return view('grupos.create',$data);

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
      //dd($request->request);
      
      $grupo=Grupo::create(
        $request->except(["_token"]));

    return redirect()->route('grupo.index')->with('status','Grupo creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo $grupo)
    {
        //dd(Auth::user());
        $data['grupo']=$grupo;
        if (is_null(Auth::user())) {
            return redirect()->route('login')->with('status','Inicia sesion para inscribirse');
        }else{
            if(Auth::user()->nivel==0){
                $dependientes = Dependiente::all();
            }else{
                $dependientes = Auth::user()->dependientes;
            }
        }
       
        $data['dependientes']=$dependientes;
        return view ('grupos.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupo $grupo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupo $grupo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo $grupo)
    {
    
        if ($grupo->delete()){
            $msj='Grupo borrado exitosamente';
        }else{
            $msj='Ocurrio un error';
        } 
        return redirect()->route('grupo.index')->with('status',$msj);

    }
}
