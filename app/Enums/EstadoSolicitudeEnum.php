<?php
namespace App\Enums;

enum EstadoSolicitudEnum: string
{
    case PENDIENTE = 'pendiente';
    case RECHAZADO = 'rechazado';
}