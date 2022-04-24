<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administradors')->insert([
            'id' => 1,
            'nombre' => 'Pedro Juan',
            'contrasenia' => 'Adm'
        ]);
    }
}
