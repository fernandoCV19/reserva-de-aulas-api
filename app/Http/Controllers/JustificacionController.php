<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Justificacion;

class JustificacionController extends Controller
{
    public function crearJustificacion($justificacion, $idDatoReserva){
    
        $justificacionCreado =  new Justificacion();
        $justificacionCreado -> datos_reserva_id = $idDatoReserva;
        $justificacionCreado -> justificacion = $justificacion;
        
        $justificacionCreado -> save();
        return $justificacion;
    }
}
