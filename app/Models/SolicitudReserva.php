<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudReserva extends Model
{
    use HasFactory;

    public function datos(){
        return $this->hasOne(DatosReserva::class, 'id_datos_reserva');
    }
}
