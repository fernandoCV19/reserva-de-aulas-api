<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DatosReserva extends Model
{
    use HasFactory;
    protected $table = 'datos_reservas';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['id, fecha, numero_estimado'];

    public function reserva(){
        return $this->belongsTo(Reserva::class);
    }

    public function solicitu_reserva(){
        return $this->belongsTo(SolicitudReserva::class);
    }

    public function justifcaciones(){
        return $this->hasMany(Justicacion::class);
    }

    public function grupos(){
        return $this->belongsTo(Grupo::class);
    }

    public function periodos(){
        return $this->belongsTo(Periodo::class);
    }

    public function aulas(){
        return $this->belongsTo(Aula::class);
    }
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::uuid()->toString();
        });
    }
}
