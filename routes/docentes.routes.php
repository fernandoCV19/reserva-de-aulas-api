<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocenteController;

Route::group([

'middleware' => 'api',
'prefix' => 'auth'

], function ($router) {

Route::post('login', [AuthController::class,'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::post('me', [AuthController::class, 'me']);

});
Route::get('/notificaciones/{idDocente}', [DocenteController::class, 'getNotificacionesByDocente']);