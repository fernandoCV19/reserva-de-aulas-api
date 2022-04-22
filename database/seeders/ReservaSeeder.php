<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservas')->insert([
            'id' => 1,
            'fecha_creacion' => now(),
            'datos_reserva_id' => 1
        ]);
    }
}
