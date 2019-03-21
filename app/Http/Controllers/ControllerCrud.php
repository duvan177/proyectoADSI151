<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\componente;
use App\Http\Requests;
use App\componentesb;
class ControllerCrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datos=componente::all();
       $datosb=componentesB::all();
       return view('Gestion', compact('datos','datosb') ); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos= new componentesb();
        $datos->nombre= $request->input('Nombre');
        $datos->TipoComp= $request->input('TipoComp');
        $datos->Estado= $request->input('Estado');
        $datos->save();

        


        return redirect('componentes');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $datos= componentesb::where('id',$id)->first();
        return view ('Modificar',['datos'=>$datos]);
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos =componentesb::find($id);

        $datos->Nombre = $request->input('Nombre');  
        $datos->TipoComp = $request->input('TipoComp');  
        $datos->Estado = $request->input('Estado');  

         $datos->save();
         return redirect('componentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
    componentesb::find($id)->delete();
    return redirect('componentes');
    }
}
