<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;


Route::get('/notificar', [MailController::class, "sendEmail"]);

Route::get("/user", function () {
    $mensaje =['mensaje'=>"Hola mundo"];
    return response()->json($mensaje, 200,[]);
});