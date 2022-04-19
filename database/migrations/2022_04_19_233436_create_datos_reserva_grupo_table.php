<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosReservaGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_reserva_grupo', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('id_datos_reserva', 36);
            $table->string('id_grupo', 36);

            $table->primary('id');
            $table->unique('id');
            
            $table->foreign('id_datos_reserva')->references('id')->on('DATOS_RESERVA');
            $table->foreign('id_grupo')->references('id')->on('GRUPO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_reserva_grupo');
    }
}
