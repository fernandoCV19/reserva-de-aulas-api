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
        $docente = Docente::find($request->idDocente);
        $docente->activado = 1;
        $docente->save();
        return response()->json([
            'message' => 'Activado.',
        ], 200);
    }
    /**
     * @OA\Get(
     *      path= "/docente/notificaciones/{idDocente}",
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
        $notificaciones = DB::table("notificacions")->where("docente_id", $idDocente)->orderBy("fecha", "DESC")->get();
        $respuesta = array();
        for($i=0; $i<5; $i++){
            array_push($respuesta,$notificaciones[$i]);
        }
        return $respuesta;
    }
    /**
     * @OA\Get(
     *      path= "/docente/materias/{idDocente}",
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
        $materias=DB::table('grupos')
        ->join("docentes", "docentes.id", "=", "grupos.docente_id")
        ->join("materias", "materias.id", "=", "grupos.materia_id")
        ->where("docente_id", request("idDocente"))
        
        ->select(["grupos.nombre as nombre_grupo", "docentes.nombre as nombre_docente", 
        "grupos.id as id_grupo", "docentes.id as id_docente", "materias.nombre as nombre_materia", "materias.id as idMateria"])
        ->get();

        $aux = array();
        $materiasObtenidas = array();
        for($i=0; $i<sizeof($materias); $i++){
            $doc = $materias[$i];
            $duplicado = false;
            for($k=0; $k<sizeof($aux); $k++){
                if (($doc->nombre_materia)==$aux[$k]){
                    $duplicado = true;
                }
            }
            if($duplicado == false){
                array_push($materiasObtenidas,$doc);
                array_push($aux,$doc->nombre_materia);
            }
        }
        return $materiasObtenidas;

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
        $docentes=DB::table('docentes')
        ->where("activado", 2)
        ->get();
        return $docentes;
    }

    /**
     * @OA\Put(
     *      path= "/docente/rechazar/{idDocente}",
     *      summary =  "Rechazo de la creacion de una cuenta",
     *      tags = {"Docentes"},
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
    public function rechazarValidacion(Request $request){
        $docente = Docente::find($request->idDocente);
        $docente -> activado = 0;
        $docente -> save();
        return response()->json([
            'message' => 'Rechazado.',
        ], 200);
    }

    /**
     * @OA\Get(
     *      path= "/docente/sin-registrar",
     *      summary =  "Obtencion de los docentes sin tegistrar",
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
    public function getDocentesNoRegistrados(){
        $docentes=DB::table('docentes')
        ->where("activado", 0)
        ->get();
        return $docentes;
    }
    /** 
     * @OA\Put(
     *      path= "/docente/actualizar/{idDocente}",
     *      summary =  "Activacion de la cuenta de un docente",
     *      tags = {"Docentes"},
     *      @OA\Parameter(
     *          name="idDocente",
     *          description="Id de Docente",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),     
     *       @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="celular", 
     *                  type="string",
     *               ),
     *               @OA\Property(
     *                  property="email", 
     *                  type="string",
     *               ),
     *              @OA\Property(
     *                  property="contrasenia", 
     *                  type="string"
     *               ),
     *         ),        
     *    ),
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
    public function modificarInformacion(Request $request){
        $docente = Docente::findOrFail($request->idDocente);
        if($request->email != null)
            $docente -> email = $request->email;
        if($request->celular != null)             
            $docente -> celular = $request->celular; 
        if($request->contrasenia != null)
            $docente -> contrasenia =bcrypt($request->contrasenia);
        
        $docente -> save();
        return $docente;
    }
}
