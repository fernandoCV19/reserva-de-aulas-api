<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\DatosReserva;

class ReservaController extends Controller
{
    public function crearReserva(Request $request)
    {
        $idDatos = $request->idDatos;
        $reserva = new Reserva();
        $reserva -> id_datos_reserva = $idDatos;
        $reserva -> fecha_creacion = now();
        $reserva -> save();

        return $reserva;
        
    }
    public function getAulas(Request $request){
        $user = DatosReserva::findOrFail($request->id);
        return $user;
    }
    public function obtenerReservas()
    {
        $reserva = Reserva::all();
        return $reserva;
    }    
}
