<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
