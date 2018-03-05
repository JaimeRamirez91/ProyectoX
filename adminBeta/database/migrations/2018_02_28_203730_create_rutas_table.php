<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomruta', 50)->unique();
            $table->string('Descripcion', 50);

            $table->unsignedInteger('id_departamento')->unsigned();
            $table->foreign('id_departamento')->references('id')->on('departamentos');
            $table->unsignedInteger('id_tecnologia')->unsigned();
           
            $table->foreign('id_tecnologia')->references('id')->on('tecnologias');
            $table->unsignedInteger('id_zona')->unsigned();
            $table->foreign('id_zona')->references('id')->on('zonas');
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
        Schema::dropIfExists('rutas');
    }
}
