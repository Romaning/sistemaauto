<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamoDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamo_denuncias', function (Blueprint $table) {
            $table->bigIncrements('reclamo_denuncia_id');
            $table->string('ante_quien',191)->nullable();
            $table->string('tipo_r_d_descripcion',191)->nullable();
            $table->string('num_resolucion_inicio_proceso')->nullable();
            $table->date('fecha_r_d_inicio')->nullable();
            $table->string('archivo_inicio_proceso')->nullable();
            $table->string('num_resolucion_fin_proceso')->nullable();
            $table->date('fecha_r_d_fin')->nullable();
            $table->string('archivo_fin_proceso')->nullable();
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
        Schema::dropIfExists('reclamo_denuncias');
    }
}
