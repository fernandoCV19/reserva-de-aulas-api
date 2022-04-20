<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/respuesta-solicitud', function (Request $request) {
    return $request->user();
});