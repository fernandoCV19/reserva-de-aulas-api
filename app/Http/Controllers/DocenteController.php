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
    /**
     * @OA\Get(
     *      path= "/docente/notificaciones/{idSolicitud}",
     *      summary =  "Obtencion de las notificaciones de un docente apartir de un id",
     *      tags = {"Docentes"},
     * 
     *      @OA\Parameter(
     *          name="idDocente",
     *          description="Id de Docente",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),     
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * 
     */
    public function getNotificacionesByDocente($idDocente){
        return Docente::find($idDocente)->notificaciones;
    }
}
