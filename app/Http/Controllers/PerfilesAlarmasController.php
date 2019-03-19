<?php

namespace App\Http\Controllers;

use App\PerfilesAlarmas;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class PerfilesAlarmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $perfilesyalarmas = PerfilesAlarmas::all();
        return $perfilesyalarmas->where('idUsuario','=',$id);
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
     * @param  \App\PerfilesAlarmas  $perfilesAlarmas
     * @return \Illuminate\Http\Response
     */
    public function show(PerfilesAlarmas $perfilesAlarmas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PerfilesAlarmas  $perfilesAlarmas
     * @return \Illuminate\Http\Response
     */
    public function edit(PerfilesAlarmas $perfilesAlarmas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PerfilesAlarmas  $perfilesAlarmas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerfilesAlarmas $perfilesAlarmas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PerfilesAlarmas  $perfilesAlarmas
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerfilesAlarmas $perfilesAlarmas)
    {
        //
    }
}
