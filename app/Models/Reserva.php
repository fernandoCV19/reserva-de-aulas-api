<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected @fillable = ['fecha_creacion_reserva'];

    public function datos(){
        return $this->hasOne(DatosReserva::class, 'id_datos_reserva');
    }
}
