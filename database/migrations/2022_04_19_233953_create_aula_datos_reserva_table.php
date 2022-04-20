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
            $table->string('datos_reserva_id', 36);
            $table->string('aula_id', 36);

            $table->primary('id');
            $table->unique('id');
            
            $table->foreign('datos_reserva_id')->references('id')->on('datos_reservas');
            $table->foreign('aula_id')->references('id')->on('aulas');
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
