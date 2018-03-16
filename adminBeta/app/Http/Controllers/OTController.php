<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Ot;
class OTController extends Controller
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
     
    //Deben ir todos los campos, los que no captures mandalos vacios a menos que sean llaves foraneas 
    //No debes incluir el id, caso contrario habra error y posiblemete no se inserte    
    try{
       $ots = new Ot; 
       $ots->id_tipoot          = $request->id_tipoot; 
       $ots->id_cuenta          = $request->id_cuenta; 
       $ots->otsiebel           = $request->otsiebel; 
       $ots->comentario         = $request->comentario; 
       $ots->fechaprog          = $request->fechaprog;
       $ots->jornada            = $request->jornada;
       $ots->comentariounidad   = $request->comentariounidad;
       $ots->estado             = $request->estado;
       $ots->id_unidad          = $request->id_unidad;
       $ots->id_otstado         = $request->id_otstado;
       $ots->save(); 
    }
    catch(\Exception $e){
       // do task when error
        $error = $e->getMessage();   // insert query
    }
        
    return response()->json([
                     //ver si hay errores
                      //              'message'   =>  "$error",
                                     'message'   =>"este es el dato" . $request->id_tipoot ."-". $request->id_tipoot ."-".$request->otsiebel."-".  $request->comentario ."-". $request->fechaprog ."-". $request->jornada ."-". $request->comentariounidad ."-". $request->estado."-".$request->id_unidad."-".$request->id_otstado,
                                ]);   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
