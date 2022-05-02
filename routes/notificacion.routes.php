<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\NotificacionReserva;
use App\Http\Controllers\NotificacionController;


Route::post('/notificacion', [NotificacionController::class, "crearNotificacion"]);
Route::get('/notificacion/{idSolicitud}',[NotificacionController::class, "getNotificacionPorId"]);


Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});