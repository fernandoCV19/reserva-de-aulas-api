<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Administrador extends Authenticatable implements JWTSubject
{
    use HasFactory;
    protected $table = 'administradors';
    public $timestamps = false;
    public $incrementing = false;
    use HasFactory;
    use Notifiable;
    protected $fillable = ['id,  nombre, contrasenia'];


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
}
