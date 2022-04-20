<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aulas')->insert([
            'id' => Str::random(36),
            'nombre' => '691F',
            'ubicacion' => 'Edificio nuevo',
            'capacidad' => 100,
            'descripcion' => 'Aula comun'
        ]);

        DB::table('aulas')->insert([
            'id' => Str::random(36),
            'nombre' => '692F',
            'ubicacion' => 'Edificio nuevo',
            'capacidad' => 100,
            'descripcion' => 'Aula comun'
        ]);
    }
}
