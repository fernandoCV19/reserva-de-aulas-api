<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NotificacionesParaPruebasSeeder extends Seeder
{
    

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prueba = DB::table('materias')->select('id')->where('codigo', '=', '2010010' )->first()->id;
        $docente1 = DB::table('grupos')->select('docente_id')->where('materia_id', '=', $prueba )->where('nombre', 1)->first()->docente_id;
        $docente2 = DB::table('grupos')->select('docente_id')->where('materia_id', '=', $prueba )->where('nombre', 2)->first()->docente_id;
        $docente3 = DB::table('grupos')->select('docente_id')->where('materia_id', '=', $prueba )->where('nombre', 3)->first()->docente_id;
        $docente4 = DB::table('grupos')->select('docente_id')->where('materia_id', '=', $prueba )->where('nombre', 4)->first()->docente_id;
        $docente5 = DB::table('grupos')->select('docente_id')->where('materia_id', '=', $prueba )->where('nombre', 5)->first()->docente_id;

        DB::table('notificacions')->insert([
            'id' => Str::uuid() -> toString(),
            'mensaje' => 'La solicitud de reserva que hizo ha sido aceptada',
            'fecha' => now(),
            'docente_id' => $docente1

        ]);

        DB::table('notificacions')->insert([
            'id' => Str::uuid() -> toString(),
            'mensaje' => 'La solicitud de reserva ha sido realizada con exito',
            'fecha' => now(),
            'docente_id' => $docente2

        ]);
        DB::table('notificacions')->insert([
            'id' => Str::uuid() -> toString(),
            'mensaje' => 'La solicitud de reserva que hizo ha sido aceptada',
            'fecha' => now(),
            'docente_id' => $docente3

        ]);
        DB::table('notificacions')->insert([
            'id' => Str::uuid() -> toString(),
            'mensaje' => 'La solicitud de reserva ha sido realizada con exito',
            'fecha' => now(),
            'docente_id' => $docente4

        ]);
        DB::table('notificacions')->insert([
            'id' => Str::uuid() -> toString(),
            'mensaje' => 'La solicitud de reserva que hizo ha sido aceptada',
            'fecha' => now(),
            'docente_id' => $docente5

        ]);
        DB::table('notificacions')->insert([
            'id' => Str::uuid() -> toString(),
            'mensaje' => 'La solicitud de reserva que hizo ha sido rechazada',
            'fecha' => now(),
            'docente_id' => $docente1

        ]);
        DB::table('notificacions')->insert([
            'id' => Str::uuid() -> toString(),
            'mensaje' => 'La solicitud de reserva que hizo ha sido rechazada',
            'fecha' => now(),
            'docente_id' => $docente2

        ]);
        DB::table('notificacions')->insert([
            'id' => Str::uuid() -> toString(),
            'mensaje' => 'La solicitud de reserva que hizo ha sido rechazada',
            'fecha' => now(),
            'docente_id' => $docente3

        ]);
        DB::table('notificacions')->insert([
            'id' => Str::uuid() -> toString(),
            'mensaje' => 'La solicitud de reserva ha sido realizada con exito',
            'fecha' => now(),
            'docente_id' => $docente4

        ]);

        DB::table('notificacions')->insert([
            'id' => Str::uuid() -> toString(),
            'mensaje' => 'La solicitud de reserva ha sido realizada con exito',
            'fecha' => now(),
            'docente_id' => $docente5

        ]);
    }
}
