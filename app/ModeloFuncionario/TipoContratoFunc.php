<?php

namespace App\ModeloFuncionario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoContratoFunc extends Model
{
    protected $primaryKey ="id";
    protected $fillable = [
        'tipo_contrato_descripcion',
    ];
    use SoftDeletes;
}
