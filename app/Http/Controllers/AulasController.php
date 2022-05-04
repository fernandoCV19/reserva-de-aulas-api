<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;
use Illuminate\Support\Facades\DB;

class AulasController extends Controller
{
    public function getTodasAulas(){
        return Aulas::all();
    }
    public function getPendientes(){
        $aulasOcupadas=DB::table('solicitud_reservas')
        ->join("datos_reservas", "datos_reservas.id","=", "solicitud_reservas.datos_reserva_id")
        ->join("aula_datos_reserva","aula_datos_reserva.datos_reserva_id", "=", "solicitud_reservas.datos_reserva_id")
        ->join("aulas", "aulas.id","=", "aula_datos_reserva.aula_id")
        ->join("datos_reserva_periodo","datos_reserva_periodo.datos_reserva_id", "=", "solicitud_reservas.datos_reserva_id")
        ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
        ->where([["estado", "PENDIENTE"], ["fecha", request("fecha")]])
        ->get();

        return $aulasOcupadas;
    }
    public function getDisponibles(){        
        $aulasOcupadas=DB::table('aula_datos_reserva')
        ->join('aulas','aula_datos_reserva.aula_id',"=","aulas.id")
        ->join('datos_reserva_periodo',
                'datos_reserva_periodo.datos_reserva_id',"=","aula_datos_reserva.datos_reserva_id")
        ->join('datos_reservas','datos_reservas.id',"=","aula_datos_reserva.datos_reserva_id")
        ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
        ->where("fecha", request("fecha"))
        ->get();
        $aulas=DB::table(DB::raw('aulas, periodos'))
            //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
            -> orderBy('nombre',"ASC")
            -> orderBy('hora_inicio')
            -> get();
        $aulasDisponibles = array();
        $bandera =false;
        for ($j=0; $j < sizeof($aulas); $j++) { 
            for ($i=0; $i < sizeof($aulasOcupadas); $i++) { 
                          
               if($aulasOcupadas[$i]->nombre == $aulas[$j]->nombre && 
               $aulasOcupadas[$i]->hora_inicio == $aulas[$j]->hora_inicio){
                   $bandera = true;
               }
           }
           if($bandera == false){
                array_push($aulasDisponibles, $aulas[$j]);
           }
           else {
               $bandera = false;
           }
        }
        return  $aulasDisponibles;
    }

    public function crearAula(Request $request){
        $aula = new Aula();
        $aula -> capacidad = $request -> capacidad;
        $aula -> nombre = $request -> nombre;
        $aula -> ubicacion = $request -> ubicacion;
        $aula -> descripcion = $request -> descripcion;

        $aula -> save();
        return $aula;
    }
}
