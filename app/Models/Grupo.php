<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    public function docente(){
        return $this->belongsTo(Docente::class, 'id_docente');
    }

    public function docente(){
        return $this->belongsTo(Materia::class, 'id_materia');
    }
}
