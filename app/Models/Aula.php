<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    protected $table = 'aulas';
    protected $fillable = ['id, nombre, ubicacion, capacidad, descripcion'];


    public function datos_reservas(){
        return $this->belongsTo(DatosReserva::class, "aula_datos_reserva", "aula_id", "datos_reserva_id");
    }
}
