<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTecnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomtecnico',50);
            $table->string('apetecnico',50);
            $table->date('fechanac');
            $table->string('direccion',50);
            $table->string('dui',11);
            $table->string('contactos',50);
            $table->string('email',20);
            $table->date('fechaing');
            $table->date('fechafin');
            $table->string('observeciones',200);
            $table->tinyInteger('estado');
             $table->unsignedInteger('id_unidad')->unsigned();
            $table->foreign('id_unidad')->references('id')->on('unidades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tecnicos');
    }
}
