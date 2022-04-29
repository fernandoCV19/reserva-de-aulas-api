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
        ->select(["nombres as nombresDocente", "apellidos as apellidosDocente", "nombre as grupo"])
        ->get();
        return $docentes;
    }
    public function getGrupos($idMateria){
        return Materia::find($idMateria)->grupos;
    }
}
