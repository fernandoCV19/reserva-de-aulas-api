<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\AuthDocenteController;

/*
Route::middleware('auth:admin')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login']);
Route::post('activar', [AuthController::class, 'activar']);
Route::post('/crearAdmin', [AuthController::class, 'activarAdmin']);

Route::group(['middleware' => ['jwt.verify:admin']], function() {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('me', [AuthController::class, 'me']);
Route::post('login', [AuthController::class, 'login']);
Route::post('activar', [AuthController::class, 'activar']);
Route::group(['middleware' => ['jwt.verify']], function() {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('me', [AuthController::class, 'me']);
    
});
*/ 

Route::middleware('jwt.verify:admin')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'jwt.verify'
], function ($router) {
    Route::post('logoutAdmin', [AuthAdminController::class, 'logout']);
    Route::post('refreshAdmin', [AuthAdminController::class, 'refresh']);
    Route::get('meAdmin', [AuthAdminController::class, 'me']); 
});
Route::post('crearAdmin', [AuthAdminController::class, 'activarAdmin']);
Route::post('loginAdmin', [AuthAdminController::class, 'login']);

Route::post('crearAdmin', [AuthAdminController::class, 'activarAdmin']);
Route::post('loginAdmin', [AuthAdminController::class, 'login']);

Route::middleware('jwt.verify:docente')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'jwt.verify',
], function ($router) {

    Route::post('logoutDocente', [AuthDocenteController::class, 'logout']);
    Route::post('refreshDocente', [AuthDocenteController::class, 'refresh']);
    Route::get('meDocente', [AuthDocenteController::class, 'me']);
});
Route::post('loginDocente', [AuthDocenteController::class, 'login']);
Route::post('activarDocente', [AuthDocenteController::class,  'activar']);