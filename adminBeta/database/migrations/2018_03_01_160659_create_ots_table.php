<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('otsiebel',15)->nullable();
            $table->unsignedInteger('id_tipoot')->unsigned();
            $table->foreign('id_tipoot')->references('id')->on('tipoots');
            $table->string('comentario',200)->nullable();
            $table->date('fechaprog');
            $table->string('jornada',2);

            $table->unsignedInteger('id_cuenta')->unsigned();
            $table->unsignedInteger('id_unidad')->unsigned();

            $table->string('comentariounidad',300)->nullable();
            //Eliminado por que existe ot estado id
            // $table->tinyInteger('estado');
             $table->unsignedInteger('id_otstado')->unsigned();

            $table->foreign('id_cuenta')->references('id')->on('cuentas');
            $table->foreign('id_unidad')->references('id')->on('unidades');
             $table->foreign('id_otstado')->references('id')->on('otstados');


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
        Schema::dropIfExists('ots');
    }
}
