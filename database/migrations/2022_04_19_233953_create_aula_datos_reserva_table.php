<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAulaDatosReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aula_datos_reserva', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('id_datos_reserva', 36);
            $table->string('id_aula', 36);

            $table->primary('id');
            $table->unique('id');
            
            $table->foreign('id_datos_reserva')->references('id')->on('DATOS_RESERVA');
            $table->foreign('id_aula')->references('id')->on('AULA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aula_datos_reserva');
    }
}
