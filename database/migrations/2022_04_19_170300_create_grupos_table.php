<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nombre',10);
            $table->string('docente_id',36);
            $table->string('materia_id',36);

            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('materia_id')->references('id')->on('materias');

            $table->primary('id');
            $table->unique('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
