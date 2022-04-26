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
            $table->string('datos_reserva_id', 36);
            $table->string('grupo_id', 36);

            $table->primary('id');
            $table->unique('id');
            
            $table->foreign('datos_reserva_id')->references('id')->on('datos_reservas');
            $table->foreign('grupo_id')->references('id')->on('grupos');
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
