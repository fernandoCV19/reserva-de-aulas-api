<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use Illuminate\Support\Facades\DB;


class MateriaController extends Controller
{
    /**
     * @OA\Get(
     *      path= "/materia/docentes/{idMateria}",
     *      summary =  "Obtencion de una todos los docentes de una materia",
     *      tags = {"Materia"},
     * 
     *      @OA\Parameter(
     *          name="idMateria",
     *          description="Id de la Materia",
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
    public function getDocentes($idMateria){
        $docentes=DB::table('grupos')
        ->join("docentes", "docentes.id", "=", "grupos.docente_id")
        ->where("materia_id", request("idMateria"))
        ->select(["grupos.nombre as nombre_grupo", "docentes.nombre as nombre_docente", 
        "grupos.id as id_grupo", "docentes.id as id_docente"])
        ->orderBy("nombre_docente")
        ->orderBy("nombre_grupo")
        ->get();
        /*$aux = array();
        $docentesObtenidos = array();
        for($i=0; $i<sizeof($docentes); $i++){
            $doc = $docentes[$i];
            $duplicado = false;
            for($k=0; $k<sizeof($aux); $k++){
                if (($doc->nombre_docente)==$aux[$k]){
                    $duplicado = true;
                }
            }
            if($duplicado == false){
                array_push($docentesObtenidos,$doc);
                array_push($aux,$doc->nombre_docente);
            }
        }
        return $docentesObtenidos;*/
        return $docentes;
    }
    /**
     * @OA\Get(
     *      path= "/materia/grupos/{idMateria}",
     *      summary =  "Obtencion de una todos los grupos apartir de un id de materia",
     *      tags = {"Materia"},
     * 
     *      @OA\Parameter(
     *          name="idMateria",
     *          description="Id de la Materia",
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
    public function getGrupos($idMateria){
        return DB::table("grupos")
        ->where("grupos.materia_id","=",$idMateria)
        ->get();
    }

    /**
     * @OA\Get(
     *      path= "/materia/{idMateria}",
     *      summary =  "Obtencion de una materia apartir de un id de materia",
     *      tags = {"Materia"},
     * 
     *      @OA\Parameter(
     *          name="idMateria",
     *          description="Id de la Materia",
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
    public function getMateriaPorId(Request $request){
        $materia=  Materia::findOrFail($request->idMateria);
        return response()->json($materia, 200,[]);
    }
    /**
     * @OA\Get(
     *      path= "/materia",
     *      summary =  "Obtencion de todas las materias",
     *      tags = {"Materia"},
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
    public function getMaterias(){
        $materia =  Materia::all();
        return response()->json($materia, 200,[]);
    }
}


