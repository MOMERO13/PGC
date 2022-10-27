<?php

namespace App\Http\Controllers;

use App\Models\Costo;
use App\Models\Curso;
use Illuminate\Http\Request;

class CostoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        $data['cursos']=$cursos;
        return view('costos.create',$data);
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
        dd($request->request);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Costo  $costo
     * @return \Illuminate\Http\Response
     */
    public function show(Costo $costo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Costo  $costo
     * @return \Illuminate\Http\Response
     */
    public function edit(Costo $costo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Costo  $costo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Costo $costo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Costo  $costo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Costo $costo)
    {
        //
    }
}
