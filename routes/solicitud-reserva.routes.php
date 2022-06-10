<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\SolicitudReserva;
use App\Http\Controllers\SolicitudReservaController;


Route::post('/', [SolicitudReservaController::class, "crearSolitud"]);
Route::get('/antiguedad', [SolicitudReservaController::class, "getPendientesPorAntiguedad"]);
Route::get('/proximos', [SolicitudReservaController::class, "getPendientesPorProximidad"]);
Route::get('/pendientes', [SolicitudReservaController::class, "getPendientes"]);
Route::get('/estado/{idSolicitud}', [SolicitudReservaController::class, "getEstado"]);
Route::put('/cambio-estado/{idSolicitud}', [SolicitudReservaController::class, "actualizarEstado"]);
Route::get('/{idSolicitud}',[SolicitudReservaController::class, "getSolicitudPorId"]);
Route::get('/estado-aulas/{idSolicitud}', [SolicitudReservaController::class, "estadoAulas"]);
Route::get('/docente-solicitud/{idDocente}', [SolicitudReservaController::class, "getSolicitudesDocentes"]);
Route::put('/eliminar/{idSolicitud}', [SolicitudReservaController::class, "eliminarSolicitud"]);

Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});