<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;


Route::post('/notificarRechazo', [MailController::class, "sendEmailNotificacionRechazo"]);
Route::post('/notificarAceptacion', [MailController::class, "sendEmailNotificacionAceptado"]);

Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});