<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AulaDatosReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aula_datos_reserva')->insert([
            'id' => 1,
            'datos_reserva_id' => 1,
            'aula_id' => 1
        ]);
    }
}
