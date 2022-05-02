<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Notificacion extends Model
{
    use HasFactory;
    protected $table = 'notificacions';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['id, mensaje, fecha, docente_id'];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::uuid()->toString();
        });
    }

    public function docente(){
        return $this->belongsTo(Docente::class);
    }
}
