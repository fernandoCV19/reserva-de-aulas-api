<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Reserva;
use App\Http\Controllers\AdministradorController;

Route::put('/validarCuenta/{idDocente}', [AdministradorController::class, "validarCuentaDocente"]);