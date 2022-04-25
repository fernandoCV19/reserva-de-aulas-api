<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\SolicitudReserva;
use Illuminate\Support\Facades\DB;

use Exception;

class SolicitudReservaController extends Controller
{
    public function crearSolitud(Request $request)
    {
        $datos_reserva = DatosReservaController::crearDatosReserva($request);
        
        $solicitud_reserva  = new SolicitudReserva();
        $solicitud_reserva ->estado ="PENDIENTE";
        $solicitud_reserva ->fecha_creacion = now();
        $solicitud_reserva ->datos_reserva_id = $datos_reserva->id;

        $solicitud_reserva->save();

        return $solicitud_reserva;
    }

    public function getSolicitudPorId(Request $request){
        $solicitud =  SolicitudReserva::findOrFail($request->idSolicitud);
        return response()->json($solicitud);
    }


    public function actualizarEstado(Request $request){
        $solicitud = SolicitudReserva::findOrFail($request-> idSolicitud);
        $solicitud->estado = 'rechazado';
        $solicitud -> save();
        return $solicitud;
    }

    public function getPendientesPorAntiguedad(){
        return SolicitudReserva::where("estado", "PENDIENTE")
                               ->orderBy('fecha_creacion','ASC')
                               ->get();
    }

    public function getPendientesPorProximidad(){
        $solicitud=DB::table('datos_reservas')
        ->join('solicitud_reservas', function ($join) {
            $join->on('solicitud_reservas.datos_reserva_id',"=","datos_reservas.id")
            -> where([["datos_reservas.fecha",">=", now()],["estado", "=", "PENDIENTE"]]);  
        })
        -> orderBy("fecha", "ASC")
        -> get();
        
        return $solicitud;
    }
}
