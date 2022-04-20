<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    public function docente(){
        return $this->belongsTo(Docente::class);
    }

    public function materia(){
        return $this->belongsTo(Materia::class);
    }

    public function datos_reserva(){
        return $this->belongsTo(DatosReserva::class);
    }
}
