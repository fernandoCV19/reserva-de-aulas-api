<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class ReservasParaPruebas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aula691A = DB::table('aulas')->select('id')->where('nombre', '=', '691A' )->first()->id;
        $aula691B = DB::table('aulas')->select('id')->where('nombre', '=', '691B' )->first()->id;
        $aula691C = DB::table('aulas')->select('id')->where('nombre', '=', '691C' )->first()->id;
        $aula691D = DB::table('aulas')->select('id')->where('nombre', '=', '691D' )->first()->id;
        $aula691E = DB::table('aulas')->select('id')->where('nombre', '=', '691E' )->first()->id;
        $aula691F = DB::table('aulas')->select('id')->where('nombre', '=', '691F' )->first()->id;
        
        $aula692A = DB::table('aulas')->select('id')->where('nombre', '=', '692A' )->first()->id;
        $aula692B = DB::table('aulas')->select('id')->where('nombre', '=', '692B' )->first()->id;
        $aula692C = DB::table('aulas')->select('id')->where('nombre', '=', '692C' )->first()->id;
        $aula692D = DB::table('aulas')->select('id')->where('nombre', '=', '692D' )->first()->id;
        $aula692E = DB::table('aulas')->select('id')->where('nombre', '=', '692E' )->first()->id;
        $aula692F = DB::table('aulas')->select('id')->where('nombre', '=', '692F' )->first()->id;
        $aula692G = DB::table('aulas')->select('id')->where('nombre', '=', '692G' )->first()->id;
        $aula692H = DB::table('aulas')->select('id')->where('nombre', '=', '692H' )->first()->id;

        $p645815 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '06:45:00' )->first()->id;
        $p815945 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '08:15:00' )->first()->id;
        $p9451115 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '09:45:00' )->first()->id;
        $p11151245 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '11:15:00' )->first()->id;
        $p12451415 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '12:45:00' )->first()->id;
        $p14151545 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '14:15:00' )->first()->id;
        $p15451715 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '15:45:00' )->first()->id;
        $p17151845 = DB::table('periodos')->select('id')->where('hora_inicio', '=', '17:15:00' )->first()->id;
    
        $grupo1 = DB::table('grupos')->select('id')->where('nombre', '=', '1' )->first()->id;
        $grupo2 = DB::table('grupos')->select('id')->where('nombre', '=', '2' )->first()->id;
        $grupo3 = DB::table('grupos')->select('id')->where('nombre', '=', '3' )->first()->id;
        $grupo4 = DB::table('grupos')->select('id')->where('nombre', '=', '4' )->first()->id;
        $grupo5 = DB::table('grupos')->select('id')->where('nombre', '=', '5' )->first()->id;
        $grupo6 = DB::table('grupos')->select('id')->where('nombre', '=', '6' )->first()->id;
        $grupo7 = DB::table('grupos')->select('id')->where('nombre', '=', '7' )->first()->id;
        $grupo8 = DB::table('grupos')->select('id')->where('nombre', '=', '8' )->first()->id;
        $grupo9 = DB::table('grupos')->select('id')->where('nombre', '=', '9' )->first()->id;
        $grupo10 = DB::table('grupos')->select('id')->where('nombre', '=', '10' )->first()->id;
        $grupo11 = DB::table('grupos')->select('id')->where('nombre', '=', '11' )->first()->id;
        $grupo12 = DB::table('grupos')->select('id')->where('nombre', '=', '12' )->first()->id;

        $idDatosReserva1 = Str::uuid() -> toString(); 

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva1,
            'fecha' => '2022-12-1',
            'numero_estimado' => '200'
        ]);

        DB::table('reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-04-10',
            'datos_reserva_id' => $idDatosReserva1
        ]);


        DB::table('aula_datos_reserva')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva1,
            'aula_id' => $aula691A
        ]);

        DB::table('datos_reserva_grupo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva1,
            'aula_id' => $aula691A
        ]);

        DB::table('datos_reserva_periodo')->insert([
            'id' => Str::uuid() -> toString(),
            'datos_reserva_id' => $idDatosReserva1,
            'aula_id' => $aula691A
        ]);

        
        $idDatosReserva2 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva2,
            'fecha' => '2022-12-1',
            'numero_estimado' => '400'
        ]);

        DB::table('reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-04-7',
            'datos_reserva_id' => $idDatosReserva2
        ]);

        
        $idDatosReserva3 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva3,
            'fecha' => '2022-12-10',
            'numero_estimado' => '150'
        ]);

        DB::table('reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-04-8',
            'datos_reserva_id' => $idDatosReserva3
        ]);

        
        $idDatosReserva4 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva4,
            'fecha' => '2022-12-10',
            'numero_estimado' => '250'
        ]);

        DB::table('reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-04-9',
            'datos_reserva_id' => $idDatosReserva4
        ]);

        
        $idDatosReserva5 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva5,
            'fecha' => '2022-12-10',
            'numero_estimado' => '200'
        ]);

        DB::table('reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-04-20',
            'datos_reserva_id' => $idDatosReserva5
        ]);
        

        $idDatosReserva6 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva6,
            'fecha' => '2022-12-15',
            'numero_estimado' => '100'
        ]);

        DB::table('reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-04-11',
            'datos_reserva_id' => $idDatosReserva6
        ]);


        $idDatosReserva7 = Str::uuid() -> toString();
        
        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva7,
            'fecha' => '2022-12-15',
            'numero_estimado' => '50'
        ]);

        DB::table('reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-04-1',
            'datos_reserva_id' => $idDatosReserva7
        ]);
        

        $idDatosReserva8 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva8,
            'fecha' => '2022-12-15',
            'numero_estimado' => '250'
        ]);

        DB::table('reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-04-5',
            'datos_reserva_id' => $idDatosReserva8
        ]);
        

        $idDatosReserva9 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva9,
            'fecha' => '2022-12-15',
            'numero_estimado' => '500'
        ]);

        DB::table('reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-04-5',
            'datos_reserva_id' => $idDatosReserva9
        ]);
        

        $idDatosReserva10 = Str::uuid() -> toString();

        DB::table('datos_reservas')->insert([
            'id' => $idDatosReserva10,
            'fecha' => '2022-12-18',
            'numero_estimado' => '300'
        ]);

        DB::table('reservas')->insert([
            'id' => Str::uuid() -> toString(),
            'fecha_creacion' => '2022-04-7',
            'datos_reserva_id' => $idDatosReserva10
        ]);
    }
}
