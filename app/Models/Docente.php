<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Docente extends Authenticatable implements JWTSubject
{
    
    protected $table = 'docentes';
    public $timestamps = false;
    public $incrementing = false;
    use HasFactory;
    use Notifiable;
    protected $fillable = ['id, cod_SIS, nombre, celular, contrasenia, email, activado'];


    public function grupos(){
        return $this->hasMany(Grupo::class);
    }



    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::uuid()->toString();
        });
    }

    public function notificaciones(){
        return $this->hasMany(Notificacion::class);
    }
}
