<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LLenadoDeLaBaseDeDatosTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aulas')->insert([
            'id' => 1,
            'nombre' => '691F',
            'ubicacion' => 'Edificio nuevo',
            'capacidad' => 100,
            'descripcion' => 'Aula comun'
        ]);

        DB::table('aulas')->insert([
            'id' => 2,
            'nombre' => '692F',
            'ubicacion' => 'Edificio nuevo',
            'capacidad' => 50,
            'descripcion' => 'Aula comun'
        ]);

        DB::table('aulas')->insert([
            'id' => 3,
            'nombre' => '693F',
            'ubicacion' => 'Edificio nuevo',
            'capacidad' => 150,
            'descripcion' => 'Aula comun'
        ]);

        DB::table('docentes')->insert([
            'id' => 1,
            'nombre' => 'Pedro Lopez Aguilar',
            'cod_SIS' => '',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);

        DB::table('materias')->insert([
            'id' => 1,
            'nombre' => 'Introduccion a la programacion',
            'codigo' => '20001234'
        ]);

        DB::table('grupos')->insert([
            'id' => 1,
            'nombre' => '1',
            'docente_id' => '1',
            'materia_id' => '1'
        ]);

        DB::table('grupos')->insert([
            'id' => 2,
            'nombre' => '2',
            'docente_id' => '1',
            'materia_id' => '1'
        ]);

        DB::table('datos_reservas')->insert([
            'id' => 1,
            'fecha' => now(),
            'numero_estimado' => 100,
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => 1,
            'estado' => 'PENDIENTE',
            'fecha_creacion' => now(),
            'datos_reserva_id' => 1
        ]);

        DB::table('justificacions')->insert([
            "id" => "1",
            'justificacion' => 'Examen',
            'datos_reserva_id' => '1',
        ]);

        DB::table('justificacions')->insert([
            "id" => "2",
            'justificacion' => 'Trabajo grupal',
            'datos_reserva_id' => '1',
        ]);

        DB::table('reservas')->insert([
            'id' => 1,
            'fecha_creacion' => now(),
            'datos_reserva_id' => 1
        ]);

        DB::table('periodos')->insert([
            'id' => 1,
            'hora_inicio' => now(),
            'hora_fin' => now()
        ]);

        DB::table('administradors')->insert([
            'id' => 1,
            'nombre' => 'Pedro Juan',
            'contrasenia' => 'Adm'
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => 1,
            'datos_reserva_id' => 1,
            'aula_id' => 1
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => 1,
            'datos_reserva_id' => 1,
            'grupo_id' => 1
        ]);
        
        DB::table('datos_reserva_periodo')->insert([
            'id' => 1,
            'datos_reserva_id' => 1,
            'periodo_id' => 1
        ]);
    }
}
