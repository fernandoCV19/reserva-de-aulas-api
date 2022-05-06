<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\DatosReserva;
use App\Models\SolicitudReserva;

class ReservaController extends Controller
{
    /**
     * @OA\Post(
     *      path= "/reserva/crearReserva/{idSolicitud}",
     *      summary =  "Creacion de una reserva apartir de una solicitud de reserva",
     *      tags = {"Reservas"},
     *      @OA\Parameter(
     *          name="idSolicitud",
     *          description="Id de la Solicitud de Reserva",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),    
     *      
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * 
     */
    public function crearReserva(Request $request, $idSolicitud)
    {    
        $idDatos = SolicitudReserva::find($idSolicitud)->datos_reserva_id;
        
        $reserva = new Reserva();
        $reserva -> datos_reserva_id = $idDatos;
        $reserva -> fecha_creacion = now();
        $reserva -> save();

        return $reserva;   
    }
    /**
     * @OA\Get(
     *      path= "/reserva/{idReserva}",
     *      summary =  "Obtencion de una reserva por id",
     *      tags = {"Reservas"},
     *      @OA\Parameter(
     *          name="idReserva",
     *          description="Id de la Reserva",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),    
     *      
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * 
     */
    public function getReservaById($idReserva) {
        return Reserva::find($idReserva);
    }
    /**
     * @OA\Get(
     *      path= "/reserva/aulas/{idReserva}",
     *      summary =  "Obtencion de aulas apartir de un id de reserva",
     *      tags = {"Reservas"},
     *      @OA\Parameter(
     *          name="idReserva",
     *          description="Id de la Reserva",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),    
     *      
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * 
     */
    public function getAulas($idReserva){
        $idDatos = Reserva::find($idReserva)->datos_reserva_id;
        $aulas = DatosReservaController::getAulasDatosReserva($idDatos);
        return $aulas;
    }

    /**
     * @OA\Get(
     *      path= "/reserva",
     *      summary =  "Obtencion de todas las reservas actuales",
     *      tags = {"Reservas"},
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * 
     */
    public function obtenerReservas()
    {
        $reserva = Reserva::all();
        return $reserva;
    }    
}
