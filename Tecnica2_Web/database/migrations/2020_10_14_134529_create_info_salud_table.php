<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoSaludTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_salud', function (Blueprint $table) {
            //$table->bigIncrements('id_info');
            $table->unsignedBigInteger('id_alumno')->unique();  $table->foreign('id_alumno')->references('id_alumno')->on('alumno_new');
            $table->string('obrasocial_est')->nullable();
            $table->string('N_afiliado_est')->nullable();

            //Antecedentes de Enfermedad

            $table->boolean('tienenenfermedad_est');
            $table->string('cualenfermedad_est')->nullable();
            $table->boolean('fueinternado_ultimos3años_est');
            $table->string('porquefueinternado_est')->nullable();

            //Alergia

            $table->boolean('tienealguntipo_alergia_est');
            $table->string('manifestacionesalergia_est')->nullable();
            $table->string('alergia_sedebe_est')->nullable();
            $table->boolean('recibe_tratamientopermanente_est');

            //Tratamientos

            $table->boolean('recibe_tratamientomedico_est');
            $table->string('especifique_tratamiento_est')->nullable();
            $table->boolean('recibio_tratamientoquirurgico_est');
            $table->unsignedSmallInteger('edad_tratamientoquirurgico')->nullable();
            $table->string('tipocirugia_est')->nullable();
            $table->boolean('presentalimitacion_fisica_est');
            $table->string('aclaralimitación_fisica_est')->nullable();
            $table->string('otroproblemad_salud_est')->nullable();

            //Vacunas

            $table->string('calendariovacunas_est');

            //Talla & Peso

            $table->float('talla_est');
            $table->float('peso_est');
            $table->date('fechadeterminacion_est')->format('dd, mm, YY'); 

            //Problema Salud En Escuela

            $table->string('recurrir_institucion_est')->nullable();
            $table->string('recurrir_domicilio_est')->nullable();
            $table->integer('recurrir_telefono_est')->nullable();

            $table->string('medico_apellido')->nullable();
            $table->string('medico_nombre')->nullable();
            $table->string('medico_domicilio')->nullable();
            $table->integer('medico_telefono')->nullable();

            $table->string('familiar_apellido');
            $table->string('familiar_nombre');
            $table->string('familiar_domicilio');
            $table->integer('familiar_telefono');

            //Actualizaciones
            $table->date('fecha_actualizacion_est')->nullable()->optional()->format('dd, mm, YY');
            $table->boolean('actualizacion_anual_est')->nullable();
            $table->boolean('actualizacion_cambios_est')->nullable();
            $table->string('actualizacioncambios_descriva_est')->nullable();

            $table->date('B_fecha_actualizacion_est')->nullable()->optional()->format('dd, mm, YY');
            $table->boolean('B_actualizacion_anual_est')->nullable();
            $table->boolean('B_actualizacion_cambios_est')->nullable();
            $table->string('B_actualizacioncambios_descriva_est')->nullable();

            $table->date('C_fecha_actualizacion_est')->nullable()->optional()->format('dd, mm, YY');
            $table->boolean('C_actualizacion_anual_est')->nullable();
            $table->boolean('C_actualizacion_cambios_est')->nullable();
            $table->string('C_actualizacioncambios_descriva_est')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_salud');
    }
}
