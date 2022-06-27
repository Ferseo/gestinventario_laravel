<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materialprestado extends Model
{
    use HasFactory;
    protected $mat_prestado = [
        'materialPrestado',
        'diaRetirada',
        'diaEntrega',
        'estadooMaterial',
        'observaciones',
        'personaPrestamo',
        'estado_devolucion',
        'trabajador_presta',
        'trabajador_recibe',
    ];

    protected $fillable = [
        'materialPrestado',
        'diaRetirada',
        'diaEntrega',
        'estadooMaterial',
        'observaciones',
        'personaPrestamo',
        'estado_devolucion',
        'trabajador_presta',
        'trabajador_recibe',
    ];

    public $timestamps = false;
}
