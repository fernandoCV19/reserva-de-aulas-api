<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosReserva;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatosReservaController extends Controller
{
    public function crearDatosReserva(Request $request){        
        $datos_reserva = new DatosReserva();
        $datos_reserva -> numero_estimado = $request->numero_estimado;
        $datos_reserva -> fecha = $request-> fecha;
        $datos_reserva -> save();
        

        $aulas = $request->aulasId;    
        
        foreach($aulas as $aulaId){
            $aulas_datos = DB::table("aula_datos_reserva")->insert([
                "id"=>Str::uuid()->toString(), 
                "datos_reserva_id" => $datos_reserva->id,
                "aula_id"=>$aulaId
            ]);
        }
        
        $grupos = $request->gruposId;
        foreach($grupos as $grupoId){
            $grupos_datos = DB::table("datos_reserva_grupo")->insert([
                "id"=>Str::uuid()->toString(), 
                "datos_reserva_id" => $datos_reserva->id,
                "grupo_id"=>$grupoId
            ]);
        }

        $justificaciones = $request->justificacionesLista;
        foreach($justificaciones as $mensaje){
            $justificacionCreada = 
            JustificacionController::crearJustificacion($mensaje,$datos_reserva->id);
        }
        
        $periodos = $request -> periodosId;
        foreach ($periodos as $periodoId) {
            $datos_periodo = DB::table("datos_reserva_periodo")->insert([
                "id"=>Str::uuid()->toString(), 
                "datos_reserva_id" => $datos_reserva->id,
                "periodo_id"=>$periodoId
            ]);
        }
        return $datos_reserva;
    }
    public function getDatosReservaById(){
        $id = request("idDatosReserva");
        return DatosReserva::findOrFail($id);
    }
    public function obtenerDatosReservas()
    {
        $reserva = DatosReserva::all();
        return $reserva;
    }
    public function getAulasDatosReserva($idDatosReserva){        
        $aulas=DB::table('aulas')
            ->join('aula_datos_reserva', function ($join) use($idDatosReserva) {
                $join->on('aula_datos_reserva.datos_reserva_id',"=","aulas.id")
                ->where('aula_datos_reserva.datos_reserva_id', '=', $idDatosReserva);
            })
            ->get();
        $datosReserva = DatosReserva::find($idDatosReserva);
        $aulas_datos_reserva = ["datos_reserva"=>$datosReserva, "aulas"=>$aulas];        
        return  response()->json($aulas_datos_reserva, 200,[]);
        //return DatosReserva::find($idDatosReserva)->aulas()->get();

    }
    public function deleteAulas(Request $request, $idDatosReserva){
        $aulas = $request->aulasId;    
        foreach($aulas as $aulaId){
           DB::table('aula_datos_reserva')
            ->where([['aula_id', "=",$aulaId],["datos_reserva_id", "=", $idDatosReserva]])->delete();
        }
    }
}
