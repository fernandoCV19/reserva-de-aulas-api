<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodos')->insert([
            'id' => 1,
            'hora_inicio' => now(),
            'hora_fin' => now()
        ]);
    }
}
