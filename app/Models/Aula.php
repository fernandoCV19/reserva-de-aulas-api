<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Aula extends Model
{
    use HasFactory;
    protected $table = 'aulas';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['id, nombre, ubicacion, capacidad, descripcion'];


    public function datos_reservas(){
        return $this->belongsTo(DatosReserva::class, "aula_datos_reserva", "aula_id", "datos_reserva_id");
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::uuid()->toString();
        });
    }   
}
