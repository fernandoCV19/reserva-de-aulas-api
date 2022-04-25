<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosReservaController;
use App\Models\DatosReserva;



Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});
Route::get('/aulas/{idDatosReserva}', [DatosReservaController::class, "getAulasDatosReserva"]);
Route::delete('/aulas/{idDatosReserva}', [DatosReservaController::class, "deleteAulas"]);
Route::get('/{idDatosReserva}', [DatosReservaController::class, "getDatosReservaById"]);



//Route::get('/', [DatosReservaController::class, "obtenerDatosReservas"]);
Route::get('/', function (){
    $dr = DatosReserva::findOrFail(1);
    return $dr ->aulas;
});


