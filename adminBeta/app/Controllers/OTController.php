<?php

namespace App\Http\Controllers;
use App\Tipoot;
use App\Cuenta;
use Illuminate\Http\Request;
use  App\Ot;
use Validator;
use Illuminate\Validation\Rule;
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



    public function store(Request $request){
    /*https://itsolutionstuff.com/post/laravel-5-ajax-request-validation-exampleexample.html*/

            //Input
             $datos = $request->all();

                 //mensajes de error
             $messages = [
                          'id_tipoot.required' => 'El campo Tipo OT esta vacio, completelo por favor.',
                          'id_tipoot.numeric' => 'El campo Tipo OT debe ser un numero.',
                          'fechaprog.required' => 'El campo Fecha esta vacio, completelo por favor.',
                          'fechaprog.date' => 'El campo Fecha Programada contiene formato invalido yyyy-mm-dd.',
                          'jornada.required' => 'El campo Jornada esta vacio, completelo por favor.',
                          'jornada.string' => 'El campo jornada debe contener solo valores como AM - PM',
                          'jornada.max' => 'El campo jornada debe contener solo valores como AM - PM',
                          'cuenta.requiered' => 'El campo cuenta es obligatorio.',
                          'cuenta.string' => 'El campo Cuenta  ser una cadena de caracteres',
                          'cuenta.max' => 'El campo Cuenta  debe contener un maximo de 12 caracteres.',
                          'unidad.requiered' => 'El campo unidad es obligatorio.',
                          'unidad.string' => 'El campo unidad  ser una cadena de caracteres',
                          'unidad.max' => 'El campo unidad  debe contener un maximo de 12 caracteres.',
                          'id_otestado.requiered' => 'El campo estado es obligatorio.',
                          'id_otestado.max' => 'El campo estado permite un maximo de 2 valor numerico.',
                          'id_otestado.numeric' => 'El campo estado solo permite valores numericos.',
                          'siebel.max' => 'El campo siebel permite un maximo de 12 caracteres.',
                          'siebel.string' => 'El campo siebel permite solo valores tipo texto.',
                          'comentario.max' => 'El campo comentario permite un maximo de 200 caracteres.',
                          'comentario.string' => 'El campo comentario permite solo valores texto',
                          'comentariounidad.max' => 'El campo comentario unidad permite un maximo de 300 caracteres.',
                          'comentariounidad.string' => 'El campo comentario unidad permite solo valores texto',
                          'tipificacion.max' => 'El campo tipificacion  permite un maximo de 50 caracteres.',
                          'tipificacion.string' => 'El campo tipificacion permite solo valores texto',
                          'ot.max' => 'El campo OT  permite un maximo de 12 caracteres.',
                          'ot.string' => 'El campo OT  permite solo valores texto',
                ];

               //Validacion
              $validator = Validator::make($datos, [
                'id_tipoot'            =>    'required | numeric',
                'siebel'               =>    'string  | max:12 ' ,
                'comentario'           =>    'string  | max:200 ',
                'comentariounidad'     =>    'string  | max:300 ' ,
                'fechaprog'            =>    'required | date',
                'jornada'              =>    'required | string  |max:2',
                'cuenta'               =>    'required | string  |max:12',
                'unidad'               =>    'required | string  |max:12',
                'id_otstado'           =>   'required | numeric |max:2',
                'tipificacion'         =>   'string | max:50',
                'ot'                    =>   'string | max:12',

              ],  $messages );

              if ($validator->passes()) {

                    return response()->json(['success'=>'El registro fue guardado']);
               }

               return response()->json(['error'=>$validator->errors()->all()]);


}


     /* @param  int  $id
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
