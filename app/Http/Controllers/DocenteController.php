<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Docente;
use Illuminate\Support\Facades\Hash;

class DocenteController extends Controller
{
    public function crearDocente()
    {
        //
    }

    public function validarCuenta($request){
        $usuario = $request->usuario;
        $password = $request->password;

        $cuenta = Docente::where('usuario',$usuario)->first();
        
        return Hash::check($password, $cuenta->password);
        
    }
}
