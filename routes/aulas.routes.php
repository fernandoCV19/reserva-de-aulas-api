<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Aula;
use App\Http\Controllers\AulasController;


Route::post('/disponibles', [AulasController::class, "getDisponibles"]);
//Route::get('/{idAula}',[SolicitudReservaController::class, "getSolicitudPorId"]);
Route::post('/pendientes',[AulasController::class, "getPendientes"]);
Route::post('/',[AulasController::class, "crearAula"]);
Route::post('/areas',[AulasController::class, "filtrarAulasPorAreas"]);
Route::post('/cantidad',[AulasController::class, "filtrarAulasPorCantidad"]);
Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});