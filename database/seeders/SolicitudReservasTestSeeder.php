<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SolicitudReservasTestSeeder extends Seeder
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

        DB::table('aulas')->insert([
            'id' => 4,
            'nombre' => '692A',
            'ubicacion' => 'Edificio nuevo',
            'capacidad' => 75,
            'descripcion' => 'Aula comun'
        ]);

        DB::table('aulas')->insert([
            'id' => 5,
            'nombre' => '693A',
            'ubicacion' => 'Edificio nuevo',
            'capacidad' => 100,
            'descripcion' => 'Aula comun'
        ]);



        DB::table('datos_reservas')->insert([
            'id' => 1,
            'fecha' => '2022-10-20',
            'numero_estimado' => 100
        ]);

        DB::table('datos_reservas')->insert([
            'id' => 2,
            'fecha' => '2022-10-21',
            'numero_estimado' => 100
        ]);

        DB::table('datos_reservas')->insert([
            'id' => 3,
            'fecha' => '2022-10-22',
            'numero_estimado' => 100
        ]);

        DB::table('datos_reservas')->insert([
            'id' => 4,
            'fecha' => '2022-10-23',
            'numero_estimado' => 100
        ]);



        DB::table('solicitud_reservas')->insert([
            'id' => 1,
            'fecha_creacion' => '2021-01-20',
            'datos_reserva_id' => 1
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => 2,
            'fecha_creacion' => '2021-01-21',
            'datos_reserva_id' => 2
        ]);
        
        DB::table('solicitud_reservas')->insert([
            'id' => 3,
            'fecha_creacion' => '2021-01-22',
            'datos_reserva_id' => 3,
            'estado' => 'RECHAZADO'
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => 4,
            'fecha_creacion' => '2021-01-23',
            'datos_reserva_id' => 4
        ]);



        DB::table('periodos')->insert([
            'id' => 1,
            'hora_inicio' => '9:45',
            'hora_fin' => '11:15'
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => 1,
            'datos_reserva_id' => 1,
            'periodo_id' => 1
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => 2,
            'datos_reserva_id' => 2,
            'periodo_id' => 1
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => 3,
            'datos_reserva_id' => 3,
            'periodo_id' => 1
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => 4,
            'datos_reserva_id' => 4,
            'periodo_id' => 1
        ]);



        DB::table('aula_datos_reserva')->insert([
            'id' => 1,
            'datos_reserva_id' => 1,
            'aula_id' => 1
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => 2,
            'datos_reserva_id' => 1,
            'aula_id' => 2
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => 3,
            'datos_reserva_id' => 1,
            'aula_id' => 3
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => 4,
            'datos_reserva_id' => 2,
            'aula_id' => 4
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => 5,
            'datos_reserva_id' => 3,
            'aula_id' => 5
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => 6,
            'datos_reserva_id' => 4,
            'aula_id' => 5
        ]);


        DB::table('materias')->insert([
            'id' => 1,
            'nombre' => 'INTRODUCCION A LA PROGRAMACION',
            'codigo' => '2010001'
        ]);

        DB::table('docentes')->insert([
            'id' => 1,
            'cod_SIS' => '',
            'nombre' => 'ARZABE MAURE JOSE OMAR',
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
    }
}
