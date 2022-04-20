<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosReserva extends Model
{
    use HasFactory;

    public function reserva(){
        return $this->belongsTo(Reserva::class);
    }

    public function solicitu_reserva(){
        return $this->belongsTo(SolicitudReserva::class);
    }

    public function justifcaciones(){
        return $this->hasMany(Justicacion::class, 'id_datos_reserva');
    }
}
