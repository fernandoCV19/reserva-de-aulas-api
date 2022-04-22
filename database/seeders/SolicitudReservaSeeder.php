<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SolicitudReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solicitud_reservas')->insert([
            'id' => 1,
            'estado' => 'pendiente',
            'fecha_creacion' => now(),
            'datos_reserva_id' => 1
        ]);
    }
}
