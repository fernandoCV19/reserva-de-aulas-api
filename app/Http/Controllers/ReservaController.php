<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\DatosReserva;
use App\Models\SolicitudReserva;

class ReservaController extends Controller
{
    public function crearReserva(Request $request, $idSolicitud)
    {    
        $idDatos = SolicitudReserva::find($idSolicitud)->datos_reserva_id;
        
        $reserva = new Reserva();
        $reserva -> datos_reserva_id = $idDatos;
        $reserva -> fecha_creacion = now();
        $reserva -> save();

        return $reserva;   
    }
    public function getReservaById($idReserva) {
        return Reserva::find($idReserva);
    }
    public function getAulas($idReserva){
        $idDatos = Reserva::find($idReserva)->datos_reserva_id;
        $aulas = DatosReservaController::getAulasDatosReserva($idDatos);
        return $aulas;
    }
    public function obtenerReservas()
    {
        $reserva = Reserva::all();
        return $reserva;
    }    
}
