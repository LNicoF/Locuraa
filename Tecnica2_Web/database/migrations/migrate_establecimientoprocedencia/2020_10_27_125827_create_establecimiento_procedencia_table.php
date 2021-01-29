<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientoprocedenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimiento_procedencia', function (Blueprint $table) {
            $table->bigIncrements('id_establecimiento');
            $table->string('nivel_esc');
            $table->string('nomb_esc');
            $table->bigInteger('nro_esc');
            $table->string('dir_esc');
            $table->string('loc_esc');
            $table->string('dist_esc');
            $table->string('prov_esc');
            $table->string('pais_esc');
            $table->string('gest_esc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimientoprocedencia');
    }
}
