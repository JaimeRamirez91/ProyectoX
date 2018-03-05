<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Ruta extends Model {
  protected $table = 'rutas';
  protected $fillable = ['nomruta' ,'description'];
  protected $guarded = ['id'];
}
