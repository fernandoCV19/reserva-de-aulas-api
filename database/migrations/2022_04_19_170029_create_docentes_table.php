<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DOCENTE', function (Blueprint $table) {
            $table->uuid('id');
            $table->integer('cod_SIS');
            $table->string('nombres', 30);
            $table->string('apellidos', 30);
            $table->string('celular', 30);
            $table->string('contrasenia', 30);
        
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
        Schema::dropIfExists('DOCENTE');
    }
}
