<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            'id' => 1,
            'nombre' => '1',
            'docente_id' => '1',
            'materia_id' => '1'
        ]);

        DB::table('grupos')->insert([
            'id' => 2,
            'nombre' => '2',
            'docente_id' => '1',
            'materia_id' => '1'
        ]);
    }
}
