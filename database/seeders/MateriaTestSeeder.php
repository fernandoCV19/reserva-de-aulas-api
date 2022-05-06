<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MateriaTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            'id' => 1,
            'nombre' => 'INTRODUCCION A LA PROGRAMACION',
            'codigo' => '2010001'
        ]);

        DB::table('materias')->insert([
            'id' => 2,
            'nombre' => 'CALCULO NUMERICO',
            'codigo' => '2008052'
        ]);


        DB::table('docentes')->insert([
            'id' => 1,
            'cod_SIS' => '',
            'nombre' => 'ARZABE MAURE JOSE OMAR',
            'celular' => '',
            'contrasenia' => '',
            'email' => '',
        ]);
        
        DB::table('docentes')->insert([
            'id' => 2,
            'cod_SIS' => '',
            'nombre' => 'ROJAS ARZE RUBEN DARIO',
            'celular' => '',
            'contrasenia' => '',
            'email' => '',
        ]);

        DB::table('docentes')->insert([
            'id' => 3,
            'cod_SIS' => '',
            'nombre' => 'PEDRO GONZALEZ ZAPATA',
            'celular' => '',
            'contrasenia' => '',
            'email' => '',
        ]);


        DB::table('grupos')->insert([
            'id' => 1,
            'nombre' => '1' ,
            'docente_id' => 1 ,
            'materia_id' => 1 ,
        ]);

        DB::table('grupos')->insert([
            'id' => 2,
            'nombre' => '2' ,
            'docente_id' => 2 ,
            'materia_id' => 1 ,
        ]);

        DB::table('grupos')->insert([
            'id' => 3,
            'nombre' => '3' ,
            'docente_id' => 3 ,
            'materia_id' => 1 ,
        ]);

        DB::table('grupos')->insert([
            'id' => 4,
            'nombre' => '1',
            'docente_id' => 1 ,
            'materia_id' => 2 ,
        ]);

        DB::table('grupos')->insert([
            'id' => 5,
            'nombre' => '2' ,
            'docente_id' => 2 ,
            'materia_id' => 2 ,
        ]);
    }
}
