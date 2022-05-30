<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosReservaController;
use App\Models\DatosReserva;



Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});
Route::post('/', [DatosReservaController::class, "crearDatosReserva"]);
Route::get('/aulas/{idDatosReserva}', [DatosReservaController::class, "getAulasDatosReserva"]);
Route::delete('/aulas/{idDatosReserva}', [DatosReservaController::class, "deleteAulas"]);
Route::get('/materia/{idDatosReserva}', [DatosReservaController::class, "getMateria"]);
Route::get('/{idDatosReserva}', [DatosReservaController::class, "getDatosReservaById"]);
Route::get('/', [DatosReservaController::class, "obtenerDatosReservas"]);