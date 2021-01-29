<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('iduser'); $table->foreign('iduser')->references('id')->on('users');
            $table->string('tipodnie');
            $table->integer('dnie');
            $table->string('apee');
            $table->string('nombree');
            $table->string('telee');
            $table->string('domie');
            $table->string('locae');
            $table->string('escanterior');
            $table->string('localescanterior');
            $table->string('provescuelaanterior');
            $table->string('emailfamilia');           
            $table->text('observaciones')->nullable();;
            $table->integer('annoins');    //Año inscripto        
            $table->string('turno');
            $table->string('posee');
            $table->string('estado');
            $table->string('sexo');
            $table->date('naci');
            $table->string('lugarnaci');
            $table->string('nacionalidad');
            $table->string('provincia');
            $table->string('distrito')->nullable();
            $table->integer('codpostal');
            $table->string('teleebis');
            $table->string('hermanos')->nullable();
            $table->integer('canthnos')->default('0');
            $table->integer('canthnosescuela')->default('0');
            $table->string('apeynombrehno')->nullable();
            $table->integer('canthabitantes');
            $table->integer('canthabitaciones');
            $table->string('otralengua')->nullable();
            $table->string('ayuda')->nullable();
            $table->string('obrasocial')->nullable();
            $table->string('poseeplan')->nullable();
            $table->string('plan')->nullable();
            $table->string('transporte');         
            $table->string('cursoa');     
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
