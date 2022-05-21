<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DocenteController extends Controller
{
    
    /**
     * @OA\Put(
     *      path= "/docente/verificar/{idDocente}",
     *      summary =  "Verificacion de una cuenta de docente",
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
    public function validarCuenta(Request $request){
        $docente = Docente::find($request->id);
        $docente->activado = 1;
        $docente->save();
        return response()->json([
            'message' => 'Activado.',
        ], 200);
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
    /**
     * @OA\Get(
     *      path= "/docente/meterias/{idDocente}",
     *      summary =  "Obtencion de las materias y grupos de un docente",
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
    public function getMaterias($idDocente){ 
        $docentes=DB::table('grupos')
        ->join("docentes", "docentes.id", "=", "grupos.docente_id")
        ->join("materias", "materias.id", "=", "grupos.materia_id")
        ->where("docente_id", request("idDocente"))
        
        ->select(["grupos.nombre as nombre_grupo", "docentes.nombre as nombre_docente", 
        "grupos.id as id_grupo", "docentes.id as id_docente", "materias.nombre as nombre_materia"])
        ->get();
        return $docentes;
    }
    /**
     * @OA\Get(
     *      path= "/docente/cuentas",
     *      summary =  "Obtencion de las cuentas que estan solicitdas para ser aceptadas",
     *      tags = {"Docentes"},
     * 
     
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
    public function getCuentasSolicitadas(){
        $docentes=DB::table('docetnes')
        ->where("activado", 2)
        ->get();
        return $docentes;
    }
}
