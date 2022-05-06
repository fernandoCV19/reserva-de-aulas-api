<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
/**
 * @OA\Schema(
 *     title="SolicitudReserva",
 *     description="Soliticitud de Reserva model",
 *     @OA\Xml(
 *         name="SolicitudReserva"
 *     )
 * )
 */
class SolicitudReserva extends Model
{
     /**
     * @OA\Property(
     *     title="id",
     *     description="id",
     *     format="uuid",
     *
     * )
     *
     * 
     */
    use HasFactory;
    
    protected $table = 'solicitud_reservas';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['id, estado, fecha_creacion, datos_reserva_id'];
    
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
