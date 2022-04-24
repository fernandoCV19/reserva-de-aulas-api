<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    public function datos_reservas(){
        return $this->belongsTo(DatosReserva::class);
    }
}