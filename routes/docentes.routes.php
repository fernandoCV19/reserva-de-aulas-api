<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;

Route::get('/notificaciones/{idDocente}', [DocenteController::class, 'getNotificacionesByDocente']);
Route::get('/materias/{idDocente}', [DocenteController::class, 'getMaterias']);
Route::get('/cuentas', [DocenteController::class, 'getCuentasSolicitadas']);
Route::put('/verificar/{idDocente}', [DocenteController::class, 'validarCuenta']);
Route::put('/rechazar/{idDocente}', [DocenteController::class, 'rechazarValidacion']);
Route::get('/sin-registrar', [DocenteController::class, 'getDocentesNoRegistrados']);
Route::put('/actualizar/{idDocente}', [DocenteController::class, 'modificarInformacion']);