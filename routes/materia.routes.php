<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Aula;
use App\Http\Controllers\MateriaController;


Route::get('/docentes/{idMateria}', [MateriaController::class, "getDocentes"]);
//Route::get('/{idAula}',[SolicitudReservaController::class, "getSolicitudPorId"]);
Route::get('/grupos/{idMateria}',[MateriaController::class, "getGrupos"]);
Route::get('/{idMateria}',[MateriaController::class, " getMateriaPorId"]);

Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});