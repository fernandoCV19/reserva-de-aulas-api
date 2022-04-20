<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SolicitudNotificacionMail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $detail=[
            'title' => "Esta es una prueba de un envio de correo",
            'body' => "Si lees esto es una prueba exitosa"
        ];
        //Mail::to("dilanantezana@gmail.com")->send(new SolicitudNotificacionMail($detail));
        Mail::raw("Nuevo correo", function ($detail) {
            $detail->to("dilanantezana@gmail.com")
            ->subject("Esta es una prueba de un envio de correo")
            ->setBody('Si lees esto es una prueba exitosa');
        });
        
        return "enviado con exito";
    }
}
