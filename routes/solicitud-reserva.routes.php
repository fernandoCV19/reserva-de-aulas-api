<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\SolicitudReserva;
use App\Http\Controllers\SolicitudReservaController;


Route::put('/cambio-estado/{idSolicitud}', [SolicitudReservaController::class, "actualizarEstado"]);

Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});