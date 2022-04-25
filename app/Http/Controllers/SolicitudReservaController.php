<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\SolicitudReserva;
use Illuminate\Support\Facades\DB;

use Exception;

class SolicitudReservaController extends Controller
{
    public function store(Request $request)
    {
        $solicitud_reserva  = new SolicitudReserva();
        $solicitud_reserva ->id = $request->id;
        $solicitud_reserva ->estado = $request->estado;
        $solicitud_reserva ->fecha_creacion = $request->fecha_creacion;
        $solicitud_reserva ->datos_reserva_id = $request->datos_reserva_id;

        $solicitud_reserva->save();
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
