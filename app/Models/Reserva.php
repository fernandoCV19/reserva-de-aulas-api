<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reserva';
    public $timestamps = false;
    protected $fillable = ['id, fecha_creacion, id_datos_reserva'];

    public function datos(){
        return $this->hasOne(DatosReserva::class, 'id_datos_reserva');
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
