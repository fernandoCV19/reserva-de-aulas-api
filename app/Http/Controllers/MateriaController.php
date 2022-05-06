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
        ->get();
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
        return Materia::find($idMateria)->grupos;
    }
}
