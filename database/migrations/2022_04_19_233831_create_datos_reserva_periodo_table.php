<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosReservaPeriodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_reserva_periodo', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('id_datos_reserva', 36);
            $table->string('id_periodo', 36);

            $table->primary('id');
            $table->unique('id');
            
            $table->foreign('id_datos_reserva')->references('id')->on('DATOS_RESERVA');
            $table->foreign('id_periodo')->references('id')->on('PERIODO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_reserva_periodo');
    }
}
