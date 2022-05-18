<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Periodo extends Model
{
    use HasFactory;
    protected $table = 'periodos';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['id, hora_inicio, hora_fin'];
    public function datos_reservas(){
        return $this->belongsTo(DatosReserva::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::uuid()->toString();
        });
    }
}
