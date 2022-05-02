<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use Illuminate\Support\Facades\DB;


class MateriaController extends Controller
{
    public function getDocentes($idMateria){
        $docentes=DB::table('grupos')
        ->join("docentes", "docentes.id", "=", "grupos.docente_id")
        ->where("materia_id", request("idMateria"))
        
        ->select(["grupos.nombre as nombre_grupo", "docentes.nombre as nombre_docente", 
        "grupos.id as id_grupo", "docentes.id as id_docente"])
        ->get();
        return $docentes;
    }
    public function getGrupos($idMateria){
        return Materia::find($idMateria)->grupos;
    }
}
