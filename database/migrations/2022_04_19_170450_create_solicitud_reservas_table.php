<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_reservas', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('estado', 10);
            $table->timestamp('fecha_creacion');
            $table->string('datos_reserva_id');
            
            $table->primary('id');
            $table->unique('id');
        
            $table->foreign('datos_reserva_id')->references('id')->on('datos_reservas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_reservas');
    }
}
