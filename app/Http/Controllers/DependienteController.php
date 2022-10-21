<?php

namespace App\Http\Controllers;

use App\Models\Dependiente;
use Illuminate\Http\Request;

class DependienteController extends Controller
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
        return view('dependientes.create');
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
     * @param  \App\Models\Dependiente  $dependiente
     * @return \Illuminate\Http\Response
     */
    public function show(Dependiente $dependiente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dependiente  $dependiente
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependiente $dependiente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dependiente  $dependiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dependiente $dependiente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dependiente  $dependiente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependiente $dependiente)
    {
        //
    }
}
