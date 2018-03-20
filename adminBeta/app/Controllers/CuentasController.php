<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Cliente;
use  \App\Nodo;
use  \App\Zona;

class CuentasController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
          
                       //Consulta   
                      $datos = \App\Cuenta::join("Clientes","Cuentas.id_cliente","=","clientes.id")->join("Nodos","Cuentas.id_nodo","=","nodos.id")->join("Rutas","Nodos.id_ruta","=","rutas.id")->join("Zonas","Rutas.id_zona","=","zonas.id")->where('Cuentas.codcuentaservicio','=', $id)->get();
                      
              
                      foreach($datos as $dato){
                                //obtenemos nombre del cliente  
                                $nomCli     = $dato->nomcliente;
                                $apeCli     = $dato->apecliente;
                                $dirCli     = $dato->direccion;
                                $contCli    = $dato->contactos;
                                $nodoCli    = $dato->nomnodo;
                                $nomRutaCli = $dato->nomruta; 
                                $nomZona    = $dato->nomzona;    
                                       
                                    
                        }

                        
                    
                       
                   
                        //response
                       return response()->json([
                                    'message'   =>  " Datos procesados con exito",
                                    'nombre'    =>   $nomCli,
                                    'apellido'  =>   $apeCli,
                                    'direccion' =>   $dirCli,
                                    'contactos' =>   $contCli,
                                    'nodo'      =>   $nodoCli,
                                    'ruta'      =>   $nomRutaCli, 
                                    'zona'      =>   $nomZona, 
                                ]);       
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
