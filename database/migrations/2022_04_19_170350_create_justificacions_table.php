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
        Schema::create('justificacions', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('datos_reserva_id', 36);
            $table->string('justificacion', 124);

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
        Schema::dropIfExists('justificacions');
    }
}
