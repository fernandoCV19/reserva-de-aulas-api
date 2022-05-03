<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use Illuminate\Support\Facades\Hash;

class DocenteController extends Controller
{
    public function crearDocente()
    {
        //
    }

    public function validarCuenta($request){
        $usuario = $request->codSIS;
        $password = $request->contrasenia;

        $cuenta = Docente::where('usuario',$usuario)->first();
        
        return Hash::check($password, $cuenta->contrasenia);
        
    }

    public function getNotificacionesByDocente($idDocente){
        return Docente::find($idDocente)->notificaciones;
    }
}
