<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MATERIA', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nombre', 40);
            $table->integer('codigo');
        
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
        Schema::dropIfExists('MATERIA');
    }
}
