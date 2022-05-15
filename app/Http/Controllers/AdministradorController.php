<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
/**
 * @OA\Post(
 *      path= "administrador/respuesta-solicitud",
 *      summary =  "prueba",
 *      tags = {"Administrador"},
 *      @OA\Response(
 *          response=200,
 *          description = "OK"))
 * 
 */
class AdministradorController extends Controller
{
    public function validarCuentaDocente(Request $request){
        $docente = Docente::findOrFail($request->idDocente);
        $docente -> activado = 1;
        $docente -> save();
        return $docente;
    }
}
