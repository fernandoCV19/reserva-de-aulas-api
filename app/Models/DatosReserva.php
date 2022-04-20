<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosReserva extends Model
{
    use HasFactory;
    protected $table = 'datos_reserva';
    protected $fillable = ['id, fecha, numero_estimado'];
}
