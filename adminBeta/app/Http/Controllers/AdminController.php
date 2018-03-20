<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruta;
use App\Otstado;
use App\Tipoot;
use App\Http\Requests;

class AdminController extends Controller{
	
	function index(){	

          $rutas = \App\Ruta::join("Departamentos","Rutas.id_departamento","=","departamentos.id")->join("Zonas","Rutas.id_zona","=","zonas.id")
                  ->get();

	           			
	            //return view('admin', compact('rutas'));   			
	        return view('admin', compact('rutas')); 


	}

	 function AdminDatos(){

                   
            $estados = Otstado::all();
            $otsT = Tipoot::all();

            return view('admin', compact('estados','otsT')); 
	}


	 function Tipos(){

          //  $otsT = Tipoot::all();
            //return view('admin', compact('otsT')); 
	}


}
