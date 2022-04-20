<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\EstadoSolicitudEnum;

class SolicitudReserva extends Model
{
    use HasFactory;
    
    protected $table = 'solicitud_reserva';
    public $timestamps = false;
    protected $fillable = ['id, estado, fecha_creacion, id_datos_reserva'];
    
    
    public function datos_reserva(){
        return $this->hasOne(DatosReserva::class);
    }
    
}
