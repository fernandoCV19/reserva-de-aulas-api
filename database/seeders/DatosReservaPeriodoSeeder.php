<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatosReservaPeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datos_reserva_periodo')->insert([
            'id' => 1,
            'datos_reserva_id' => 1,
            'periodo_id' => 1
        ]);
    }
}
