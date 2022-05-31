<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
class NotificacionController extends Controller
{
    /**
     * @OA\Post(
     *      path= "/notificacion",
     *      summary =  "Creacion de una nueva notificacion de un docente",
     *      tags = {"Notificaciones"},
     * 
     *       @OA\RequestBody(
     *         @OA\JsonContent(
     *              @OA\Property(
     *                  property="mensajeNotificacion", 
     *                  type="string"
     *               ),
     *               @OA\Property(
     *                  property="id_docente", 
     *                  type="string",
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

    public function crearNotificacion(Request $request)
    {
        $notificacion  = new Notificacion();
        $notificacion  -> mensaje = $request -> mensajeNotificacion;
        $notificacion  ->fecha = now();
        $notificacion  -> docente_id = $request->id_docente ;

        $notificacion ->save();

        return $notificacion ;
    }
    /**
     * @OA\Get(
     *      path= "/notificacion/{idNotificacion}",
     *      summary =  "Obtencion de una notificacion apartir de un id",
     *      tags = {"Notificaciones"},
     * 
     *      @OA\Parameter(
     *          name="idNotificacion",
     *          description="Id de la Notificacion",
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
     */
    public function getNotificacionPorId(Request $request){
        $notificacion =  DB::table("notificacions")
                        ->where("notificacions.id","=",$request->idNotificacion)
                        ->get();
        return response()->json($notificacion, 200,[]);
    }
}
