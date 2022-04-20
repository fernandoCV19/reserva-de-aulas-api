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
        Schema::create('GRUPO', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nombre',10);
            $table->string('id_docente',36);
            $table->string('id_materia',36);

            $table->foreign('id_docente')->references('id')->on('DOCENTE');
            $table->foreign('id_materia')->references('id')->on('MATERIA');

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
        Schema::dropIfExists('GRUPO');
    }
}
