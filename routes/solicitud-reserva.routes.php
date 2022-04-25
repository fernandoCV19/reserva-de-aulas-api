<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\SolicitudReserva;
use App\Http\Controllers\SolicitudReservaController;


Route::post('/', [SolicitudReservaController::class, "crearSolitud"]);
Route::get('/antiguedad', [SolicitudReservaController::class, "getPendientesPorAntiguedad"]);
Route::get('/proximos', [SolicitudReservaController::class, "getPendientesPorProximidad"]);
Route::get('/busqueda/{idSolicitud}',[SolicitudReservaController::class, "getSolicitudPorId"]);
Route::put('/cambio-estado/{idSolicitud}', [SolicitudReservaController::class, "actualizarEstado"]);

Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});