<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Reserva;


Route::post('/respuesta-solicitud/{idSolicitud}', 'App/Http/controllers/ReservaController@crearReserva');