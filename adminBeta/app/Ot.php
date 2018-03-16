<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ot extends Model
{
	 protected $fillable = [
        'id_tipoot', 'id_cuenta', 'otsiebel', 'comentario',  'fechaprog',  'jornada',  'comentariounidad','estado', 'id_unidad', 'id_otstado', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];
    //
}
