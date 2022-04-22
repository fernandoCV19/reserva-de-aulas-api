<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JustificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('justificacions')->insert([
            'justificacion' => 'Examen',
            'datos_reserva_id' => '1',
        ]);

        DB::table('justificacions')->insert([
            'justificacion' => 'Trabajo grupal',
            'datos_reserva_id' => '1',
        ]);
    }
}
