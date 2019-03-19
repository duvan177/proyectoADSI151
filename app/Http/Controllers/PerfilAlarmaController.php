<?php

namespace App\Http\Controllers;

use App\PerfilAlarma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilAlarmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        

        $perfilAlarma = PerfilAlarma::all(); 
        return $perfilAlarma -> where('id','=',4);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PerfilAlarma  $perfilAlarma
     * @return \Illuminate\Http\Response
     */
    public function show(PerfilAlarma $perfilAlarma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PerfilAlarma  $perfilAlarma
     * @return \Illuminate\Http\Response
     */
    public function edit(PerfilAlarma $perfilAlarma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PerfilAlarma  $perfilAlarma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerfilAlarma $perfilAlarma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PerfilAlarma  $perfilAlarma
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerfilAlarma $perfilAlarma)
    {
        //
    }

    
}
