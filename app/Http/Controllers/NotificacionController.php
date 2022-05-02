<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class NotificacionController extends Controller
{
    public function crearNotificacion(Request $request)
    {
        $notificacion  = new Notificacion();
        $notificacion  -> mensaje = $request -> mensajeNotificacion;
        $notificacion  ->fecha = now();
        $notificacion  -> docente_id = $request->id_docente ;

        $notificacion ->save();

        return $notificacion ;
    }
    
    public function getNotificacionPorId(Request $request){
        $notificacion =  Notificacion::findOrFail($request->idNotificacion);
        return response()->json($notificacion, 200,[]);
    }
}
