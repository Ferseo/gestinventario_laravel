<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialPrestado extends Model
{
    use HasFactory;
    protected $mat_prestado = [
        'material_prestado',
        'dia_retirada',
        'dia_entrega',
        'estado_material',
        'observaciones',
        'persona_restamo',
        'estado_devolucion',
        'trabajador_presta',
        'trabajador_recibe',
    ];

    protected $fillable = [
        'materialPrestado',
        'diaRetirada',
        'diaEntrega',
        'estadoMaterial',
        'observaciones',
        'personaPrestamo',
        'devuelto',
        'estado_devolucion',
        'trabajador_presta',
        'trabajador_recibe',
    ];


    /**
     * Funcion que relaciona un material con los materiales prestados,
     * se utiliza 'hasMany' por que en un prestamo puedes añadir 
     * muchos materiales.
     *
     * @return 
     */
    public function material(){
        return $this->hasOne(Material::class);
    }
}
