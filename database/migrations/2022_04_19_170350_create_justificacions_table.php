<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJustificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JUSTIFICACION', function (Blueprint $table) {
            $table->string('id_datos_reserva', 36);
            $table->string('justificacion', 124);

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
        Schema::dropIfExists('JUSTIFICACION');
    }
}
