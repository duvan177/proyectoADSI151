<?php

namespace App\Http\Controllers;

use App\ProgramacionComponente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PerfilAlarmas;


class ProgramacionComponenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
    
        
        
       $programacionxcomponente = ProgramacionComponente::all();
        
       $resultado = $programacionxcomponente -> where('idPerfilAlarma','=','38');
       
        return  $resultado ; 
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
     * @param  \App\ProgramacionComponente  $programacionComponente
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramacionComponente $programacionComponente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProgramacionComponente  $programacionComponente
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramacionComponente $programacionComponente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProgramacionComponente  $programacionComponente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramacionComponente $programacionComponente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProgramacionComponente  $programacionComponente
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramacionComponente $programacionComponente)
    {
        //
    }
}
