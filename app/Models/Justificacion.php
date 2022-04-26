<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Justificacion extends Model
{
    use HasFactory;
    protected $table = 'justificacions';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['id, justificacion, datos_reserva_id'];
    public function datos_reserva(){
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
