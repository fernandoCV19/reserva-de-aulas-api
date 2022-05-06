<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReservaTestSeeder extends Seeder
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
            'fecha' => '2022-01-19',
            'numero_estimado' => 100
        ]);

        DB::table('reservas')->insert([
            'id' => 1,
            'fecha_creacion' => now(),
            'datos_reserva_id' => 1
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





        DB::table('datos_reservas')->insert([
            'id' => 2,
            'fecha' => '2022-01-19',
            'numero_estimado' => 100
        ]);

        DB::table('reservas')->insert([
            'id' => 2,
            'fecha_creacion' => now(),
            'datos_reserva_id' => 2
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => 2,
            'datos_reserva_id' => 2,
            'periodo_id' => 1
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => 4,
            'datos_reserva_id' => 2,
            'aula_id' => 4
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => 5,
            'datos_reserva_id' => 2,
            'aula_id' => 5
        ]);

        


        DB::table('datos_reservas')->insert([
            'id' => 3,
            'fecha' => '2022-01-19',
            'numero_estimado' => 100
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => 1,
            'fecha_creacion' => now(),
            'datos_reserva_id' => 3
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => 3,
            'datos_reserva_id' => 3,
            'periodo_id' => 1
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => 6,
            'datos_reserva_id' => 3,
            'aula_id' => 4
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => 7,
            'datos_reserva_id' => 3,
            'aula_id' => 5
        ]);
    }
}
