<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class SolicitudesReservasParaPruebas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aula606 = DB::table('aulas')->select('id')->where('nombre', '=', '606' )->first()->id;
        $aula607 = DB::table('aulas')->select('id')->where('nombre', '=', '607' )->first()->id;
        $aula608 = DB::table('aulas')->select('id')->where('nombre', '=', '608' )->first()->id;
        $aula608A = DB::table('aulas')->select('id')->where('nombre', '=', '608A' )->first()->id;
        $aula608B = DB::table('aulas')->select('id')->where('nombre', '=', '608B' )->first()->id;
        $aula609 = DB::table('aulas')->select('id')->where('nombre', '=', '609' )->first()->id;
        $aula612 = DB::table('aulas')->select('id')->where('nombre', '=', '612' )->first()->id;
        $aula613 = DB::table('aulas')->select('id')->where('nombre', '=', '613' )->first()->id;
        $aula614 = DB::table('aulas')->select('id')->where('nombre', '=', '614' )->first()->id;
        $aula615 = DB::table('aulas')->select('id')->where('nombre', '=', '615' )->first()->id;
        $aula616 = DB::table('aulas')->select('id')->where('nombre', '=', '616' )->first()->id;
        $aula617 = DB::table('aulas')->select('id')->where('nombre', '=', '617' )->first()->id;
        $aula617B = DB::table('aulas')->select('id')->where('nombre', '=', '617B' )->first()->id;
        $aula617C = DB::table('aulas')->select('id')->where('nombre', '=', '617C' )->first()->id;

        $p815945 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '08:15:00' )->first()->id;
        $p9451115 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '09:45:00' )->first()->id;
        $p11151245 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '11:15:00' )->first()->id;
        $p12451415 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '12:45:00' )->first()->id;
        $p14151545 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '14:15:00' )->first()->id;
        $p15451715 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '15:45:00' )->first()->id;
        $p17151845 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '17:15:00' )->first()->id;
        $p18452115 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '18:45:00' )->first()->id;
    
        $prueba = DB::table('materias')->select('id')->where('codigo', '=', '2010010' )->first()->id;

        $grupo1 = DB::table('grupos')->select('id')->where('materia_id', '=', $prueba )->where('nombre', 1)->first()->id;
        $grupo2 = DB::table('grupos')->select('id')->where('materia_id', '=', $prueba )->where('nombre', 2)->first()->id;
        $grupo3 = DB::table('grupos')->select('id')->where('materia_id', '=', $prueba )->where('nombre', 3)->first()->id;
        $grupo4 = DB::table('grupos')->select('id')->where('materia_id', '=', $prueba )->where('nombre', 4)->first()->id;
        $grupo5 = DB::table('grupos')->select('id')->where('materia_id', '=', $prueba )->where('nombre', 5)->first()->id;
        $grupo6 = DB::table('grupos')->select('id')->where('materia_id', '=', $prueba )->where('nombre', 6)->first()->id;
        $grupo7 = DB::table('grupos')->select('id')->where('nombre', '=', '7' )->first()->id;
        $grupo8 = DB::table('grupos')->select('id')->where('nombre', '=', '8' )->first()->id;
        $grupo9 = DB::table('grupos')->select('id')->where('nombre', '=', '9' )->first()->id;
        $grupo10 = DB::table('grupos')->select('id')->where('nombre', '=', '10' )->first()->id;
        $grupo11 = DB::table('grupos')->select('id')->where('nombre', '=', '11' )->first()->id;
        $grupo12 = DB::table('grupos')->select('id')->where('nombre', '=', '12' )->first()->id;


        $idDatosReserva1 = Str::uuid() -> toString(); 

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva1,
            'fecha' => '2022-10-1',
            'numero_estimado' => '200'
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-03-10',
            'datos_reserva_id' => $idDatosReserva1
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva1,
            'aula_id' => $aula606
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva1,
            'grupo_id' => $grupo1
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva1,
            'periodo_id' => $p815945
        ]);


        $idDatosReserva2 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva2,
            'fecha' => '2022-10-1',
            'numero_estimado' => '400'
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-03-7',
            'datos_reserva_id' => $idDatosReserva2
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva2,
            'aula_id' => $aula607
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva2,
            'grupo_id' => $grupo12
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva2,
            'periodo_id' => $p15451715
        ]);
        
        $idDatosReserva3 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva3,
            'fecha' => '2022-10-10',
            'numero_estimado' => '150'
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-03-8',
            'datos_reserva_id' => $idDatosReserva3
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva3,
            'aula_id' => $aula607
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva3,
            'aula_id' => $aula608
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva3,
            'aula_id' => $aula607
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva3,
            'grupo_id' => $grupo9
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva3,
            'periodo_id' => $p14151545
        ]);

        $idDatosReserva4 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva4,
            'fecha' => '2022-10-10',
            'numero_estimado' => '250'
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-03-9',
            'datos_reserva_id' => $idDatosReserva4
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva4,
            'aula_id' => $aula612
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva4,
            'aula_id' => $aula613
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva4,
            'aula_id' => $aula614
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva4,
            'aula_id' => $aula615
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva4,
            'grupo_id' => $grupo8
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva4,
            'periodo_id' => $p11151245
        ]);
        
        $idDatosReserva5 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva5,
            'fecha' => '2022-10-10',
            'numero_estimado' => '200'
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-03-20',
            'datos_reserva_id' => $idDatosReserva5
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva5,
            'aula_id' => $aula609
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva5,
            'grupo_id' => $grupo11
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva5,
            'periodo_id' => $p815945
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva5,
            'periodo_id' => $p9451115
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva5,
            'periodo_id' => $p11151245
        ]);

        $idDatosReserva6 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva6,
            'fecha' => '2022-10-15',
            'numero_estimado' => '100'
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-03-11',
            'datos_reserva_id' => $idDatosReserva6
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva6,
            'aula_id' => $aula617B
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva6,
            'grupo_id' => $grupo5
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva6,
            'periodo_id' => $p14151545
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva6,
            'periodo_id' => $p17151845
        ]);

        $idDatosReserva7 = Str::uuid() -> toString();
        
        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva7,
            'fecha' => '2022-10-15',
            'numero_estimado' => '50'
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-03-1',
            'datos_reserva_id' => $idDatosReserva7
        ]);
        
        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva7,
            'aula_id' => $aula608B
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva7,
            'grupo_id' => $grupo1
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva7,
            'grupo_id' => $grupo2
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva7,
            'grupo_id' => $grupo3
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva7,
            'periodo_id' => $p12451415
        ]);

        $idDatosReserva8 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva8,
            'fecha' => '2022-10-15',
            'numero_estimado' => '250'
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-03-5',
            'datos_reserva_id' => $idDatosReserva8
        ]);
        
        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva8,
            'aula_id' => $aula608B
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva8,
            'grupo_id' => $grupo4
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva8,
            'grupo_id' => $grupo5
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva8,
            'grupo_id' => $grupo6
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva8,
            'periodo_id' => $p815945
        ]);

        $idDatosReserva9 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva9,
            'fecha' => '2022-10-15',
            'numero_estimado' => '500'
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-03-5',
            'datos_reserva_id' => $idDatosReserva9
        ]);
        
        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva9,
            'aula_id' => $aula616
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva9,
            'aula_id' => $aula617
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva9,
            'aula_id' => $aula617B
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva9,
            'grupo_id' => $grupo1
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva9,
            'grupo_id' => $grupo3
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva9,
            'grupo_id' => $grupo5
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva9,
            'periodo_id' => $p12451415
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva9,
            'periodo_id' => $p14151545
        ]);

        $idDatosReserva10 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva10,
            'fecha' => '2022-10-18',
            'numero_estimado' => '300'
        ]);

        DB::table('solicitud_reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-03-7',
            'datos_reserva_id' => $idDatosReserva10
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva10,
            'aula_id' => $aula606
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva10,
            'aula_id' => $aula607
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva10,
            'aula_id' => $aula608
        ]);

        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva10,
            'aula_id' => $aula608A
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva10,
            'grupo_id' => $grupo2
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva10,
            'grupo_id' => $grupo5
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva10,
            'periodo_id' => $p14151545
        ]);
        
        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva10,
            'periodo_id' => $p15451715
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva10,
            'periodo_id' => $p17151845
        ]);
    }
}
