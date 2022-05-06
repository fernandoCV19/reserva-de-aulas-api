<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class NotificacionTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docentes')->insert([
            'id' => 1,
            'cod_SIS' => '',
            'nombre' => 'ESTEBAN QUITO RAMIREZ',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);

        DB::table('notificacions')->insert([
            'id' => 1,
            'mensaje' => "Este es el mensaje de la notificacion 1",
            'fecha' => now(),
            'docente_id' => 1
        ]);
    }
}
