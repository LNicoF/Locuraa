<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_new', function (Blueprint $table) {
            $table->bigIncrements('id_alumno');
            $table->unsignedBigInteger('id_user'); $table->foreign('id_user')->references('id')->on('users');
            
            $table->string('tec_insc');
            $table->tinyInteger('anio_insc');
            $table->string('tur_insc');
            $table->string('cond_insc');
            $table->boolean('pase_insc');
            $table->boolean('inte_insc');

            $table->unsignedBigInteger('id_establecimiento')->nullable()->unique(); $table->foreign('id_establecimiento')->references('id_establecimiento')->on('establecimiento_procedencia');

            $table->string('tipdocument_e')->nullable();
            $table->integer('nrodocument_e')->unique()->nullable();
            $table->string('estadodocumento_e')->nullable();

            $table->string('apell_e');
            $table->string('nomb_e');
            $table->string('sexo_e');
            $table->date('bir_dat_e')->format('dd, mm, YY');
            $table->string('bir_pla_e');
            $table->string('nac_e');

            $table->string('dom_calle_e');
            $table->integer('dom_nro_e');
            $table->integer('dom_piso_e')->nullable();
            $table->string('dom_torre_e')->nullable();
            $table->string('dom_dept_e')->nullable();
            $table->string('dom_entre_e');
            $table->string('dom_otro_e')->nullable();
            $table->string('prov_e');
            $table->string('dist_e');
            $table->string('loc_e');
            $table->integer('codpost_e');

            $table->integer('telefo_fam')->nullable();;
            $table->integer('telefocelular_fam');

            $table->boolean('her_tie_e');
            $table->tinyInteger('her_can_e')->unsigned()->default('0');
            $table->tinyInteger('her_este_e')->unsigned()->default('0');

            $table->smallInteger('hog_can_e')->unsigned();
            $table->tinyInteger('hog_hab_e')->unsigned();
            $table->string('hog_leng_e')->nullable();

            $table->boolean('ayuda_e');
            $table->boolean('obras_e');
            $table->boolean('prog_e');

            $table->boolean('prog_auh_e')->default('0');
            $table->boolean('prog_beca_ex_e')->default('0');
            $table->boolean('prog_progr_e')->default('0');
            $table->boolean('prog_otros_e')->default('0');
            $table->boolean('prog_beca_jud_e')->default('0');

            
            $table->boolean('trans_pie_e')->default('0');
            $table->boolean('trans_omni_e')->default('0');
            $table->boolean('trans_auto_e')->default('0');
            $table->boolean('trans_taxi_e')->default('0');
            $table->boolean('trans_otro_e')->default('0');

            $table->boolean('hijo_e')->nullable();
            $table->boolean('hijo_proy_e')->nullable();
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_new');
    }
}
