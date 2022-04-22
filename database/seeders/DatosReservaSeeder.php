<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatosReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datos_reservas')->insert([
            'id' => 1,
            'numero_estimado_estudiantes' => 100,
        ]);
    }
}
