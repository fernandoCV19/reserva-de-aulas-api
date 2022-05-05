<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'cod_SIS' => '20001234',
            'nombre' => 'Fernando Cuenca Vargas',
            'celular' => '7777777',
            'contrasenia' => 'prueba123',
            'email' => 'email@gmail.com',
            'activado' => TRUE
        ]);
    }
}
