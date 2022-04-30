<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Aula;
use App\Http\Controllers\AulasController;


Route::get('/disponibles', [AulasController::class, "getDisponibles"]);
//Route::get('/{idAula}',[SolicitudReservaController::class, "getSolicitudPorId"]);
Route::get('/pendientes',[AulasController::class, "getPendientes"]);
Route::post('/',[AulasController::class, "crearAula"]);
Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});