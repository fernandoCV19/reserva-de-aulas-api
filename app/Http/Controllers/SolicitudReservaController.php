<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\SolicitudReserva;
use Illuminate\Support\Facades\DB;

use Exception;

class SolicitudReservaController extends Controller
{
    /**
     * @OA\Post(
     *      path= "/solicitud-reserva",
     *      summary =  "Creacion de una solicitud de reserva",
     *      tags = {"Solicitud de reservas"},
     * 
     *       @OA\RequestBody(
     *         @OA\JsonContent(
     *              @OA\Property(
     *                  property="numero_estimado", 
     *                  type="int"
     *               ),
     *               @OA\Property(
     *                  property="fecha", 
     *                  type="date"
     *               ),
     *               @OA\Property(
     *                  property="aulasId", 
     *                  type="array",
     *                  @OA\Items(
     *                      type="string"
     *                  ),
     *               ),
     *               @OA\Property(
     *                  property="gruposId", 
     *                  type="array",
     *                  @OA\Items(
     *                      type="string"
     *                  ),
     *               ),
     *               @OA\Property(
     *                  property="justificacionesLista", 
     *                  type="array",
     *                  @OA\Items(
     *                      type="string"
     *                  ),
     *               ),
     *               @OA\Property(
     *                  property="periodosId", 
     *                  type="array",
     *                  @OA\Items(
     *                      type="string"
     *                  ),
     *               ),
     *         ),
     *        
     *    ),
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
    /**
     * @OA\Get(
     *      path= "/solicitud-reserva/{idSolicitud}",
     *      summary =  "Obtencion de una solicitud de reserva apartir de un id",
     *      tags = {"Solicitud de reservas"},
     * 
     *      @OA\Parameter(
     *          name="idSolicitud",
     *          description="Id de la Solicitud de Reserva",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),     
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
    public function getSolicitudPorId(Request $request){
        $solicitud =  SolicitudReserva::findOrFail($request->idSolicitud);
        return response()->json($solicitud, 200,[]);
    }
    
    public function getEstado(Request $request){
        $solicitud = SolicitudReserva::findOrFail($request-> idSolicitud);
        $estadoSolicitud = ["estado"=>$solicitud->estado]; ;
        return response()->json($estadoSolicitud,200,[]);
    }
    /**
     * @OA\Put(
     *      path= "/solicitud-reserva/cambio-estado/{idSolicitud}",
     *      summary =  "Actualizacion del estado de una solicitud de reserva a rechazado",
     *      tags = {"Solicitud de reservas"},
     *      @OA\Parameter(
     *          name="idSolicitud",
     *          description="Id de la Solicitud de Reserva",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      )
     * )
     * 
     * 
     */
    public function actualizarEstado(Request $request){
        $solicitud = SolicitudReserva::findOrFail($request-> idSolicitud);
        $solicitud->estado = 'RECHAZADO';
        $solicitud -> save();
        return $solicitud;
    }

    /**
     * @OA\Get(
     *      path= "/solicitud-reserva/pendientes",
     *      summary =  "Obtencion de todas las solicitudes pendientes",
     *      tags = {"Solicitud de reservas"},
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
    public function getPendientes(){
        return SolicitudReserva::where("estado", "PENDIENTE")
                               ->get();
    }
    /**
     * @OA\Get(
     *      path= "/solicitud-reserva/antiguedad",
     *      summary =  "Obtencion de todas las solicitudes pendientes filtradas por antiguedad",
     *      tags = {"Solicitud de reservas"},
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      )
     * )
     * 
     * 
     */
    public function getPendientesPorAntiguedad(){
        return SolicitudReserva::where("estado", "PENDIENTE")
                               ->orderBy('fecha_creacion','ASC')
                               ->get();
    }

    /**
     * @OA\Get(
     *      path= "/solicitud-reserva/proximos",
     *      summary =  "Obtencion de todas las solicitudes pendientes filtradas por fecha mas proxima",
     *      tags = {"Solicitud de reservas"},
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      )
     * )
     * 
     * 
     */
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
