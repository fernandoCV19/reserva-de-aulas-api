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
            'id' => 1,
            'nombre' => '691F',
            'ubicacion' => 'Edificio nuevo',
            'capacidad' => 100,
            'descripcion' => 'Aula comun'
        ]);

        DB::table('aulas')->insert([
            'id' => 2,
            'nombre' => '692F',
            'ubicacion' => 'Edificio nuevo',
            'capacidad' => 50,
            'descripcion' => 'Aula comun'
        ]);

        DB::table('aulas')->insert([
            'id' => 3,
            'nombre' => '693F',
            'ubicacion' => 'Edificio nuevo',
            'capacidad' => 150,
            'descripcion' => 'Aula comun'
        ]);
    }
}
