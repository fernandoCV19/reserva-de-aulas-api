<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RESERVA', function (Blueprint $table) {
            $table->uuid('id');
            $table->dateTime('fecha_creacion');
            $table->string('id_datos_reserva');
            
            $table->primary('id');
            $table->unique('id');
        
            $table->foreign('id_datos_reserva')->references('id')->on('DATOS_RESERVA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RESERVA');
    }
}
