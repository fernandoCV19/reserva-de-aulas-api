<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\SolicitudReserva;

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
}
