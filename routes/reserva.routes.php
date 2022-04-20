<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Reserva;
use App\Http\Controllers\ReservaController;


Route::post('/respuesta-solicitud/{idDatos}', [ReservaController::class, "crearReserva"]);
Route::get('/', [ReservaController::class, "obtenerReservas"]);
Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});