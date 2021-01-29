<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->unsignedBigInteger('id_alumno')->unique(); $table->foreign('id_alumno')->references('id_alumno')->on('alumno_new');


            //Madre

            $table->string('apell_mad');
            $table->string('nomb_mad');
            $table->string('naciona_mad');
            $table->boolean('asistioeducacion_mad');
            $table->string('nivelaltocursado_mad');
            $table->boolean('completoniv_mad');
            $table->boolean('vive_mad');
            $table->string('tipdocument_mad')->nullable();
            $table->string('nrodocument_mad')->nullable();
            $table->string('estadodocumento_mad')->nullable();
            $table->string('callenombre_mad')->nullable();
            $table->integer('callenro_mad')->nullable();
            $table->integer('piso_mad')->nullable();
            $table->integer('torre_mad')->nullable();
            $table->string('dpto_mad')->nullable();
            $table->string('provicia_mad')->nullable();
            $table->string('distrito_mad')->nullable();
            $table->string('localidad_mad')->nullable();
            $table->bigInteger('codpostal_mad')->nullable();
            $table->integer('telefono_mad')->nullable();
            $table->integer('telefonocelular_mad')->nullable();
            $table->string('email_mad')->nullable();
            $table->boolean('jefehogar_mad')->nullable();
            $table->string('profesion_mad')->nullable();
            $table->string('condicionactividad_mad')->nullable();

            //Padre

            $table->string('apell_pad');
            $table->string('nomb_pad');
            $table->string('naciona_pad');
            $table->boolean('asistioeducacion_pad');
            $table->string('nivelaltocursado_pad');
            $table->boolean('completoniv_pad');
            $table->boolean('vive_pad');
            $table->string('tipdocument_pad')->nullable();
            $table->string('nrodocument_pad')->nullable();
            $table->string('estadodocumento_pad')->nullable();
            $table->string('callenombre_pad')->nullable();
            $table->integer('callenro_pad')->nullable();
            $table->integer('piso_pad')->nullable();
            $table->integer('torre_pad')->nullable();
            $table->string('dpto_pad')->nullable();
            $table->string('provincia_pad')->nullable();
            $table->string('distrito_pad')->nullable();
            $table->string('localidad_pad')->nullable();
            $table->bigInteger('codposta_pad')->nullable();
            $table->integer('telefono_pad')->nullable();
            $table->integer('telefonocelular_pad')->nullable();
            $table->string('email_pad')->nullable();
            $table->boolean('jefehogar_pad')->nullable();
            $table->string('profesion_pad')->nullable();
            $table->string('condicionactividad_pad')->nullable();
            
            //Tutor

            $table->string('apell_tut')->nullable();
            $table->string('nomb_tut')->nullable();
            $table->string('naciona_tut')->nullable();
            $table->boolean('asistioeducacion_tut')->nullable();
            $table->string('nivelaltocursado_tut')->nullable();
            $table->boolean('completoniv_tut')->nullable();
            $table->string('tipdocument_tut')->nullable();
            $table->string('nrodocument_tut')->nullable();
            $table->string('estadodocumento_tut')->nullable();
            $table->string('callenombre_tut')->nullable();
            $table->integer('callenro_tut')->nullable();
            $table->integer('piso_tut')->nullable();
            $table->integer('torre_tut')->nullable();
            $table->string('dpto_tut')->nullable();
            $table->string('provicia_tut')->nullable();
            $table->string('distrito_tut')->nullable();
            $table->string('localidad_tut')->nullable();
            $table->bigInteger('codpostal_tut')->nullable();
            $table->integer('telefono_tut')->nullable();
            $table->integer('telefonocelular_tut')->nullable();
            $table->string('email_tut')->nullable();
            $table->boolean('jefehogar_tut')->nullable();
            $table->string('profesion_tut')->nullable();
            $table->string('condicionactividad_tut')->nullable();
            
            //Autorizado Retirar

            $table->string('apelli_ret')->nullable();
            $table->string('nombre_ret')->nullable();
            $table->string('tip_document_ret')->nullable();
            $table->string('nro_document_ret')->unsigned()->nullable();
            $table->string('vinculo_alumno')->nullable();

            $table->string('B_apelli_ret')->nullable();
            $table->string('B_nombre_ret')->nullable();
            $table->string('B_tip_document_ret')->nullable();
            $table->string('B_nro_document_ret')->nullable();
            $table->string('B_vinculo_alumno')->nullable();


            //Restriccion Judicial
            
            $table->string('apellido_restricionjudicial')->nullable();
            $table->string('nombre_restricionjudicial')->nullable();
            $table->string('tip_document_restricionjudicial')->nullable();
            $table->string('nro_document_restricionjudicial')->nullable();
            $table->string('restriccion')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsables');
    }
}
