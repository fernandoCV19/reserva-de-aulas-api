<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DocenteSeeder extends Seeder
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
            'cod_SIS' => 199900,
            'nombres' => 'Pedro',
            'apellidos' => 'Lopez Aguilar',
            'celular' => '7777777',
            'contrasenia' => 'prueba123',
            'email' => 'email@gmail.com'
        ]);
    }
}
