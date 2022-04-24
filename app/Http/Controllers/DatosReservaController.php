<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosReserva;
use Illuminate\Support\Facades\DB;

class DatosReservaController extends Controller
{
    public function getDatosReservaById(){
        $id = request("idDatosReserva");
        return DatosReserva::findOrFail($id);
    }
    public function obtenerDatosReservas()
    {
        $reserva = DatosReserva::all();
        return $reserva;
    }
    public function getAulasDatosReserva(Request $request, $idDatosReserva){
        $aulas=DB::table('aulas')
            ->join('aula_datos_reserva', function ($join) {
                $join->on('aula_datos_reserva.datos_reserva_id',"=","aulas.id")
                ->where('aula_datos_reserva.datos_reserva_id', '=', request("idDatosReserva"));
                
            })
            ->get();
        $datosReserva = DatosReserva::find($idDatosReserva);
        $aulas_datos_reserva = ["datos_reserva"=>$datosReserva, "aulas"=>$aulas];        
        return  response()->json($aulas_datos_reserva, 200,[]);
    }
    public function deleteAulas(Request $request, $idDatosReserva){
        $aulas = $request->aulasId;
    
        foreach($aulas as $aulaId){
           DB::table('aula_datos_reserva')
            ->where([['aula_id', "=",$aulaId],["datos_reserva_id", "=", $idDatosReserva]])->delete();
        }
    }
}
