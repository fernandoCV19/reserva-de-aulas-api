<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubeject;

class Docente extends Model implements JWTSubeject
{
    use HasFactory;

    protected $table = 'docentes';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['id, codSIS, nombre, celular, contrasenia, email, activado'];


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


    public function notificaciones(){
        return $this->hasMany(Notificacion::class);
    }
}
