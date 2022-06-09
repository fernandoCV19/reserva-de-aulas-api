<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Aula;
use App\Http\Controllers\AulasController;


Route::post('/disponibles', [AulasController::class, "getDisponibles"]);
Route::get('/', [AulasController::class, "getTodasAulas"]);
//Route::get('/{idAula}',[SolicitudReservaController::class, "getSolicitudPorId"]);
Route::post('/pendientes',[AulasController::class, "getPendientes"]);
Route::post('/',[AulasController::class, "crearAula"]);
Route::post('/areas',[AulasController::class, "filtrarAulasPorAreas"]);
Route::post('/nombre',[AulasController::class, "filtrarAulasPorNombre"]);
Route::post('/cantidad',[AulasController::class, "filtrarAulasPorCantidad"]);
Route::post('/periodo',[AulasController::class, "filtrarAulasPorPeriodo"]);
Route::post('/estado-aula',[AulasController::class, "aulaEstado"]);
Route::post('/general',[AulasController::class, "filtrarGeneral"]);
Route::post('/sugerenciaReserva',[AulasController::class, "darSugerenciaDeReserva"]);
Route::get('/infoAula',[AulasController::class, "infoAulas"]);
Route::get('/infoAula-ubicacion',[AulasController::class, "infoAulasUbicacion"]);
Route::get('/infoAula-capacidad',[AulasController::class, "infoAulasCapacidad"]);

Route::put('/modificar/{idAula}',[AulasController::class, "modificarAula"]);
Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});