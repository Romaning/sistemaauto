<?php

namespace App\ModeloValesDeCombustible;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ValesDeCombustible extends Model
{
    protected $fillable = [
        'numero_vale',
        'fecha_entrega',
        'placa_id',
        'tipo_combustible',
        'cantidad',
    ];
    use SoftDeletes;
}
