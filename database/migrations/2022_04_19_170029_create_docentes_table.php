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
        Schema::create('docentes', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('cod_SIS', 20);
            $table->string('nombre', 200);
            $table->string('celular', 30);
            $table->string('contrasenia', 30);
            $table->string('email', 30);
            $table->boolean('activado')->default(FALSE);
        
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
        Schema::dropIfExists('docentes');
    }
}
