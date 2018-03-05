<?php


use App\Ruta;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class rutaFormController extends Controller{
    		function index(){
    			/* query normal*/
    			/*
		      		$sql = "select r.id,r.id_tecnologia, r.nomruta, d.nomdepto, t.nomtecnologia, z.nomzona from rutas r,tecnologias t, departamentos d, zonas z where (r.id_tecnologia = t.id) and (r.id_departamento = d.id) and (r.id_zona=z.id)";

	            $rutas =DB::select($sql,array(1,20)); 
                */  
	           	 /*elocuent*/
	           	 
	           	 /*con filto*/
	           	 /*
	            $rutas = \App\Ruta::join("Departamentos","Rutas.id_departamento","=","departamentos.id")->where('rutas.id_departamento','=',2)
                    ->get();*/
                 /*sin filtro*/
                 $rutas = \App\Ruta::join("Departamentos","Rutas.id_departamento","=","departamentos.id")->join("Zonas","Rutas.id_zona","=","zonas.id")
                    ->get();
   

	           			
	           // return view('admin', compact('rutas'));   			
	            return view('admin', compact('rutas')); 
    		}
}
