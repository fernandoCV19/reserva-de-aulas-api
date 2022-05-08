<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Periodo;
use App\Http\Controllers\PeriodoController;

Route::get('/{idPeriodo}',[PeriodoController::class, " getPeriodoPorId"]);

Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});