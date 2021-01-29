<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<span class="center"><b>INFORMACIÓN DE SALUD</b></span>
<br>
<form class="col-12">
    <table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
        <tbody>
            <tr>
                <td>
                    
                    <div class="form-row">
                        <label class="col-form-label"  for="obrasocial_est">Obra Social</label>
                        <input type="text" class="form-control col-sm-5" id="obrasocial_est" name="obrasocial_est">
                        &nbsp;&nbsp;
                        <label class="col-form-label" for="N° afiliado_est ">  N° Afiliado</label>
                        &nbsp;&nbsp;
                        <input type="number"  class="form-control col-sm-3"  id="N° afiliado_est" name="N° afiliado_est">
                    </div>
                    


                 
                </td>
            </tr>
            <tr>
                <td>
                    <b>ANTECEDENTES DE ENFERMEDADES</b>

                    <div class="container-fluid">
                        <div class="row">¿Tiene alguna enfermedad que requiera periódicamente tratamiento o control médico?</div>
                        
                        <div class="row">
                            <div class="col-4">
                                <input type="radio" id="yes_enfermedadtrat_e" name="tienenenfermedad_est" value=1>
                                <label class="form-label "for="yes_enfermedadtrat_e">Si</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_enfermedadtrat_e" name="tienenenfermedad_est" value=0>
                                <label class="form-label" for="no_enfermedadtrat_e ">No</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" id="cualenfermedad_est" name="cualenfermedad_est" placeholder="¿Cual?">
                            </div>
                        </div>
                       
                        <br>

                        <div class="row">Durante los últimos tres años ¿fue internado alguna vez?</div>
                      
                        <div class="row">
                            <div class="col-4">
                                <input type="radio" id="yes_fueinternado_e" name="fueinternado_ultimos3años_est" value=1>
                                <label class="form-label "for="yes_fueinternado_e">Si</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_fueinternado_e" name="fueinternado_ultimos3años_est" value=0>
                                <label class="form-label" for="no_fueinternado_e ">No</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" id="porquefueinternado_est" name="porquefueinternado_est" placeholder="¿Por que?">
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                               <b>¿TIENE ALGUN TIPO DE ALERGIA?</b>
                            </div>
                            <div class="col">
                                <input type="radio" id="yes_alergia_e" name="tienealguntipo_alergia_est" value=1>
                                <label class="form-label "for="yes_alergia_e">Si</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_alergia_e" name="tienealguntipo_alergia_est" value=0>
                                <label class="form-label" for="no_alergia_e ">No</label>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6.5">
                                En caso afirmativo, describa sus manifestaciones
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="manifestacionesalergia_est" name="manifestacionesalergia_est" placeholder="Manifestaciones">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-3.5">
                                <label for="alergia_sedebe_est">La alergia se debe a</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" id="alergia_sedebe_est" name="alergia_sedebe_est" placeholder="Motivo">
                            </div>


                            <div class="col">
                                <input type="checkbox" class="form-check-input" id="nosabealergia_est" value=1>
                                <label class="form-check-label" for="nosabealergia_est">No sabe</label>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col">
                                ¿Recibe tratamiento permanente?  &nbsp;&nbsp;
                                <input type="radio" id="yes_tratamientoalergia_e" name="recibe_tratamientopermanente_est" value=1>
                                <label class="form-label "for="yes_alergia_e">Si</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_tratamientoalergia_e" name="recibe_tratamientopermanente_est" value=0>
                                <label class="form-label" for="no_alergia_e ">No</label>  
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="container-fluid">
                        <div class="row">
                            <b>TRATAMIENTOS</b>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                ¿Recibe tratamiento médico?
                                &nbsp;&nbsp;
                                <input type="radio" id="yes_tratamiento_e" name="recibe_tratamientomedico_est" value=1>
                                <label class="form-label "for="yes_tratamiento_e">SI</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_tratamiento_e" name="recibe_tratamientomedico_est" value=0>
                                <label class="form-label" for="no_tratamiento_e ">NO</label>
                            </div>
                            <div class="col-2">
                                 &nbsp;&nbsp;Especifique
                            </div>
                            <div class="col-4   ">
                                <input type="text" class="form-control" id="manifestacionesalergia_est" name="manifestacionesalergia_est" placeholder="Tratamiento">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3.5">
                                Quirúrgicos 
                                &nbsp;&nbsp;
                                <input type="radio" id="yes_tratamientoqui_e" name="recibio_tratamientoquirurgico_est" value=1>
                                <label class="form-label "for="yes_tratamientoqui_e">SI</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_tratamientoqui_e" name="recibio_tratamientoquirurgico_est" value=0>
                                <label class="form-label" for="no_tratamientoqui_e ">NO</label>
                            </div>
                            <div class="col-2">
                                <input type="number" class="form-control" id="edad_tratamientoquirurgico" name="edad_tratamientoquirurgico" placeholder="Edad">
                            </div>
                            <div class="col-2.5">
                                Tipo de cirugía
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="tipocirugia_est" name="tipocirugia_est" placeholder="Tipo">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-7">
                                ¿Presenta alguna limitación física?
                                &nbsp;&nbsp;
                                <input type="radio" id="yes_limfisica_e" name="presentalimitacion_fisica_est" value=1>
                                <label class="form-label "for="yes_limfisica_e">SI</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_limfisica_e" name="presentalimitacion_fisica_est" value=0>
                                <label class="form-label" for="no_limfisica_e ">NO</label>
                            </div>
                            <div class="col-1.5">
                                Aclaración
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="aclaralimitación_fisica_est" name="aclaralimitación_fisica_est">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <label for="otroproblemad_salud_est" class="form-label">¿Otros problemas de salud?</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="otroproblemad_salud_est" name="otroproblemad_salud_est" placeholder="Problema">
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <b>VACUNAS OBLIGATORIAS</b> <div class="float-right"><small class="text-muted">tomando en cuenta el Calendario de Vacunación y la Guía de Salud Nº 2</small></div>  
                            </div>    
                        </div>    
                        <div class="row">
                            <div class="col-3.5">
                                <div class="float-left"><small class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;de acuerdo a su cumplimiento</small></div>
                            </div>
                            <div class="col">
                                &nbsp;&nbsp;
                                <input type="radio" id="vacunacioncompleta" name="calendariovacunas_est" value="VACUNACION COMPLETA">
                                <label class="form-label "for="vacunacioncompleta_est">VACUNACION COMPLETA</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="vacunacionincompleta_est" name="calendariovacunas_est" value="INCOMPLETA">
                                <label class="form-label" for="vacunacionincompleta_est">INCOMPLETA</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="sindatos_est" name="calendariovacunas_est" value="SIN DATOS">
                                <label class="form-label" for="sindatos_est">SIN DATOS</label>
                                
                            </div>
                        </div>
                        <div class="text-center"><p style="font-size: 12px;" class="text-muted align-text-bottom">tomando en cuenta el Calendario de Vacunación y la Guía de Salud Nº 2</p></div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-4">
                                <b>DETERMINACION DE</b>
                            </div>
                            <div class="col-1.5">
                                <label for="talla_est" class="form-label">Talla</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="talla_est" name="talla_est" placeholder="(En centímetros)">
                            </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="col-1.5">
                                <label for="peso_est" class="form-label">Peso</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="peso_est" name="peso_est" placeholder="Kgrs. (con 1 décimo)">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-4"><label for="fechadeterminacion_est" class="form-label">Fecha de la determinación</label></div>
                            <div class="col-6">
                                <input type="date" class="form-control" id="fechadeterminacion_est" name="fechadeterminacion_est" value="2020-01-01">
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <span class="center"><b>SI EL/LA ALUMNO/A TIENE ALGÚN PROBLEMA DE SALUD EN LA ESCUELA</b></span>
    <table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
        <tbody>
            <tr>
                <td>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-4">
                                <b>RECURRIR A INSTITUCIÓN</b>
                            </div>

                            <div class="col">
                                <input type="text" class="form-control" id="recurrir_institucion_est" name="recurrir_institucion_est" placeholder="Nombre de la Institución">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-4 "></div>

                            <div class="col">
                                <input type="text" class="form-control" id="recurrir_domicilio_est" name="recurrir_domicilio_est" placeholder="Domicilio">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="recurrir_telefono_est" name="recurrir_telefono_est" placeholder="Teléfono">
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-2">
                                <b>MEDICO</b>
                            </div>

                            <div class="col">
                                <input type="text" class="form-control" id="medico_apellido" name="medico_apellido" placeholder="Apellido/s">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="medico_nombre" name="medico_nombre" placeholder="Nombre/s">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-2"></div>

                            <div class="col">
                                <input type="text" class="form-control" id="medico_domicilio" name="medico_domicilio" placeholder="Domicilio">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="medico_telefono" name="medico_telefono" placeholder="Teléfono">
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-2">
                                <b>FAMILIAR</b>
                            </div>

                            <div class="col">
                                <input type="text" class="form-control" id="familiar_apellido" name="familiar_apellido" placeholder="Apellido/s">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="familiar_nombre" name="familiar_nombre" placeholder="Nombre/s">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-2"></div>

                            <div class="col">
                                <input type="text" class="form-control" id="familiar_domicilio" name="familiar_domicilio" placeholder="Domicilio">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="familiar_telefono" name="familiar_telefono" placeholder="Teléfono">
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <span class="center"><b>ACTUALIZACIONES</b></span>
    <table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
        <tbody>
            <tr>
                <td>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3.5">
                                <label for="fecha_actualizacion_est" class="form-label">Fecha de la determinación</label>
                            </div>
                            <div class="col-5">
                                <input type="date" class="form-control" id="fecha_actualizacion_est" name="fecha_actualizacion_est">
                            </div>
                            <div class="col">
                                Anual
                                &nbsp;&nbsp;
                                <input type="radio" id="yes_anual_e" name="actualizacion_anual_est" value=1>
                                <label class="form-label "for="yes_anual_e">SI</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_anual_e" name="actualizacion_anual_est" value=0>
                                <label class="form-label" for="no_anual_e ">NO</label>
                            </div>

                        </div>
                        <br/>
                        <div class="row">
                            <div class="col">
                                ¿Hay cambios?
                                &nbsp;&nbsp;
                                <input type="radio" id="yes_cambiosB__e" name="actualizacion_cambios_est" value=1>
                                <label class="form-label "for="yes_cambios_e">SI</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_cambios_e" name="actualizacion_cambios_est" value=0>
                                <label class="form-label" for="no_cambios_e ">NO</label>
                            </div>

                            <input type="text" class="form-control" id="actualizacioncambios_describa_est" name="actualizacioncambios_describa_est" placeholder="Describa los cambios de salud del alumno">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3.5">
                                <label for="B_fecha_actualizacion_est" class="form-label">Fecha de la determinación</label>
                            </div>
                            <div class="col-5">
                                <input type="date" class="form-control" id="B_fecha_actualizacion_est" name="B_fecha_actualizacion_est">
                            </div>
                            <div class="col">
                                Anual
                                &nbsp;&nbsp;
                                <input type="radio" id="yes_B_anual_e" name="B_actualizacion_anual_est" value=1>
                                <label class="form-label "for="yes_B_anual_e">SI</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_B_anual_e" name="B_actualizacion_anual_est" value=0>
                                <label class="form-label" for="no_B_anual_e ">NO</label>
                            </div>

                        </div>
                        <br/>
                        <div class="row">
                            <div class="col">
                                ¿Hay cambios?
                                &nbsp;&nbsp;
                                <input type="radio" id="yes_B_cambios_e" name="B_actualizacion_cambios_est" value=1>
                                <label class="form-label "for="yes_B_cambios_e">SI</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_B_cambios_e" name="B_actualizacion_cambios_est" value=0>
                                <label class="form-label" for="no_B_cambios_e ">NO</label>
                            </div>

                            <input type="text" class="form-control" id="B_actualizacioncambios_describa_est" name="B_actualizacioncambios_describa_est" placeholder="Describa los cambios de salud del alumno">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3.5">
                                <label for="C_fecha_actualizacion_est" class="form-label">Fecha de la determinación</label>
                            </div>
                            <div class="col-5">
                                <input type="date" class="form-control" id="C_fecha_actualizacion_est" name="C_fecha_actualizacion_est">
                            </div>
                            <div class="col">
                                Anual
                                &nbsp;&nbsp;
                                <input type="radio" id="yes_C_anual_e" name="C_actualizacion_anual_est" value=1>
                                <label class="form-label "for="yes_C_anual_e">SI</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_C_anual_e" name="C_actualizacion_anual_est" value=0>
                                <label class="form-label" for="no_C_anual_e ">NO</label>
                            </div>

                        </div>
                        <br/>
                        <div class="row">
                            <div class="col">
                                ¿Hay cambios?
                                &nbsp;&nbsp;
                                <input type="radio" id="yes_C_cambios_e" name="C_actualizacion_cambios_est" value=1>
                                <label class="form-label "for="yes_C_cambios_e">SI</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="no_C_cambios_e" name="C_actualizacion_cambios_est" value=0>
                                <label class="form-label" for="no_C_cambios_e ">NO</label>
                            </div>

                            <input type="text" class="form-control" id="C_actualizacioncambios_describa_est" name="C_actualizacioncambios_describa_est" placeholder="Describa los cambios de salud del alumno">
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</form>





