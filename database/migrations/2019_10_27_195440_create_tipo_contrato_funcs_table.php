<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoContratoFuncsTable extends Migration
{
    /*tipo de CONTRATOS
        item y contrato
    */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_contrato_funcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_contrato_descripcion',191);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_contrato_funcs');
    }
}
