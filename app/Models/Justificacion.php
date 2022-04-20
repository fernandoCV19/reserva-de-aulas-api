<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Justificacion extends Model
{
    use HasFactory;

    public function datos_reserva(){
        return $this->belongsTo(DatosReserva::class, 'id_datos_reserva');
    }
}
