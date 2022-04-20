<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/respuesta-solicitud, 'App/Http/controllers/AdministradorController@crearReserva');