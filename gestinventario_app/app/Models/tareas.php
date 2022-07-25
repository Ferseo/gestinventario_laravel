<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tareas extends Model
{
    use HasFactory;

    protected $tareas = [
        'tipoTarea',
        'TrabajadorDesempenia',
        'diaTarea',
        'horarioTarea',
        'lugarTarea',
        'id',
    ];

    protected $fillable = [
        'tipoTarea',
        'TrabajadorDesempenia',
        'diaTarea',
        'horarioTarea',
        'lugarTarea',
    ];

    public $timestamps = false;
}
