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
            $table->string('datos_reserva_id', 36);
            $table->string('periodo_id', 36);

            $table->primary('id');
            $table->unique('id');
            
            $table->foreign('datos_reserva_id')->references('id')->on('datos_reservas');
            $table->foreign('periodo_id')->references('id')->on('periodos');
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
