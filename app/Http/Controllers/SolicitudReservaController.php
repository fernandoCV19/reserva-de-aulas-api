<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolicitudReserva;

class SolicitudReservaController extends Controller
{
  
    public function actualizarEstado(Request $request){
        $solicitud = SolicitudReserva::findOrFail($request-> idSolicitud);
        $solicitud->estado = 'rechazado';
        $solicitud -> save();
        return $solicitud;
    }
}
