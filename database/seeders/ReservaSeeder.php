<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
