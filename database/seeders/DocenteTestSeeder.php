<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class DocenteTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('docentes')->insert([
            'id' => 1,
            'cod_SIS' => '',
            'nombre' => 'Fernando Cuenca Vargas',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);
    }
}
