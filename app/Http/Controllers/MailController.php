<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SolicitudNotificacionMail;

class MailController extends Controller
{
    /**
     * @OA\Post(
     *      path= "/mail/notificarRechazo",
     *      summary =  "Envio email rechazo",
     *      tags = {"E-Mail"},
     * 
     *       @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="email", 
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
    public function sendEmailNotificacionRechazo()
    {
        Mail::raw("El siguiente email es para notificarle que la solicitud de reserva ha sido rechazada.", function ($message) {
            $message->to(request('email'))
                    ->subject("Solicitud de reserva de aulas");
        });
        if (Mail::failures()) {
            $mensaje =['mensaje'=>"Error en el envio"];
            return response()->json($mensaje, 500,[]);     
        }
        else{ 
            $mensaje =['mensaje'=>"Envio con exito"];
            return response()->json($mensaje, 200,[]);
        }
        
    }

    /**
     * @OA\Post(
     *      path= "/mail/notificarAceptacion",
     *      summary =  "Envio email aceptacion",
     *      tags = {"E-Mail"},
     * 
     *       @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="email", 
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
    public function sendEmailNotificacionAceptado()
    {
        Mail::raw("El siguiente email es para notificarle que la solicitud de reserva ha sido aceptada, por tanto, la reserva fue efectuada.", function ($message) {
            $message->to(request('email'))
                    ->subject("Solicitud de reserva de aulas");
        });
        if (Mail::failures()) {
            $mensaje =['mensaje'=>"Erro en el envio"];
            return response()->json($mensaje, 500,[]);     
        }
        else{ 
            $mensaje =['mensaje'=>"Envio con exito"];
            return response()->json($mensaje, 200,[]);
        }
        
    }

    /**
     * @OA\Post(
     *      path= "/mail/notificacionPersonalizada",
     *      summary =  "Envio email personalizado",
     *      tags = {"E-Mail"},
     * 
     *       @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="email", 
     *                  type="string",
     *               ),
     *              @OA\Property(
     *                  property="asunto", 
     *                  type="string",
     *               ),
     *              @OA\Property(
     *                  property="mensaje", 
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
    public function sendEmailPersonalizado(Request $request)
    {
        Mail::raw($request->mensaje, function ($message) {
            $message->to(request('email'))
                    ->subject($request->asunto);
        });
        if (Mail::failures()) {
            $mensaje =['mensaje'=>"Erro en el envio"];
            return response()->json($mensaje, 500,[]);
        }
        else{ 
            $mensaje =['mensaje'=>"Envio con exito"];
            return response()->json($mensaje, 200,[]);
        }

    }
}
