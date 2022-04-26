<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SolicitudNotificacionMail;

class MailController extends Controller
{
    public function sendEmailNotificacionRechazo()
    {
        Mail::raw("El siguiente email es para notificarle que la solicitud de reserva ha sido rechazada", function ($message) {
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
    public function sendEmailNotificacionAceptado()
    {
        Mail::raw("El siguiente email es para notificarle que la solicitud de reserva ha sido aceptada por tanto la reserva fue efectuada", function ($message) {
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
    public function sendEmailPersonalizado(Request $request)
    {
        Mail::raw($request->mensaje, function ($message) {
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
}
