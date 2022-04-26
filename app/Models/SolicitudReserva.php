<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SolicitudReserva extends Model
{
    use HasFactory;
    
    protected $table = 'solicitud_reservas';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['id, estado, fecha_creacion, id_datos_reserva'];
    
    public function datos_reserva(){
        return $this->hasOne(DatosReserva::class);
    }
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::uuid()->toString();
        });
    }
    
}
