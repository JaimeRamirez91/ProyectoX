<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDtequiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtequipos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_modeloequipo')->unsigned();
            $table->foreign('id_modeloequipo')->references('id')->on('modeloequipos');
             $table->string('serie',15);

             $table->unsignedInteger('id_ot')->unsigned();
              $table->foreign('id_ot')->references('id')->on('ots');

              $table->unsignedInteger('id_accion')->unsigned();
              $table->foreign('id_accion')->references('id')->on('acciones');
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
        Schema::dropIfExists('dtequipos');
    }
}
