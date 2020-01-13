<?php

namespace App\ModeloFuncionario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    protected $primaryKey = 'ci';
    protected $fillable = [
        /*'ci',*/
        'ci_exped_en',
        'apellidos',
        'nombres',
        'fecha_nac',
        'categoria_licencia',
        'numero_licencia',
        'fecha_expedicion_licencia',
        'fecha_vencimiento_licencia',
        'numero_accidentes',
        'contacto',
        'imagen_perfil',
        'tipo_contrato_descripcion',
        'fecha_ini_tipo_contrato',
        'fecha_fin_tipo_contrato',
        'coordendax',
        'coordenday',
        'estado_func_descripcion',
        'departamento_id',
    ];
    use SoftDeletes;
}
