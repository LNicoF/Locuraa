@extends('layouts.app')

@section('title', 'LISTADO DE PREINSCRIPTOS')

@section('content')

<br><br>

@if(isset($alumno->escanterior) && !isset($alumno->id_establecimiento))
<br>
<h5 class="center font-weight-bold">ESTABLECIMIENTO EDUCATIVO DE PROCEDENCIA</h5>
<h6 class="center">(Complete sólo si el año pasado o este año el alumno ha concurrido a otro establecimiento)</h6>
<table class="table table-bordered container-fluid w-75 mx-auto">
    {{-- ((.col.row>(label.col-form-label+{&nbsp;&nbsp;}+input:text.form-control.col))+{ }) --}}
    <tbody>
        <tr>
            <td>
                <br>
                
                <div class="row">
					&nbsp; &nbsp;

					<div class="col-3">
						<div class="input-group">
							<label for="claveprovi_esc" class="col-form-label">Clave Provincial:</label> &nbsp;
							<div class="form-control col"></div>
						</div>
					</div>

					<div class="col-2">
						<div class="input-group">
							<label for="CUE_esc" class="col-form-label">CUE:</label> &nbsp;
							<div class="form-control col"></div>
						</div>
					</div>

					<div class="col-2">
						<p style="font-size: 10px;" class="text-muted"><-- A LLENAR POR EL ESTABLECIMIENTO</p>
					</div>

                    <div class="col-1"></div>

                    <div class="col">
						<div class="input-group">
							<label for="nivel_esc" class="col-form-label">Nivel/Modalidad:</label>
							<div class="form-control col"></div>
						</div>
                    </div>
                    
                    <div class="col-3"></div>
                    
                    &nbsp; &nbsp;
                </div>
                <br>

                <div class="row">
                    &nbsp; &nbsp;

                    <div class="col row">
                        <label for="nomb_esc" class="col-form-label">Nombre:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-8">{{ $alumno->escanterior }}</div>
                    </div>
                    
                    <div class="col-3 row">
                        <label for="nro_esc" class="col-form-label">N°:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-4"></div>
                    </div>
                    
                    <div class="col row">
                        <label for="dir_esc" class="col-form-label">Dirección:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-8"></div>
                    </div>
                    
                    &nbsp; &nbsp;
                </div>
                <br>

                <div class="row">
                    &nbsp; &nbsp;

                    <div class="col row">
                        <label for="loc_esc" class="col-form-label">Localidad:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-8">{{ $alumno->localescanterior  }}</div>
                    </div>
                    
                    <div class="col row">
                        <label for="dist_esc" class="col-form-label">Distrito:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-8"></div>
                    </div>
                    
                    <div class="col row">
                        <label for="prov_esc" class="col-form-label">Provincia:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-8">{{ $alumno->provescuelaanterior }}</div>
                    </div>
                    
                    <div class="col row">
                        <label for="pais_esc" class="col-form-label">País:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-8"></div>
                    </div>
                    
                    &nbsp; &nbsp;
                </div>
            </td>
        </tr>   
    </tbody>
</table>

@else @foreach ($establecimiento_procedencia as $item)
<h5 class="center font-weight-bold">ESTABLECIMIENTO EDUCATIVO DE PROCEDENCIA</h5>
<h6 class="center">(Complete sólo si el año pasado o este año el alumno ha concurrido a otro establecimiento)</h6>
<table class="table table-bordered container-fluid w-75 mx-auto">
    {{-- ((.col.row>(label.col-form-label+{&nbsp;&nbsp;}+input:text.form-control.col))+{ }) --}}
    <tbody>
        <tr>
            <td>
                <br>
				<div class="row">
					&nbsp; &nbsp;

					<div class="col-4">
						<div class="input-group">
							<label for="claveprovi_esc" class="col-form-label">Clave Provincial:</label> &nbsp;
							<div class="form-control col">{{ $item->claveprovi_esc }}</div>
						</div>
					</div>

					<div class="col-2">
						<div class="input-group">
							<label for="CUE_esc" class="col-form-label">CUE:</label> &nbsp;
							<div class="form-control col">{{ $item->CUE_esc }}</div>
						</div>
					</div>

					<div class="col-1">
						<p style="font-size: 10px;" class="text-muted"><-- LLENAR POR EL ESTABLECIMIENTO</p>
					</div>

                    <div class="col-1"></div>

                    <div class="col">
						<div class="input-group">
							<label for="nivel_esc" class="col-form-label">Nivel/Modalidad:</label>
							<div class="form-control col">{{ $item->nivel_esc }}</div>
						</div>
                    </div>
                    
                    <div class="col-3"></div>
                    
                    &nbsp; &nbsp;
                </div>
                <br>

                <div class="row">
                    &nbsp; &nbsp;

                    <div class="col row">
                        <label for="nomb_esc" class="col-form-label">Nombre:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-8">{{ $item->nomb_esc }}</div>
                    </div>
                    
                    <div class="col-3 row">
                        <label for="nro_esc" class="col-form-label">N°:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-4">{{  $item->nro_esc }}</div>
                    </div>
                    
                    <div class="col row">
                        <label for="dir_esc" class="col-form-label">Dirección:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-8">{{ $item->dir_esc }}</div>
                    </div>
                    
                    &nbsp; &nbsp;
                </div>
                <br>

                <div class="row">
                    &nbsp; &nbsp;

                    <div class="col row">
                        <label for="loc_esc" class="col-form-label">Localidad:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-8">{{ $item->loc_esc }}</div>
                    </div>
                    
                    <div class="col row">
                        <label for="dist_esc" class="col-form-label">Distrito:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-8">{{ $item->dist_esc }}</div>
                    </div>
                    
                    <div class="col row">
                        <label for="prov_esc" class="col-form-label">Provincia:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-8">{{  $item->prov_esc }}</div>
                    </div>
                    
                    <div class="col row">
                        <label for="pais_esc" class="col-form-label">País:</label>
                        &nbsp;&nbsp;
                        <div class="form-control col-8">{{ $item->pais_esc }}</div>
                    </div>
                    
                    &nbsp; &nbsp;
                </div>
                <br>
                    
                <div class="row">
                    &nbsp; &nbsp;
                    <label for="gest_esc" class="col-form-label font-weight-bold">SECTOR DE GESTIÓN:</label>
                    
                    <div class="col-1"></div>

                    <div class="col form-check form-check-inline">
                        <input type="radio" name="gest_esc" id="gest_esc1" value="estatal" class="form-check-input" {{ ($item->gest_esc == "estatal") ? "checked" : "\disabled" }}>
                        <label for="gest_esc1" class="form-check-label">Estatal</label>
                    </div>
                    
                    <div class="col form-check form-check-inline">
                        <input type="radio" name="gest_esc" id="gest_esc2" value="privado" class="form-check-input" {{ ($item->gest_esc == "privado") ? "checked" : "\disabled" }}>
                        <label for="gest_esc2" class="form-check-label">Privado</label>
                    </div>
                    
                    <div class="col form-check form-check-inline">
                        <input type="radio" name="gest_esc" id="gest_esc3" value="municipal"class="form-check-input" {{ ($item->gest_esc == "municipal") ? "checked" : "\disabled" }}>
                        <label for="gest_esc3" class="form-check-label">Municipal</label>
                    </div>
                    
                    <div class="col form-check form-check-inline">
                        <input type="radio" name="gest_esc" id="gest_esc4" value="nacional"class="form-check-input" {{ ($item->gest_esc == "nacional") ? "checked" : "\disabled" }}>
                        <label for="gest_esc4" class="form-check-label">Nacional</label>
                    </div>
                    
                    <div class="col form-check form-check-inline">
                        <input type="radio" name="gest_esc" id="gest_esc5" value="otro" class="form-check-input"    {{ ($item->gest_esc == "otro") ? "checked" : "\disabled" }}>
                        <label for="gest_esc5" class="form-check-label">Otro</label>
                    </div>
                    
                    &nbsp; &nbsp;
                </div>
                <br>
            </td>
        </tr>   
    </tbody>
</table>
@endforeach @endif


<h5 class="center font-weight-bold">INSCRIPCIÓN</h5>
		<h5 class="center">El alumno se inscribie en:</h5>
		<table class="table table-bordered container-fluid w-75 mx-auto">
			{{-- ((.col.row>(label.col-form-label+{&nbsp;&nbsp;}+input:text.form-control.col))+{ }) --}}
			<tbody>
				<tr>
					<td>
						<br>

						<div class="row">
							&nbsp; &nbsp;
							<label for="tec_insc" class="col-form-label font-weight-bold">EDUCACIÓN TÉCNICA: </label>
							
							<div class="col-1"></div>

							<div class="col form-check form-check-inline">
								<input type="radio" name="tec_insc" id="tec_insc1" value="basico"  class="form-check-input"  {{ ($alumno->tec_insc == "basico") ? "checked" : "\disabled" }}>
								<label for="tec_insc1" class="form-check-label">Básico</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="tec_insc" id="tec_insc2" value="superior" class="form-check-input" {{ ($alumno->tec_insc == "superior") ? "checked" : "\disabled" }}>
								<label for="tec_insc2" class="form-check-label">Superior</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="tec_insc" id="tec_insc3" value="polimodal" class="form-check-input" {{ ($alumno->tec_insc == "polimodal") ? "checked" : "\disabled" }}>
								<label for="tec_insc3" class="form-check-label">Polimodal</label>
							</div>

							<div class="col-4"></div>
							
							&nbsp; &nbsp;
						</div>
						<br>

						<div class="row">
							&nbsp; &nbsp;

							<label for="anio_insc" class="col-form-label font-weight-bold">AÑO: </label>
							
							<div class="col"></div>

							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc1" value="1"  class="form-check-input" {{ ($alumno->anio_insc == "1") ? "checked" : "\disabled" }}>
								<label for="anio_insc1" class="form-check-label">1</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc2" value="2" class="form-check-input" {{ ($alumno->anio_insc == "2") ? "checked" : "\disabled" }}>
								<label for="anio_insc2" class="form-check-label">2</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc3" value="3"class="form-check-input" {{ ($alumno->anio_insc == "3") ? "checked" : "\disabled" }}>
								<label for="anio_insc3" class="form-check-label">3</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc4" value="4"class="form-check-input" {{ ($alumno->anio_insc == "4") ? "checked" : "\disabled" }}>
								<label for="anio_insc4" class="form-check-label">4</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc5" value="5"class="form-check-input" {{ ($alumno->anio_insc == "5") ? "checked" : "\disabled" }}>
								<label for="anio_insc5" class="form-check-label">5</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc6" value="6"class="form-check-input" {{ ($alumno->anio_insc == "6") ? "checked" : "\disabled" }}>
								<label for="anio_insc6" class="form-check-label">6</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc7" value="7"class="form-check-input" {{ ($alumno->anio_insc == "7") ? "checked" : "\disabled" }}>
								<label for="anio_insc7" class="form-check-label">7</label>
							</div>

							<div class="col-5"></div>
							
							&nbsp; &nbsp;
						</div>
						<br>

						@if(!($alumno->anio_insc < 4))
							<div class="row">
								<div class="col-2">    
									<label for="especialidad_insc" class="col-form-label font-weight-bold">ESPECIALIDAD: </label>
								</div>
								<div class="col">
									<div class="form-control" placeholder="Inscriptos a partir de 4to">{{ $alumno->especialidad_insc }}</div>
								</div>
								<div class="col"></div>
							</div>
							<br>
						@endif

						<div class="row">
							&nbsp; &nbsp;

							<label for="tur_insc" class="col-form-label font-weight-bold">TURNO: </label>
							
							<div class="col-1"></div>

							<div class="col form-check form-check-inline">
								<input type="radio" name="tur_insc" id="tur_insc1" value="maniana"  class="form-check-input" {{ ($alumno->tur_insc == "maniana") ? "checked" : "\disabled" }}>
								<label for="tur_insc1" class="form-check-label">Mañana</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="tur_insc" id="tur_insc2" value="tarde" class="form-check-input" {{ ($alumno->tur_insc == "tarde") ? "checked" : "\disabled" }}>
								<label for="tur_insc2" class="form-check-label">Tarde</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="tur_insc" id="tur_insc3" value="vespertino"class="form-check-input" {{ ($alumno->tur_insc == "vespertino") ? "checked" : "\disabled" }}>
								<label for="tur_insc3" class="form-check-label">Vespertino</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="tur_insc" id="tur_insc4" value="noche"class="form-check-input" {{ ($alumno->tur_insc == "noche") ? "checked" : "\disabled" }}>
								<label for="tur_insc4" class="form-check-label">Noche</label>
							</div>

							<div class="col-3"></div>
							
							&nbsp; &nbsp;
						</div>
						<br>
					</td>
				</tr>

				<tr>
					<td>
						<br>

						<div class="row">
							&nbsp; &nbsp;

							<label for="cond_insc" class="col-form-label font-weight-bold">CONDICION DEL ALUMNO EN LA INSCRIPCION ACTUAL: </label>
							
							<div class="col-1"></div>

							<div class="col form-check form-check-inline">
								<input type="radio" name="cond_insc" id="cond_insc1" value="ingresante"  class="form-check-input" {{ ($alumno->cond_insc == "ingresante") ? "checked" : "\disabled" }}>
								<label for="cond_insc1" class="form-check-label">Ingresante</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="cond_insc" id="cond_insc2" value="reinscripto" class="form-check-input" {{ ($alumno->cond_insc == "reinscripto") ? "checked" : "\disabled" }}>
								<label for="cond_insc2" class="form-check-label">Reinscripto</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="cond_insc" id="cond_insc3" value="promovido"class="form-check-input" {{ ($alumno->cond_insc == "promovido") ? "checked" : "\disabled" }}>
								<label for="cond_insc3" class="form-check-label">Promovido</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="cond_insc" id="cond_insc4" value="repitente"class="form-check-input" {{ ($alumno->cond_insc == "repitente") ? "checked" : "\disabled" }}>
								<label for="cond_insc4" class="form-check-label">Repitente</label>
							</div>

							{{-- <div class="c"></div> --}}
							
							&nbsp; &nbsp;
						</div>
						<br>
					</td>
				</tr>
				
				<tr>
					<td>
						<br>
						
						<div class="row">
							<b class="font-weight-bold col-form-label col-3">TRAYECTORIA DEL ALUMNO</b>

							<div class="col row">
								<label for="pase_insc" class="col-form-label"> ¿Es alumno con pase? </label>
								
								{{-- <div class="col-1"></div> --}}
								&nbsp; &nbsp;
								<div class="form-check form-check-inline">
									<input type="radio" name="pase_insc" id="pase_insc1" value="1"  class="form-check-input" {{ ($alumno->pase_insc == "1") ? "checked" : "\disabled" }}>
									<label for="pase_insc1" class="form-check-label">SI</label>
								</div>
								{{-- &nbsp; &nbsp; --}}
								<div class="form-check form-check-inline">
									<input type="radio" name="pase_insc" id="pase_insc1" value="0" class="form-check-input" {{ ($alumno->pase_insc == "0") ? "checked" : "\disabled" }}>
									<label for="pase_insc2" class="form-check-label">NO</label>
								</div>
							</div>
						</div>
						{{-- <br> --}}

						<div class="row">
							<div class="col-3"></div>

							<div class="col row">
								<label for="inte_insc" class="col-form-label">¿Asistió como alumno integrado a otra institución educativa?</label>
								
								&nbsp; &nbsp;
								<div class="form-check form-check-inline">
									<input type="radio" name="inte_insc" id="inte_insc1" value="1"  class="form-check-input" {{ ($alumno->inte_insc == "1") ? "checked" : "\disabled" }}>
									<label for="inte_insc1" class="form-check-label">SI</label>
								</div>
								{{-- &nbsp; &nbsp; --}}
								<div class="form-check form-check-inline">
									<input type="radio" name="inte_insc" id="inte_insc1" value="0" class="form-check-input" {{ ($alumno->inte_insc == "0") ? "checked" : "\disabled" }}>
									<label for="inte_insc2" class="form-check-label">NO</label>
								</div>
							</div>
						</div>
						<br>
					</td>
				</tr>
				
			</tbody>
		</table>
		<br>
		<h5 class="center font-weight-bold">DATOS DEL ALUMNO/A</h5>
		<table class="table table-bordered container-fluid w-75 mx-auto">
			{{-- ((.col.row>(label.col-form-label+{&nbsp;&nbsp;}+input:text.form-control.col))+{ }) --}}
			<tbody>
				<tr>
					<td>
						<br>
						<div class="row">
							<div class="col">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text">Documento</div>
									</div>
									<div class="form-control">{{ $alumno->tipdocument_e }}</div>
									<div class="form-control">{{ $alumno->nrodocument_e }}</div>
								</div>
							</div>
	
							<div class="col">
								<div class="row">
	
									<label class="col-form-label" for="no_doc"> Si no posee documento indicar: </label>
									&nbsp; &nbsp; &nbsp;
									<div class="col-form-label">
										<input type="radio" id="entramite_m" name="estadodocumento_e" value="En Trámite" {{ ($alumno->estadodocumento_e == "En Trámite") ? "checked" : "\disabled" }}>
										<label for="exampleRadios1"> En trámite </label>
									</div>
									&nbsp; &nbsp; &nbsp;
									<div class="col-form-label">
										<input type="radio" id="nodoc_m" name="estadodocumento_e" value="No Tiene Documento" {{ ($alumno->estadodocumento_e == "No Tiene Documento") ? "checked" : "\disabled" }}>
										<label for="exampleRadios2"> No posee </label>
									</div>
								</div>
							</div>
						</div>
						<br>
	
						<div class="row">
							<div class="col row">
								<label for="apell_e" class="col-form-label col-2"> Apellido/s: </label> &nbsp; &nbsp;
								<div class="form-control col">{{ $alumno->apell_e }}</div>
							</div>
							<div class="col row">
								<label for="nomb_e" class="col-form-label col-2"> Nombre/s: </label> &nbsp; &nbsp;
								<div class="form-control col">{{ $alumno->nomb_e }}</div>
							</div>
							&nbsp; &nbsp;
						</div>
						<br>
						
						<div class="row">
							&nbsp; &nbsp;
							<div class="col-2 row">
								<label for="sexo_e" class="col-form-label">Sexo:</label> &nbsp; &nbsp;
								<div class="form-control col-6">{{ $alumno->sexo_e }}</div>
							</div>
	
							<div class="col-3 row mx-auto">
								<label for="bir_dat_e" class="col-form-label">Fecha de Nac.:</label> &nbsp; &nbsp;
								<div class="w-50 form-control">{{ $alumno->bir_dat_e }}</div>
							</div>
							
							<div class="col row">
								<label for="bir_pla_e" class="col-form-label">Lugar de Nac.:</label> &nbsp; &nbsp;
								<div class="col-7 form-control">{{ $alumno->bir_pla_e }}</div>
							</div>
							
							<div class="col row">
								<label for="nac_e" class="col-form-label">Nacionalidad:</label> &nbsp; &nbsp;
								<div class="col-7 form-control">{{ $alumno->nac_e }}</div>
							</div>
						</div>
						<br>
	
						<div class="row">
							&nbsp; &nbsp;
							<div class="col-1 col-form-label row">
								<b class="font-weight-bold"> DOMICILIO </b>
							</div>
							&nbsp; &nbsp;
							&nbsp; &nbsp;
							&nbsp; &nbsp;
							
							<div class="col-6 row">
								<label for="dom_calle_e" class="col-form-label">Calle:</label> &nbsp; &nbsp;
								<div class="form-control col-10">{{ $alumno->dom_calle_e }}</div>
							</div>
							
							<div class="col row">
								<label for="dom_nro_e" class="col-form-label">N°:</label> &nbsp; &nbsp;
								<div class="form-control col-6">{{ $alumno->dom_nro_e }}</div>
							</div>
							@if($alumno->dom_piso_e  != NULL)
							<div class="col row">
								<label for="dom_piso_e" class="col-form-label">Piso:</label> &nbsp; &nbsp; 
								<div class="form-control col-6">{{ $alumno->dom_piso_e }}</div>
							</div>
							@endif
							@if($alumno->dom_torre_e  != NULL)
							<div class="col row">
								<label for="dom_torre_e" class="col-form-label">Torre:</label> &nbsp; &nbsp;
								<div class="form-control col-6">{{ $alumno->dom_torre_e }}</div>
							</div>
							@endif
	
							&nbsp; &nbsp;
						</div>
						<br>
	
						<div class="row">
							&nbsp; &nbsp;
							@if($alumno->dom_dept_e  != NULL)
							<div class="col-2 row">
								<label for="dom_dept_e" class="col-form-label"> Dpto: </label>
								&nbsp; &nbsp;
								<div class="form-control col-6">{{ $alumno->dom_dept_e }}</div>
							</div>
							@endif
	
							<div class="col row">
								<label for="dom_entre_e" class="col-form-label"> Entre calles: </label>
								&nbsp; &nbsp;
								<div class="form-control col-10">{{ $alumno->dom_entre_e }}</div>
							</div>
	
							&nbsp; &nbsp;
						</div>
						<br>
						
						@if($alumno->dom_otro_e != NULL)
						<div class="row">
							&nbsp; &nbsp;
							
							<label for="dom_otro_e" class="col-form-label">Otro dato referido al domicilio: </label>
							&nbsp; &nbsp;
							<div class="form-control col">{{ $alumno->dom_otro_e }}</div>
								
							&nbsp; &nbsp;
						</div>
						@endif
						<br>
	
						<div class="row">
							&nbsp; &nbsp;
	
							<div class="col row">
								<label for="prov_e" class="col-form-label">Provincia:</label>
								&nbsp;&nbsp;
								<div class="form-control col-8">{{ $alumno->prov_e }}</div>
							</div>
							
							<div class="col row">
								<label for="dist_e" class="col-form-label">Distrito:</label>
								&nbsp;&nbsp;
								<div class="form-control col-8">{{ $alumno->dist_e }}</div>
							</div>
							
							<div class="col row">
								<label for="loc_e" class="col-form-label">Localidad:</label>
								&nbsp;&nbsp;
								<div class="form-control col-8">{{ $alumno->loc_e  }}</div>
							</div>
							
							<div class="col-3 row">
								<label for="codpost_e" class="col-form-label">Código Postal:</label>
								&nbsp;&nbsp;
								<div class="form-control col-6">{{ $alumno->codpost_e }}</div>
							</div>
							
							&nbsp; &nbsp;	
						</div>
						<br>
	
						<div class="row">
							&nbsp; &nbsp;
	
							<div class="input-group col">
								<div class="input-group-prepend">
									<div class="input-group-text" id="telefonos_fam">Teléfonos</div>
								</div>
								<div class="form-control">{{ $alumno->telefo_fam }}</div>
								<div class="form-control">{{ $alumno->telefocelular_fam }}</div>
							</div>
	
							<div class="col-5"></div>
	
							&nbsp; &nbsp;
						</div>
						<br>
	
					</td>
				</tr>
	
				<tr>
					<td>
						<div class="row">
							&nbsp; &nbsp;
							<b class="col-form-label font-weight-bold">OTROS DATOS DEL DEL/LA ALUMNO/A</b>
						</div>
						<br>
						
						<div class="row">
							&nbsp; &nbsp;
							
							<div class="col-3 row">
	
								<label for="her_tie_e" class="col-form-label">Hermanos</label>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="her_tie_e" id="her_tie_e1" value=1 {{ ($alumno->her_tie_e == "1") ? "checked" : "\disabled" }}>
									<label for="her_tie_e1">SI</label>
								</div>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="her_tie_e" id="her_tie_e2" value=0 {{ ($alumno->her_tie_e == "0") ? "checked" : "\disabled" }}>
									<label for="her_tie_e2">NO</label>
								</div>
							</div>
							
							<div class="col-3 row">
								<label for="her_can_e" class="col-form-label">Cantidad:</label>
								&nbsp;&nbsp;
								<div class="form-control col-5">{{ $alumno->her_can_e }}</div>
							</div>
							
							@if($alumno->her_can_e != 0)
							<div class="col row">
								<label for="her_este_e" class="col-form-label">Cantidad de hermanos que asisten a este establecimiento:</label>
								&nbsp;&nbsp;
								<div class="form-control col-2">{{ $alumno->her_este_e }}</div>
							</div>
							@endif
							
							&nbsp; &nbsp;
						</div>
						<br>
	
						<div class="row">
							&nbsp;&nbsp;
	
							<div class="col-1"></div>
							
							<div class="col row">
								<label for="hog_can_e" class="col-form-label">Cantidad de habitantes en el hogar:</label>
								&nbsp;&nbsp;
								<div class="form-control col-2">{{ $alumno->hog_can_e }}</div>
							</div>
							
							<div class="col row">
								<label for="hog_hab_e" class="col-form-label">Cantdad de habitaciones en el hogar:</label>
								&nbsp;&nbsp;
								<div class="form-control col-2">{{ $alumno->hog_hab_e }}</div>
							</div>
	
							&nbsp;&nbsp;
						</div>
						<br>
						
						<div class="row">
							&nbsp;&nbsp;
	
							<div class="col-1"></div>
	
							<div class="col-6 row">
								<label for="hog_leng_e" class="col-form-label">Otra lengua hablada en el hogar:</label>
								&nbsp;&nbsp;
								<div class="form-control col">{{ $alumno->hog_leng_e }}</div>
							</div>
	
							<div class="col"></div>
							
							&nbsp;&nbsp;
						</div>
						<br>
	
						<div class="row">
							&nbsp; &nbsp;
							<div class="col-2"></div>
							
							<div class="col row">
								<label for="ayuda_e" class="col-form-label">Recibe ayuda escolar</label>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="ayuda_e" id="ayuda_e1" value=1 {{ ($alumno->ayuda_e == "1") ? "checked" : "\disabled" }}>
									<label for="ayuda_e1">SI</label>
								</div>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="ayuda_e" id="ayuda_e2" value=0 {{ ($alumno->ayuda_e == "0") ? "checked" : "\disabled" }}>
									<label for="ayuda_e2">NO</label>
								</div>
							</div>
							
							<div class="col row">
								<label for="obras_e" class="col-form-label">Obra social</label>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="obras_e" id="obras_e1" value=1 {{ ($alumno->obras_e == "1") ? "checked" : "\disabled" }}>
									<label for="obras_e1">SI</label>
								</div>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="obras_e" id="obras_e2" value=0 {{ ($alumno->obras_e == "0") ? "checked" : "\disabled" }}>
									<label for="obras_e2">NO</label>
								</div>
							</div>
							
							<div class="col-2"></div>
	
							&nbsp; &nbsp;
						</div>
						<br>
	
						<div class="row">
							&nbsp; &nbsp;
	
							<div class="col-1"></div>
	
							<div class="col-6 row">
								<label for="prog_e" class="col-form-label">¿Se encuentra integrado en algun plan o programa?</label>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="prog_e" id="prog_e1" value=1 {{ ($alumno->prog_e == "1") ? "checked" : "\disabled" }}>
									<label for="prog_e1">SI</label>
								</div>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="prog_e" id="prog_e2" value=0 {{ ($alumno->prog_e == "0") ? "checked" : "\disabled" }}>
									<label for="prog_e2">NO</label>
								</div>
							</div>
							
							<div class="col-4">
								<div class="form-check form-check-inline">
									<input type="checkbox" name="prog_auh_e" id="prog_auh_e"  class="form-check-input" {{ ($alumno->prog_auh_e == "1") ? "checked" : "\disabled" }}>
									<label for="prog_auh_e" class="form-check-label">AUH</label>
								</div>
	
								<div class="form-check form-check-inline">
									<input type="checkbox" name="prog_beca_ex_e" id="prog_beca_ex_e"  class="form-check-input" {{ ($alumno->prog_beca_ex_e == "1") ? "checked" : "\disabled" }}>
									<label for="prog_beca_ex_e" class="form-check-label">Becas por excepción</label>
								</div>
								
								<div class="form-check form-check-inline">
									<input type="checkbox" name="prog_progr_e" id="prog_progr_e"  class="form-check-input" {{ ($alumno->prog_progr_e == "1") ? "checked" : "\disabled" }}>
									<label for="prog_progr_e" class="form-check-label">Progresar</label>
								</div>
								
								<div class="form-check form-check-inline">
									<input type="checkbox" name="prog_otros_e" id="prog_otros_e"  class="form-check-input" {{ ($alumno->prog_otros_e == "1") ? "checked" : "\disabled" }}>
									<label for="prog_otros_e" class="form-check-label">Otros</label>
								</div>
								
								<div class="form-check form-check-inline">
									<input type="checkbox" name="prog_beca_jud_e" id="prog_beca_jud_e"  class="form-check-input" {{ ($alumno->prog_beca_jud_e == "1") ? "checked" : "\disabled" }}>
									<label for="prog_beca_jud_e" class="form-check-label">Becas para judicializados</label>
								</div>
							</div>
	
							&nbsp; &nbsp;
						</div>
						<br>
	
						<div class="row">
							<div class="col-1"></div>
							<div class="col">Medio de transporte que lo acerca al establecimiento:</div>
						</div>
						<div class="row">
							<div class="col"></div>
	
							<div class="col form-ckeck form-ckeck-inline">
								<input type="checkbox" name="trans_pie_e" id="trans_pie_e" class="form-check-input" {{ ($alumno->trans_pie_e == "1") ? "checked" : "\disabled" }}>
								<label for="trans_pie_e" class="form-check-label">A pie</label>
							</div>
							
							<div class="col form-ckeck form-ckeck-inline">
								<input type="checkbox" name="trans_omni_e" id="trans_omni_e" class="form-check-input" {{ ($alumno->trans_omni_e == "1") ? "checked" : "\disabled" }}>
								<label for="trans_omni_e" class="form-check-label">Omnibus</label>
							</div>
							
							<div class="col form-ckeck form-ckeck-inline">
								<input type="checkbox" name="trans_auto_e" id="trans_auto_e" class="form-check-input" {{ ($alumno->trans_auto_e == "1") ? "checked" : "\disabled" }}>
								<label for="trans_auto_e" class="form-check-label">Auto Particular</label>
							</div>
							
							<div class="col form-ckeck form-ckeck-inline">
								<input type="checkbox" name="trans_taxi_e" id="trans_taxi_e" class="form-check-input" {{ ($alumno->trans_taxi_e == "1") ? "checked" : "\disabled" }}>
								<label for="trans_taxi_e" class="form-check-label">Taxi/Remís</label>
							</div>
							
							<div class="col form-ckeck form-ckeck-inline">
								<input type="checkbox" name="trans_otro_e" id="trans_otro_e" class="form-check-input" {{ ($alumno->trans_otro_e == "1") ? "checked" : "\disabled" }}>
								<label for="trans_otro_e" class="form-check-label">Otro</label>
							</div>
							
						</div>
						<br>
	
						<div class="row">
							&nbsp; &nbsp;
							<b class="col-form-label font-weight-bold">CONTESTAN ALUMNOS DE 14 AÑOS Y MÁS</b>
						</div>
	
						<div class="row">
							<div class="col-5">
								<label for="hijo_e" class="col-form-label">Tiene hijos menores de 3 años</label>
								&nbsp; &nbsp;
	
								<div class="form-check form-check-inline">
									<input type="radio" name="hijo_e" id="hijo_e1" value=1 class="form-check-input"  {{ ($alumno->hijo_e == "1") ? "checked" : "\disabled" }}>
									<label for="hijo_e1" class="form-check-label">SI</label>
								</div>
								
								<div class="form-check form-check-inline">
									<input type="radio" name="hijo_e" id="hijo_e2" value=0 class="form-check-input"  {{ ($alumno->hijo_e == "0") ? "checked" : "\disabled" }}>
									<label for="hijo_e2" class="form-check-label">NO</label>
								</div>
							</div>
	
							<div class="col">
								<label for="hijo_proy_e" class="col-form-label">Asisten a una sala del Proyecto de Salas Maternales</label>
								&nbsp; &nbsp;
	
								<div class="form-check form-check-inline">
									<input type="radio" name="hijo_proy_e" id="hijo_proy_e1" value=1 class="form-check-input" {{ ($alumno->hijo_proy_e == "1") ? "checked" : "\disabled" }}>
									<label for="hijo_proy_e1" class="form-check-label">SI</label>
								</div>
								
								<div class="form-check form-check-inline">
									<input type="radio" name="hijo_proy_e" id="hijo_proy_e2" value=0 class="form-check-input" {{ ($alumno->hijo_proy_e == "0") ? "checked" : "\disabled" }}>
									<label for="hijo_proy_e2" class="form-check-label">NO</label>
								</div>
							</div>
						</div>
						<br>
					</td>
				</tr>
			</tbody>
		</table>
		@isset($alumno->emailfamilia)
		<h5 class="center font-weight-bold">DATOS DEL ALUMNO/A - ANTIGUOS<br><small class="text-muted">Antes del 01/12/2020</small></h5>
		<table class="table table-bordered container-fluid w-75 mx-auto">
			<tbody>
				<tr>
					<td>
						<div class="row">
							<div class="col-1"></div>
							<div class="col-2"><label for="cursoa" class="col-form-label font-weight-bold">Año cursado en 2020	:</label></div>
							<div class="col-1 form-control">{{ $alumno->cursoa }}</div>
						</div>
						<div class="row">
							<div class="col-5">
								<label for="apeynombrehno" class="col-form-label">Nombre y Apellido de hermano que asiste a la Escuela:</label>
							</div>
							<div class="col">
								
								<div class="form-control">{{ $alumno->apeynombrehno }}</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								Observaciones:
								<textarea style="resize: none;" rows="5" class="form-control" \disabled>{{ $alumno->observaciones }}</textarea>
							</div>
							<div class="col-2"></div>
						</div>
						<br>
						<div class="row">
							<div class="col-2">
								<label for="emailfamilia" class="col-form-label">Email de la Familia:</label>
							</div>
							<div class="col">
								<div class="form-control">{{ $alumno->emailfamilia }}</div>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	@endisset
		<br>

@foreach ($responsables as $item)
<br>
	<h5 class="center font-weight-bold">DATOS DE LA MADRE</h5>
	<table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
		<tbody>
			<tr>
				<td>
					<div class="form-row">
						<div class="col">
							<label for="apell_mad">Apellido/s:</label>
							<div class="form-control">{{ $item->apell_mad }}</div>
						</div>
						<div class="col">
							<label for="nomb_mad">Nombre/s:</label>
							<div class="form-control">{{ $item->nomb_mad }}</div>
						</div>
					</div>    
				
					<br><br>
				
					<div class="row container-fluid">
						&nbsp; &nbsp;
						<div class="col-5 row">
							
							<label for="naciona_mad" class="col-form-label">Nacionalidad:</label> &nbsp;
							&nbsp; &nbsp;
							<div class="form-control col">{{ $item->naciona_mad }}</div>
						</div>
						&nbsp; &nbsp;
						<div class="col">
							&nbsp;&nbsp;¿Asistió a algún establecimiento educacional? &nbsp; &nbsp;
							<input type="radio" id="yes_ed_m" required name="asistioeducacion_mad" value=1 {{ ($item->asistioeducacion_mad == "1") ? "checked" : "\disabled" }}>
							<label for="yes_ed_m">Si</label>&nbsp; 
							&nbsp;
							<input type="radio" id="no_ed_m" name="asistioeducacion_mad" value=0 {{ ($item->asistioeducacion_mad == "0") ? "checked" : "\disabled" }}>
							<label for="no_ed_m">No</label>
						</div>
					</div>
				
					<br><br>
				
					¿Nivel más alto que cursó? &nbsp;&nbsp;
					<input type="radio" id="primario_m" required name="nivelaltocursado_mad" value="primario" {{ ($item->nivelaltocursado_mad == "primario") ? "checked" : "\disabled" }}>
					<label for="primario_m">Primario</label>&nbsp;
					<input type="radio" id="secundario_m" name="nivelaltocursado_mad" value="secundario" {{ ($item->nivelaltocursado_mad == "secundario") ? "checked" : "\disabled" }}>
					<label for="secundario_m">Secundario</label>&nbsp;
					<input type="radio" id="terceario_m" name="nivelaltocursado_mad" value="terciario" {{ ($item->nivelaltocursado_mad == "terciario") ? "checked" : "\disabled" }}>
					<label for="terceario_m">Terciario</label>&nbsp;
					<input type="radio" id="universitario_m" name="nivelaltocursado_mad" value="universitario" {{ ($item->nivelaltocursado_mad == "universitario") ? "checked" : "\disabled" }}>
					<label for="universitario_m">Universitario</label>&nbsp;
				
					<br><br> ¿Completó ese nivel? &nbsp; &nbsp;
					<input type="radio" id="yes_comed_m" required name="completoniv_mad" value=1 {{ ($item->completoniv_mad == "1") ? "checked" : "\disabled" }}>
					<label for="yes_comed_m">Si</label> &nbsp;
					<input type="radio" id="no_comed_m" name="completoniv_mad" value=0 {{ ($item->completoniv_mad == "0") ? "checked" : "\disabled" }}>
					<label for="no_comed_m">No</label>
					
					<br><br/>
					
					¿Vive? &nbsp; &nbsp; 
					<input type="radio" id="yes_vive_m"  name="vive_mad" value=1 {{ ($item->vive_mad == "1") ? "checked" : "\disabled" }}>
					<label for="yes_vive_m">  Si</label>
					&nbsp; &nbsp; 
					<input type="radio" id="no_vive_m" name="vive_mad" value=0 {{ ($item->vive_mad == "0") ? "checked" : "\disabled" }}>
					<label for="no_vive_m">   No</label>
				</td>
			</tr>
			@if($item->vive_mad)
			<tr>
				<td>
		
				
				<div class="form-row">
					<div class="col">
					<div class="input-group">
						<div class="input-group-prepend">
						<span class="input-group-text" id="documento_mad">Documento</span>
						</div>
						<div class="form-control">{{ $item->tipdocument_mad }}</div>
						<div class="form-control">{{ $item->nrodocument_mad }}</div>
					</div>
					</div>
					<div class="col">
					&nbsp; &nbsp; 
					Si no posee documento indicar: <br>
					&nbsp; &nbsp;<input type="radio" id="entramite_m" name="estadodocumento_mad" value="En Trámite" {{ ($item->estadodocumento_mad == "En Trámite") ? "checked" : "\disabled" }}>
					<label for="entramited_m">En Trámite</label>
					<input type="radio" id="nodoc_m" name="estadodocumento_mad" value="No Tiene Documento" {{ ($item->estadodocumento_mad == "No Tiene Documento") ? "checked" : "\disabled" }}>
					<label for="nodoc_m">No Tiene Doc.</label>
					</div>
				</div>    
				</td>
			</tr>
			<tr>
				<td>  
				
				<div class="form-row align-middle row">
						
					
					<label for="domicilio" class="col-form-label"> DOMICILIO </label>
					
					<div class="col-5">
						<div class="input-group">
							<div class="form-control w-50">{{ $item->callenombre_mad }}</div>
							<div class="form-control">{{ $item->callenro_mad }}</div>
						</div>
					</div>
					&nbsp; &nbsp; &nbsp; &nbsp;
					<div class="col row">
						<label for="piso_mad" class="col-form-label">Piso:</label>
						&nbsp; &nbsp;
						<div class="form-control col-8">{{ $item->piso_mad }}</div>
					</div>
					<div class="col row">
						<label for="torre_mad" class="col-form-label">Torre:</label>
						&nbsp; &nbsp;
						<div class="form-control col-9">{{ $item->torre_mad }}</div>
					</div>
				</div>
		
				<br>
				
				
				<div class="container-fluid">
					<div class="row">
						<div class="col row">
							<label for="dpto_mad" class="col-form-label">Dpto:</label> &nbsp;&nbsp;
							<div class="form-control col-8">{{ $item->dpto_mad }}</div>
						</div>
						<div class="col row">
							<label for="distrito_mad" class="col-form-label">Distrito:</label>&nbsp;&nbsp;
							<div class="form-control col-8">{{ $item->distrito_mad }}</div>
						</div>
						<div class="col row">
							<label for="provincia_mad" class="col-form-label">Provincia:</label>&nbsp;&nbsp;
							<div class="form-control col-8">{{ $item->provincia_mad }}</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-2"> </div>

						<div class="col row">
							<label for="localidad_mad" class="col-form-label">Localidad:</label>&nbsp;&nbsp;
							<div class="form-control col">{{ $item->localidad_mad }}</div>
						</div>
						&nbsp; &nbsp;
						
						<div class="col row">
							<label for="codpostal_mad" class="col-form-label">Cod. Postal:</label>&nbsp;&nbsp;
							<div class="form-control col">{{ $item->codpostal_mad }}</div>
						</div>
						
						<div class="col-2"> </div>
					</div>
				</div>
				
				<br><br>
		
				<div class="container-fluid">
					<div class="row form group">
						<div class="col">
							<div class="form-row">
								<div class="col">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="telefonos_mad">Teléfonos</span>
										</div>
										<div class="form-control">{{ $item->telefono_mad }}</div>
										<div class="form-control">{{ $item->telefonocelular_mad }}</div>
									</div>
								</div>
							</div>
						</div>
						<label for="email" class="col-form-label mx-auto">E-mail:</label>
		
						<div class="col-5">
							<div class="form-control" aria-label="E-mail" aria-describedby="basic-addon2">{{ $item->email_mad }}</div>
						</div>
					
						{{-- <div class="col"></div> --}}
					</div>
				</div>
					
				</td>
			</tr>
			<tr>
				<td> 
			
				<div class="form-row">
					<div class="col">
						¿Es jefe del hogar? &nbsp;
						&nbsp; &nbsp;
						<input type="radio" id="yes_jefehogar_m" name="jefehogar_mad" value=1 {{ ($item->jefehogar_mad == "1") ? "checked" : "\disabled" }}>
						<label for="entramited_m">Si</label>
						&nbsp; &nbsp;
						<input type="radio" id="no_jefehogar_m" name="jefehogar_mad" value=0 {{ ($item->jefehogar_mad == "0") ? "checked" : "\disabled" }}>
						<label for="nodoc_m">No</label>
					</div>
					<div class="col row">
						<label for="profesion_mad" class="col-form-label">Profesión u ocupación: </label>
						&nbsp; &nbsp;
						<div class="form-control col-7">{{ $item->profesion_mad }}</div>
					</div>
				</div>
				
				<br/>
				
				<div class="cond">
					<b class="font-weight-bold">CONDICIÓN DE ACTIVIDAD</b> <br/><br/>
					<input type="radio" id="solotrabaja_m" name="condicionactividad_mad" value="Solo Trabaja" {{ ($item->condicionactividad_mad == "Solo Trabaja") ? "checked" : "\disabled" }}>
					<label for="solotrabaja_m">Sólo Trabaja</label>
					&nbsp; &nbsp; 
					<input type="radio" id="trabajaestudia_m" name="condicionactividad_mad" value="Trabaja y Estudia" {{ ($item->condicionactividad_mad == "Trabaja y Estudia") ? "checked" : "\disabled" }}>
					<label for="trabajaestudia_m">Trabaja y Estudia</label>
					&nbsp; &nbsp; 
					<input type="radio" id="trabajayjub_m" name="condicionactividad_mad" value="Trabaja y Recibe Jubilacion o Pension" {{ ($item->condicionactividad_mad == "Trabaja y Recibe Jubilacion o Pension") ? "checked" : "\disabled" }}>
					<label for="trabajayjub_m">Trabaja y Recibe Jubilac. o Pensión</label>
					&nbsp; &nbsp; 
					<input type="radio" id="buscatrabajo_m" name="condicionactividad_mad" value="Solo Busca Trabajo" {{ ($item->condicionactividad_mad == "Solo Busca Trabajo") ? "checked" : "\disabled" }}>
					<label for="buscatrabajo_m">Sólo Busca Trabajo</label>
					&nbsp; &nbsp; 
					<input type="radio" id="soloestudia_m" name="condicionactividad_mad" value="Solo Estudia" {{ ($item->condicionactividad_mad == "Solo Estudia") ? "checked" : "\disabled" }}>
					<label for="soloestudia_m">Sólo Estudia</label>
					<br/>
					<input type="radio" id="buscatrabajoestudia_m" name="condicionactividad_mad" value="Busca Trabajo y Estudia" {{ ($item->condicionactividad_mad == "Busca Trabajo y Estudia") ? "checked" : "\disabled" }}>
					<label for="buscatrabajoestudia_m">Busca Trabajo y Estudia</label>
					&nbsp; &nbsp; 
					<input type="radio" id="buscatrabajo_jubilada_m" name="condicionactividad_mad" value="Busca Trabajo y Recibe Jubilacion o Pension" {{ ($item->condicionactividad_mad == "Busca Trabajo y Recibe Jubilacion o Pension") ? "checked" : "\disabled" }} >
					<label for="buscatrabajo_jubilada_m">Busca Trabajo y Recibe Jubilac. o Pensión</label>
					&nbsp; &nbsp; 
					<input type="radio" id="jubilada_m" name="condicionactividad_mad" value="Jubilado/Pensionado" {{ ($item->condicionactividad_mad == "Jubilado/Pensionado") ? "checked" : "\disabled" }} >
					<label for="jubilada_m">Jubilado/Pensionado</label>
					&nbsp; &nbsp; 
					<input type="radio" id="otrocond_m" name="condicionactividad_mad" value="Otro" {{ ($item->condicionactividad_mad == "Otro") ? "checked" : "\disabled" }}>
					<label for="otrocond_m">Otro</label>
				</div>
				</td>
			</tr>
		@endif
		</tbody>
	</table>
	<br>
	<h5 class="center font-weight-bold">DATOS DEL PADRE</h5>
	<table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
			<tbody>
				<tr>
					<td>
						<div class="form-row">
							<div class="col">
								<label for="apell_pad">Apellido/s:</label>
								<div class="form-control">{{ $item->apell_pad }}</div>
							</div>
							<div class="col">
								<label for="nomb_pad">Nombre/s:</label>
								<div class="form-control">{{ $item->nomb_pad }}</div>
							</div>
						</div>    
					
						<br><br>
					
						<div class="row container-fluid">
							&nbsp; &nbsp;
							<div class="col-5 row">
								
								<label for="naciona_pad" class="col-form-label">Nacionalidad:</label> &nbsp;
								&nbsp; &nbsp;
								<div class="form-control col">{{ $item->naciona_pad }}</div>
							</div>
							&nbsp; &nbsp;
							<div class="col">
								&nbsp;&nbsp;¿Asistió a algún establecimiento educacional? &nbsp; &nbsp;
								<input type="radio" id="yes_ed_p" required name="asistioeducacion_pad" value=1 {{ ($item->asistioeducacion_pad == "1") ? "checked" : "\disabled" }}>
								<label for="yes_ed_p">Si</label>&nbsp; 
								&nbsp;
								<input type="radio" id="no_ed_p" name="asistioeducacion_pad" value=0 {{ ($item->asistioeducacion_pad == "0") ? "checked" : "\disabled" }}>
								<label for="no_ed_p">No</label>
							</div>
						</div>
					
						<br><br>
					
						¿Nivel más alto que cursó? &nbsp;&nbsp;
						<input type="radio" id="primario_p" required name="nivelaltocursado_pad" value="primario" {{ ($item->nivelaltocursado_pad == "primario") ? "checked" : "\disabled" }}>
						<label for="primario_p">Primario</label>&nbsp;
						<input type="radio" id="secundario_p" name="nivelaltocursado_pad" value="secundario" {{ ($item->nivelaltocursado_pad == "secundario") ? "checked" : "\disabled" }}>
						<label for="secundario_p">Secundario</label>&nbsp;
						<input type="radio" id="terceario_p" name="nivelaltocursado_pad" value="terciario" {{ ($item->nivelaltocursado_pad == "terciario") ? "checked" : "\disabled" }}>
						<label for="terceario_p">Terciario</label>&nbsp;
						<input type="radio" id="universitario_p" name="nivelaltocursado_pad" value="universitario" {{ ($item->nivelaltocursado_pad == "universitario") ? "checked" : "\disabled" }}>
						<label for="universitario_p">Universitario</label>&nbsp;
					
						<br><br> ¿Completó ese nivel? &nbsp; &nbsp;
						<input type="radio" id="yes_comed_p" required name="completoniv_pad" value=1 {{ ($item->completoniv_pad == "1") ? "checked" : "\disabled" }}>
						<label for="yes_comed_p">Si</label> &nbsp;
						<input type="radio" id="no_comed_p" name="completoniv_pad" value=0 {{ ($item->completoniv_pad == "0") ? "checked" : "\disabled" }}>
						<label for="no_comed_p">No</label>
						
						<br><br/>
						
						¿Vive? &nbsp; &nbsp; 
						<input type="radio" id="yes_vive_p" required name="vive_pad" value=1 {{ ($item->vive_pad == "1") ? "checked" : "\disabled" }}>
						<label for="yes_vive_p">  Si</label>
						&nbsp; &nbsp; 
						<input type="radio" id="no_vive_p" name="vive_pad" value=0 {{ ($item->vive_pad == "0") ? "checked" : "\disabled" }}>
						<label for="no_vive_p">   No</label>
					</td>
				</tr>
				@if($item->vive_pad)
				<tr>
					<td>
			
					
					<div class="form-row">
						<div class="col">
						<div class="input-group">
							<div class="input-group-prepend">
							<span class="input-group-text" id="documento_pad">Documento</span>
							</div>
							<div class="form-control col">{{ $item->tipdocument_pad }}</div>
							<div class="form-control col">{{ $item->nrodocument_pad }}</div>
						</div>
						</div>
						<div class="col">
						&nbsp; &nbsp; 
						Si no posee documento indicar: <br>
						&nbsp; &nbsp;<input type="radio" id="entramite_p" name="estadodocumento_pad" value="En Trámite" {{ ($item->estadodocumento_pad == "En Trámite") ? "checked" : "\disabled" }}>
						<label for="entramited_p">En Trámite</label>
						<input type="radio" id="nodoc_p" name="estadodocumento_pad" value="No Tiene Documento" {{ ($item->estadodocumento_pad == "No Tiene Documento") ? "checked" : "\disabled" }}>
						<label for="nodoc_p">No Tiene Doc.</label>
						</div>
					</div>    
					</td>
				</tr>
				<tr>
					<td>  
					
					<div class="form-row align-middle row">
						
						
						<label for="domicilio" class="col-form-label"> DOMICILIO </label>
						
						<div class="col-5">
							<div class="input-group">
								<div class="form-control w-50">{{ $item->callenombre_pad }}</div>
								<div class="form-control">{{ $item->callenro_pad }}</div>
							</div>
						</div>
						&nbsp; &nbsp; &nbsp; &nbsp;
						<div class="col row">
							<label for="piso_pad" class="col-form-label">Piso:</label>
							&nbsp; &nbsp;
							<div class="form-control col-8">{{ $item->piso_pad }}</div>
						</div>
						<div class="col row">
							<label for="torre_pad" class="col-form-label">Torre:</label>
							&nbsp; &nbsp;
							<div  class="form-control col-9">{{ $item->torre_pad }}</div> 
						</div>
					</div>
			
					<br>
					
					
					<div class="container-fluid">
						<div class="row">
							<div class="col row">
								<label for="dpto_pad" class="col-form-label">Dpto:</label> &nbsp;&nbsp;
								<div class="form-control col-8">{{ $item->dpto_pad }}</div>
							</div>
							<div class="col row">
								<label for="distrito_pad" class="col-form-label">Distrito:</label>&nbsp;&nbsp;
								<div class="form-control col-8">{{ $item->distrito_pad }}</div>
							</div>
							<div class="col row">
								<label for="provincia_pad" class="col-form-label">Provincia:</label>&nbsp;&nbsp;
								<div class="form-control col-8">{{ $item->provincia_pad }}</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-2"> </div>

							<div class="col row">
								<label for="localidad_pad" class="col-form-label">Localidad:</label>&nbsp;&nbsp;
								<div  class="form-control col">{{ $item->localidad_pad }}</div>
							</div>
							&nbsp; &nbsp;
							
							<div class="col row">
								<label for="codpostal_pad" class="col-form-label">Cod. Postal:</label>&nbsp;&nbsp;
								<div class="form-control col">{{ $item->codpostal_pad }}</div>
							</div>
							
							<div class="col-2"> </div>
						</div>
					</div>
					
					<br><br>
			
					<div class="container-fluid">
						<div class="row form group">
							<div class="col">
								<div class="form-row">
									<div class="col">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id="telefonos_pad">Teléfonos</span>
											</div>
											<div class="form-control">{{ $item->telefono_pad }}</div>
											<div class="form-control">{{ $item->telefonocelular_pad }}</div>
										</div>
									</div>
								</div>
							</div>
							<label for="email" class="col-form-label mx-auto">E-mail:</label>
			
							<div class="col-5">
								<div class="form-control" aria-label="E-mail" aria-describedby="basic-addon2">{{ $item->email_pad }}</div>
							</div>
						
							{{-- <div class="col"></div> --}}
						</div>
					</div>
					
					</td>
				</tr>
				<tr>
					<td> 
			
					<div class="form-row">
						<div class="col">
							¿Es jefe del hogar? &nbsp;
							&nbsp; &nbsp;
							<input type="radio" id="yes_jefehogar_p" name="jefehogar_pad" value=1 {{ ($item->jefehogar_pad == "1") ? "checked" : "\disabled" }}>
							<label for="entramited_p">Si</label>
							&nbsp; &nbsp;
							<input type="radio" id="no_jefehogar_p" name="jefehogar_pad" value=0 {{ ($item->jefehogar_pad == "0") ? "checked" : "\disabled" }}>
							<label for="nodoc_p">No</label>
						</div>
						<div class="col row">
							<label for="profesion_pad" class="col-form-label">Profesión u ocupación: </label>
							&nbsp; &nbsp;
							<div class="form-control col-7">{{ $item->profesion_pad }}</div>
						</div>
					</div>
					
					<br/>
					
					<div class="cond">
						<b class="font-weight-bold">CONDICIÓN DE ACTIVIDAD</b> <br/><br/>
						<input type="radio" id="solotrabaja_p" name="condicionactividad_pad" value="Solo Trabaja" {{ ($item->condicionactividad_pad == "Solo Trabaja") ? "checked" : "\disabled" }}>
						<label for="solotrabaja_p">Sólo Trabaja</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajaestudia_p" name="condicionactividad_pad" value="Trabaja y Estudia" {{ ($item->condicionactividad_pad == "Trabaja y Estudia") ? "checked" : "\disabled" }}>
						<label for="trabajaestudia_p">Trabaja y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajayjub_p" name="condicionactividad_pad" value="Trabaja y Recibe Jubilacion o Pension" {{ ($item->condicionactividad_pad == "Trabaja y Recibe Jubilacion o Pension") ? "checked" : "\disabled" }}>
						<label for="trabajayjub_p">Trabaja y Recibe Jubilac. o Pensión</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_p" name="condicionactividad_pad" value="Solo Busca Trabajo" {{ ($item->condicionactividad_pad == "Solo Busca Trabajo") ? "checked" : "\disabled" }}>
						<label for="buscatrabajo_p">Sólo Busca Trabajo</label>
						&nbsp; &nbsp; 
						<input type="radio" id="soloestudia_p" name="condicionactividad_pad" value="Solo Estudia" {{ ($item->condicionactividad_pad == "Solo Estudia") ? "checked" : "\disabled" }}>
						<label for="soloestudia_p">Sólo Estudia</label>
						<br>
						<input type="radio" id="buscatrabajoestudia_p" name="condicionactividad_pad" value="Busca Trabajo y Estudia" {{ ($item->condicionactividad_pad == "Busca Trabajo y Estudia") ? "checked" : "\disabled" }}>
						<label for="buscatrabajoestudia_p">Busca Trabajo y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_jubilada_p" name="condicionactividad_pad" value="Busca Trabajo y Recibe Jubilacion o Pension" {{ ($item->condicionactividad_pad == "Busca Trabajo y Recibe Jubilacion o Pension") ? "checked" : "\disabled" }}>
						<label for="buscatrabajo_jubilada_p">Busca Trabajo y Recibe Jubilac. o Pensión</label>
						&nbsp; &nbsp; 
						<input type="radio" id="jubilada_p" name="condicionactividad_pad" value="Jubilado/Pensionado" {{ ($item->condicionactividad_pad == "Jubilado/Pensionado") ? "checked" : "\disabled" }}>
						<label for="jubilada_p">Jubilado/Pensionado</label>
						&nbsp; &nbsp; 
						<input type="radio" id="otrocond_p" name="condicionactividad_pad" value="Otro" {{ ($item->condicionactividad_pad == "Otro") ? "checked" : "\disabled" }}>
						<label for="otrocond_p">Otro</label>
					</div>
					</td>
				</tr>
				@endif
			</tbody>
	</table>
	@if($item->apell_tut != NULL or $item->nomb_tut != NULL)
	<br>
	<h5 class="center font-weight-bold">DATOS DEL TUTOR</h5>
	<table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
			<tbody>
				<tr>
					<td>
						<div class="form-row">
							<div class="col">
								<label for="apell_tut">Apellido/s:</label>
								<div class="form-control">{{ $item->apell_tut }}</div>
							</div>
							<div class="col">
								<label for="nomb_tut">Nombre/s:</label>
								<div class="form-control">{{ $item->nomb_tut }}</div>
							</div>
						</div>    
					
						<br><br>
					
						<div class="row container-fluid">
							&nbsp; &nbsp;
							<div class="col-5 row">
								
								<label for="naciona_tut" class="col-form-label">Nacionalidad:</label> &nbsp;
								&nbsp; &nbsp;
								<div class="form-control col">{{ $item->naciona_tut }}</div>
							</div>
							&nbsp; &nbsp;
							<div class="col">
								&nbsp;&nbsp;¿Asistió a algún establecimiento educacional? &nbsp; &nbsp;
								<input type="radio" id="yes_ed_t" name="asistioeducacion_tut" value=1 {{ ($item->asistioeducacion_tut == "1") ? "checked" : "\disabled" }}>
								<label for="yes_ed_t">Si</label>&nbsp; 
								&nbsp;
								<input type="radio" id="no_ed_t" name="asistioeducacion_tut" value=0 {{ ($item->asistioeducacion_tut == "0") ? "checked" : "\disabled" }}>
								<label for="no_ed_t">No</label>
							</div>
						</div>
					
						<br><br>
					
						¿Nivel más alto que cursó? &nbsp;&nbsp;
						<input type="radio" id="primario_t" name="nivelaltocursado_tut" value="primario" {{ ($item->nivelaltocursado_tut == "primario") ? "checked" : "\disabled" }}>
						<label for="primario_t">Primario</label>&nbsp;
						<input type="radio" id="secundario_t" name="nivelaltocursado_tut" value="secundario" {{ ($item->nivelaltocursado_tut == "secundario") ? "checked" : "\disabled" }}>
						<label for="secundario_t">Secundario</label>&nbsp;
						<input type="radio" id="terceario_t" name="nivelaltocursado_tut" value="terciario" {{ ($item->nivelaltocursado_tut == "terciario") ? "checked" : "\disabled" }}>
						<label for="terceario_t">Terciario</label>&nbsp;
						<input type="radio" id="universitario_t" name="nivelaltocursado_tut" value="universitario" {{ ($item->nivelaltocursado_tut == "universitario") ? "checked" : "\disabled" }}>
						<label for="universitario_t">Universitario</label>&nbsp;
					
						<br><br> ¿Completó ese nivel? &nbsp; &nbsp;
						<input type="radio" id="yes_comed_t" name="completoniv_tut" value=1 {{ ($item->completoniv_tut == "1") ? "checked" : "\disabled" }}>
						<label for="yes_comed_t">Si</label> &nbsp;
						<input type="radio" id="no_comed_t" name="completoniv_tut" value=0 {{ ($item->completoniv_tut == "0") ? "checked" : "\disabled" }}>
						<label for="no_comed_t">No</label>
						
						<br><br>
					
						<div class="form-row">
							<div class="col">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="documento_tut">Documento</span>
									</div>
									<div class="form-control">{{ $item->tipdocument_tut }}</div>
									<div class="form-control">{{ $item->nrodocument_tut }}</div>
								</div>
							</div>
							<div class="col">
								&nbsp; &nbsp; 
								Si no posee documento indicar: <br>
								&nbsp; &nbsp;<input type="radio" id="entramite_t" name="estadodocumento_tut" value="En Trámite" {{ ($item->estadodocumento_tut == "En Trámite") ? "checked" : "\disabled" }}>
								<label for="entramited_t">En Trámite</label>
								<input type="radio" id="nodoc_t" name="estadodocumento_tut" value="No Tiene Documento" {{ ($item->estadodocumento_tut == "No Tiene Documento") ? "checked" : "\disabled" }}>
								<label for="nodoc_t">No Tiene Doc.</label>
							</div>
						</div>    
					</td>
				</tr>
				<tr>
					<td>  
					
					<div class="form-row align-middle row">
						
						
						<label for="domicilio" class="col-form-label"> DOMICILIO </label>
						
						<div class="col-5">
							<div class="input-group">
								<div class="form-control w-50">{{ $item->callenombre_tut }}</div>
								<div class="form-control">{{ $item->callenro_tut }}</div>
							</div>
						</div>
						&nbsp; &nbsp; &nbsp; &nbsp;
						<div class="col row">
							<label for="piso_tut" class="col-form-label">Piso:</label>
							&nbsp; &nbsp;
							<div class="form-control col-8">{{ $item->piso_tut }}</div>
						</div>
						<div class="col row">
							<label for="torre_tut" class="col-form-label">Torre:</label>
							&nbsp; &nbsp;
							<div class="form-control col-9">{{ $item->torre_tut }}</div>
						</div>
					</div>
			
					<br>
					
					
					<div class="container-fluid">
						<div class="row">
							<div class="col row">
								<label for="dpto_tut" class="col-form-label">Dpto:</label> &nbsp;&nbsp;
								<div class="form-control col-8">{{ $item->dpto_tut }}</div>
							</div>
							<div class="col row">
								<label for="distrito_tut" class="col-form-label">Distrito:</label>&nbsp;&nbsp;
								<div class="form-control col-8">{{ $item->distrito_tut }}</div>
							</div>
							<div class="col row">
								<label for="provincia_tut" class="col-form-label">Provincia:</label>&nbsp;&nbsp;
								<div class="form-control col-8">{{ $item->provincia_tut }}</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-2"> </div>

							<div class="col row">
								<label for="localidad_tut" class="col-form-label">Localidad:</label>&nbsp;&nbsp;
								<div class="form-control col">{{ $item->localidad_tut }}</div>
							</div>
							&nbsp; &nbsp;
							
							<div class="col row">
								<label for="codpostal_tut" class="col-form-label">Cod. Postal:</label>&nbsp;&nbsp;
								<div class="form-control col">{{ $item->codpostal_tut }}</div>
							</div>
							
							<div class="col-2"> </div>
						</div>
					</div>
					
					<br><br>
			
					<div class="container-fluid">
						<div class="row form group">
							<div class="col">
								<div class="form-row">
									<div class="col">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id="telefonos_tut">Teléfonos</span>
											</div>
											<div class="form-control">{{ $item->telefono_tut }}</div>
											<div class="form-control">{{ $item->telefonocelular_tut }}</div>
										</div>
									</div>
								</div>
							</div>
							<label for="email" class="col-form-label mx-auto">E-mail:</label>
			
							<div class="col-5">
								<div class="form-control" aria-label="E-mail" aria-describedby="basic-addon2">{{ $item->email_tut }}</div>
							</div>
						
							{{-- <div class="col"></div> --}}
						</div>
					</div>
					
					</td>
				</tr>
				<tr>
					<td> 
			
					<div class="form-row">
						<div class="col">
							¿Es jefe del hogar? &nbsp;
							&nbsp; &nbsp;
							<input type="radio" id="yes_jefehogar_t" name="jefehogar_tut" value=1 {{ ($item->jefehogar_tut == "1") ? "checked" : "\disabled" }}>
							<label for="entramited_t">Si</label>
							&nbsp; &nbsp;
							<input type="radio" id="no_jefehogar_t" name="jefehogar_tut" value=0 {{ ($item->jefehogar_tut == "0") ? "checked" : "\disabled" }}>
							<label for="nodoc_t">No</label>
						</div>
						<div class="col row">
							<label for="profesion_tut" class="col-form-label">Profesión u ocupación: </label>
							&nbsp; &nbsp;
							<div class="form-control col-7">{{ $item->profesion_tut }}</div>
						</div>
					</div>
					
					<br/>
					
					<div class="cond">
						<b class="font-weight-bold">CONDICIÓN DE ACTIVIDAD</b> <br/><br/>
						<input type="radio" id="solotrabaja_t" name="condicionactividad_tut" value="Solo Trabaja" {{ ($item->condicionactividad_tut == "Solo Trabaja") ? "checked" : "\disabled" }}>
						<label for="solotrabaja_t">Sólo Trabaja</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajaestudia_t" name="condicionactividad_tut" value="Trabaja y Estudia" {{ ($item->condicionactividad_tut == "Trabaja y Estudia") ? "checked" : "\disabled" }}>
						<label for="trabajaestudia_t">Trabaja y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajayjub_t" name="condicionactividad_tut" value="Trabaja y Recibe Jubilacion o Pension" {{ ($item->condicionactividad_tut == "Trabaja y Recibe Jubilacion o Pension") ? "checked" : "\disabled" }}>
						<label for="trabajayjub_t">Trabaja y Recibe Jubilac. o Pensión</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_t" name="condicionactividad_tut" value="Solo Busca Trabajo" {{ ($item->condicionactividad_tut == "Solo Busca Trabajo") ? "checked" : "\disabled" }}>
						<label for="buscatrabajo_t">Sólo Busca Trabajo</label>
						&nbsp; &nbsp; 
						<input type="radio" id="soloestudia_t" name="condicionactividad_tut" value="Solo Estudia" {{ ($item->condicionactividad_tut == "Solo Estudia") ? "checked" : "\disabled" }}>
						<label for="soloestudia_t">Sólo Estudia</label>
						<br/>
						<input type="radio" id="buscatrabajoestudia_t" name="condicionactividad_tut" value="Busca Trabajo y Estudia" {{ ($item->condicionactividad_tut == "Busca Trabajo y Estudia") ? "checked" : "\disabled" }}>
						<label for="buscatrabajoestudia_t">Busca Trabajo y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_jubilada_t" name="condicionactividad_tut" value="Busca Trabajo y Recibe Jubilacion o Pension" {{ ($item->condicionactividad_tut == "Busca Trabajo y Recibe Jubilacion o Pension") ? "checked" : "\disabled" }}>
						<label for="buscatrabajo_jubilada_t">Busca Trabajo y Recibe Jubilac. o Pensión</label>
						&nbsp; &nbsp; 
						<input type="radio" id="jubilada_t" name="condicionactividad_tut" value="Jubilado/Pensionado" {{ ($item->condicionactividad_tut == "Jubilado/Pensionado") ? "checked" : "\disabled" }}>
						<label for="jubilada_t">Jubilado/Pensionado</label>
						&nbsp; &nbsp; 
						<input type="radio" id="otrocond_t" name="condicionactividad_tut" value="Otro" {{ ($item->condicionactividad_tut == "Otro") ? "checked" : "\disabled" }}>
						<label for="otrocond_t">Otro</label>
					</div>
					</td>
				</tr>
			</tbody>
	</table>	
@endif
@if($item->nro_document_ret != NULL)
	<h5 class="font-weight-bold center">PERSONAS AUTORIZADAS A RETIRAR AL ALUMNO DEL ESTABLECIMIENTO <br/> <small>(Alumnos menores de 18 años)</small></h5>
	
	<div class="table table-bordered w-75 mx-auto">
		

		<table class="container-fluid">
			<tbody>
				<tr>
				<td>
					<div class="row">
						&nbsp; &nbsp;
						<div class="col">
							<label for="apelli_ret" class="form-label">Apellido/s</label>
							<div class="form-control">{{ $item->apelli_ret }}</div>
						</div>
						
						<div class="col">
							<label for="nombre_ret" class="form-label">Nombre/s</label>
							<div class="form-control">{{  $item->nombre_ret }}</div>
						</div>
						&nbsp; &nbsp;
					</div>
					<br>
					
					<div class="row">
						&nbsp; &nbsp;
						<div class="col">
							<div class="input-group">
								<div class="input-group-prepend">
								<span class="input-group-text" id="documento_ret">Documento</span>
								</div>
								<div class="form-control">{{ $item->tip_document_ret }}</div>
								<div class="form-control">{{ $item->nro_document_ret }}</div>
							</div>
						</div>

						<div class="col">
							<div  class="form-control">{{  $item->vinculo_alumno }}</div>
						</div>
					</div>
					<br>
				</td>
				</tr>
				@if($item->B_nro_document_ret != NULL)
				<tr>
				<td>
					<div class="row">
						&nbsp; &nbsp;
						<div class="col">
							<label for="B_apelli_ret" class="form-label">Apellido/s</label>
							<div class="form-control">{{  $item->B_apelli_ret }}</div>
						</div>
						
						<div class="col">
							<label for="B_nombre_ret" class="form-label">Nombre/s</label>
							<div class="form-control">{{ $item->B_nombre_ret }}</div>
						</div>
						&nbsp; &nbsp;
					</div>
					<br>
					
					<div class="row">
						&nbsp; &nbsp;
						<div class="col">
							<div class="input-group">
								<div class="input-group-prepend">
								<span class="input-group-text" id="B_documento_ret">Documento</span>
								</div>
								<div class="form-control">{{ $item->B_tip_document_ret }}</div>
								<div class="form-control">{{ $item->B_nro_document_ret }}</div>
							</div>
						</div>

						<div class="col">
							<div class="form-control">{{ $item->B_vinculo_alumno }}</div>
						</div>
						</div>
						<br>
					</div>
					<br>
				</td>
				</tr>
				@endif
			</tbody>
		</table>
	</div>
	@endif
	@if($item->apellido_restricionjudicial != NULL &&  $item->nombre_restricionjudicial != NULL)
	<h5 class="font-weight-bold center">RESTRICCIONES JUDICIALES</h5>
	<div class="table-bordered w-75 mx-auto">
		
		<table class="container-fluid">
			<tbody>
				<tr>
				<td>
					<div class="row">
						&nbsp; &nbsp;
						<div class="col">
							<label for="apellido_restricionjudicial" class="form-label">Apellido/s</label>
							<div class="form-control">{{ $item->apellido_restricionjudicial }}</div>
						</div>
						
						<div class="col">
							<label for="nombre_restricionjudicial" class="form-label">Nombre/s</label>
							<div class="form-control">{{ $item->nombre_restricionjudicial }}</div>
						</div>
						&nbsp; &nbsp;
					</div>
					<br>

					<div class="row">
						&nbsp; &nbsp;
						<div class="col">
							<div class="input-group">
								<div class="input-group-prepend">
								<span class="input-group-text" id="documento_restricionjudicial">Documento</span>
								</div>
								<div class="form-control">{{ $item->tip_document_restricionjudicial }}</div>
								<div class="form-control">{{ $item->nro_document_restricionjudicial }}</div>
							</div>
						</div>

						<div class="col">
							<div class="form-control">{{ $item->restriccion }}</div>
						</div>
					</div>
					<br>
				</td>
				</tr>
			</tbody>
		</table>
	</div>
	@endif
@endforeach
@foreach ($info_salud as $item)
<br>
	<h5 class="center font-weight-bold">INFORMACIÓN DE SALUD</h5>
	<form>
		<table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
			<tbody>
				<tr>
					<td>
						<div class="form-row row">
							<label class="col-form-label"  for="obrasocial_est">Obra Social</label>
							&nbsp;&nbsp;
							<div class="form-control col-5">{{ $item->obrasocial_est }}</div>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<label class="col-form-label" for="N_afiliado_est ">  N° Afiliado</label>
							&nbsp;&nbsp;
							<div class="form-control col-sm-3">{{ $item->N_afiliado_est }}</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<b class="font-weight-bold">ANTECEDENTES DE ENFERMEDADES</b>

						<div class="container-fluid">
							<div class="row">¿Tiene alguna enfermedad que requiera periódicamente tratamiento o control médico?</div>
							
							<div class="row">
								<div class="col-4">
									<input type="radio" id="yes_enfermedadtrat_e" name="tienenenfermedad_est" value=1 {{ ($item->tienenenfermedad_est == "1") ? "checked" : "\disabled" }}>
									<label class="form-label "for="yes_enfermedadtrat_e">Si</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_enfermedadtrat_e" name="tienenenfermedad_est" value=0 {{ ($item->tienenenfermedad_est == "0") ? "checked" : "\disabled" }}>
									<label class="form-label" for="no_enfermedadtrat_e ">No</label>
								</div>
								<div class="col-7">
									@if($item->tienenenfermedad_est)<div class="form-control">{{ $item->cualenfermedad_est }}</div>@endif
								</div>
							</div>
						
							<br>

							<div class="row">Durante los últimos tres años ¿fue internado alguna vez?</div>
						
							<div class="row">
								<div class="col-4">
									<input type="radio" id="yes_fueinternado_e" name="fueinternado_ultimos3años_est" value=1 {{ ($item->fueinternado_ultimos3años_est == "1") ? "checked" : "\disabled" }}>
									<label class="form-label "for="yes_fueinternado_e">Si</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_fueinternado_e" name="fueinternado_ultimos3años_est" value=0 {{ ($item->fueinternado_ultimos3años_est == "0") ? "checked" : "\disabled" }}>
									<label class="form-label" for="no_fueinternado_e ">No</label>
								</div>
								<div class="col-7">
									@if($item->tienenenfermedad_est)<div class="form-control">{{ $item->porquefueinternado_est }}</div>@endif
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="container-fluid">
							<div class="row">
								<div class="col-4">
									<b class="font-weight-bold">¿TIENE ALGUN TIPO DE ALERGIA?</b>
								</div>
								<div class="col">
									<input type="radio" id="yes_alergia_e" name="tienealguntipo_alergia_est" value=1 {{ ($item->tienealguntipo_alergia_est == "1") ? "checked" : "\disabled" }}>
									<label class="form-label "for="yes_alergia_e">Si</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_alergia_e" name="tienealguntipo_alergia_est" value=0 {{ ($item->tienealguntipo_alergia_est == "0") ? "checked" : "\disabled" }}>
									<label class="form-label" for="no_alergia_e ">No</label>  
								</div>
							</div>
							<br>

							@if($item->tienealguntipo_alergia_est)
							<div class="row">
								<div class="col-6.5">
									<label for="manifestacionesalergia_est" class="col-form-label"> En caso afirmativo, describa sus manifestaciones </label>
								</div>
								<div class="col">
									<div class="form-control">{{ $item->manifestacionesalergia_est }}</div>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-3.5">
									<label for="alergia_sedebe_est" class="col-form-label">La alergia se debe a</label>
								</div>
								<div class="col-7">
									<div class="form-control">{{ $item->alergia_sedebe_est }}</div>
								</div>
								&nbsp;&nbsp;

								<div class="col col-form-label">
									<input type="checkbox" class="form-check-input" id="alergia_nosabe_est" {{ ($item->alergia_nosabe_est == "1") ? "checked" : "\disabled" }}>
									<label class="form-check-label" for="alergia_nosabe_est">No sabe</label>
								</div>
							</div>
							@endif
							<br/>
							<div class="row">
								<div class="col">
									¿Recibe tratamiento permanente?  &nbsp;&nbsp;
									<input type="radio" id="yes_tratamientoalergia_e" name="recibe_tratamientopermanente_est" value=1 {{ ($item->recibe_tratamientopermanente_est == "1") ? "checked" : "\disabled" }}>
									<label class="form-label "for="yes_alergia_e">Si</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_tratamientoalergia_e" name="recibe_tratamientopermanente_est" value=0 {{ ($item->recibe_tratamientopermanente_est == "0") ? "checked" : "\disabled" }}>
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
								<b class="font-weight-bold">TRATAMIENTOS</b>
							</div>
							<div class="row">
								<div class="col-6">
									¿Recibe tratamiento médico?
									&nbsp;&nbsp;
									<input type="radio" id="yes_tratamiento_e" name="recibe_tratamientomedico_est" value=1 {{ ($item->recibe_tratamientomedico_est == "1") ? "checked" : "\disabled" }}>
									<label class="form-label "for="yes_tratamiento_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_tratamiento_e" name="recibe_tratamientomedico_est" value=0 {{ ($item->recibe_tratamientomedico_est == "0") ? "checked" : "\disabled" }}>
									<label class="form-label" for="no_tratamiento_e ">NO</label>
								</div>
								@if($item->recibe_tratamientomedico_est)
								<div class="col-1 col-form-label">
									&nbsp;&nbsp;Especifique
								</div>
								&nbsp;&nbsp;
								<div class="col-4">
									<div class="form-control">{{ $item->especifique_tratamiento_est }}</div>
								</div>
								@endif
							</div>

							<br>

							<div class="row">
								<div class="col-3.5 col-form-label">
									Quirúrgicos 
									&nbsp;&nbsp;
									<input type="radio" id="yes_tratamientoqui_e" name="recibio_tratamientoquirurgico_est" value=1 {{ ($item->recibio_tratamientoquirurgico_est == "1") ? "checked" : "\disabled" }}>
									<label class="form-label "for="yes_tratamientoqui_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_tratamientoqui_e" name="recibio_tratamientoquirurgico_est" value=0 {{ ($item->recibio_tratamientoquirurgico_est == "0") ? "checked" : "\disabled" }}>
									<label class="form-label" for="no_tratamientoqui_e ">NO</label>
								</div>
								@if($item->recibio_tratamientoquirurgico_est)
								<div class="col-2">
									<div class="form-control">{{ $item->edad_tratamientoquirurgico }}</div>
								</div>
								<div class="col-2.5 col-form-label">
									Tipo de cirugía
								</div>
								<div class="col">
									<div class="form-control">{{ $item->tipocirugia_est }}</div>
								</div>
								@endif
							</div>
							<br>
							<div class="row">
								<div class="col-7 col-form-label">
									¿Presenta alguna limitación física?
									&nbsp;&nbsp;
									<input type="radio" id="yes_limfisica_e" name="presentalimitacion_fisica_est" value=1 {{ ($item->presentalimitacion_fisica_est == "1") ? "checked" : "\disabled" }}>
									<label class="form-label "for="yes_limfisica_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_limfisica_e" name="presentalimitacion_fisica_est" value=0 {{ ($item->presentalimitacion_fisica_est == "0") ? "checked" : "\disabled" }}>
									<label class="form-label" for="no_limfisica_e ">NO</label>
								</div>
								@if($item->presentalimitacion_fisica_est)
								<div class="col-1.5 col-form-label">
									Aclaración
								</div>
								<div class="col">
									<div class="form-control">{{ $item->aclaralimitación_fisica_est }}</div>
								</div>
								@endif
							</div>
							<br>
							@if($item->otroproblemad_salud_est != NULL)
							<div class="row">
								<div class="col-3">
									<label for="otroproblemad_salud_est" class="col-form-label">¿Otros problemas de salud?</label>
								</div>
								<div class="col">
									<div class="form-control">{{ $item->otroproblemad_salud_est }}</div>
								</div>
							</div>
							@endif
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="container-fluid">
							<div class="row">
								<div class="col">
									<b class="font-weight-bold">VACUNAS OBLIGATORIAS</b> <div class="float-right"><small class="text-muted">tomando en cuenta el Calendario de Vacunación y la Guía de Salud Nº 2</small></div>  
								</div>    
							</div>    
							<div class="row">
								<div class="col-3.5">
									<div class="float-left"><small class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;de acuerdo a su cumplimiento</small></div>
								</div>
								<div class="col">
									&nbsp;&nbsp;
									<input type="radio" id="vacunacioncompleta" name="calendariovacunas_est" value="VACUNACION COMPLETA" {{ ($item->calendariovacunas_est == "VACUNACION COMPLETA") ? "checked" : "\disabled" }}>
									<label class="form-label "for="vacunacioncompleta_est">VACUNACION COMPLETA</label>
									&nbsp;&nbsp;
									<input type="radio" id="vacunacionincompleta_est" name="calendariovacunas_est" value="INCOMPLETA" {{ ($item->calendariovacunas_est == "INCOMPLETA") ? "checked" : "\disabled" }}>
									<label class="form-label" for="vacunacionincompleta_est">INCOMPLETA</label>
									&nbsp;&nbsp;
									<input type="radio" id="sindatos_est" name="calendariovacunas_est" value="SIN DATOS" {{ ($item->calendariovacunas_est == "SIN DATOS") ? "checked" : "\disabled" }}>
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
									<b class="font-weight-bold">DETERMINACION DE</b>
								</div>
								<div class="col-1.5">
									<label for="talla_est" class="col-form-label">Talla</label>
								</div>
								<div class="col">
									<div class="form-control">{{ $item->talla_est }}</div>
								</div>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<div class="col-1.5">
									<label for="peso_est" class="col-form-label">Peso</label>
								</div>
								<div class="col">
									<div class="form-control">{{ $item->peso_est }}</div>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-4"><label for="fechadeterminacion_est" class="col-form-label">Fecha de la determinación</label></div>
								<div class="col-6">
									<div class="form-control">{{ $item->fechadeterminacion_est }}</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<h6 class="center font-weight-bold">SI EL/LA ALUMNO/A TIENE ALGÚN PROBLEMA DE SALUD EN LA ESCUELA</h6>
		<table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
			<tbody>
				@if($item->recurrir_institucion_est != NULL)
				<tr>
					<td>
						<div class="container-fluid">
							<div class="row">
								<div class="col-4">
									<b>RECURRIR A INSTITUCIÓN</b>
								</div>

								<div class="col">
									<div class="form-control">{{ $item->recurrir_institucion_est }}</div>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-4 "></div>

								<div class="col">
									<div class="form-control">{{ $item->recurrir_domicilio_est }}</div>
								</div>
								<div class="col">
									<div class="form-control">{{ $item->recurrir_telefono_est }}</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				@endif
				@if($item->recurrir_institucion_est != NULL || $item->medico_nombre != NULL )
				<tr>
					<td>
						<div class="container-fluid">
							<div class="row">
								<div class="col-2">
									<b>MEDICO</b>
								</div>

								<div class="col">
									<div class="form-control">{{ $item->medico_apellido }}</div>
								</div>
								<div class="col">
									<div class="form-control">{{ $item->medico_nombre }}</div>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-2"></div>

								<div class="col">
									<div class="form-control">{{ $item->medico_domicilio }}</div>
								</div>
								<div class="col">
									<div class="form-control">{{ $item->medico_telefono }}</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				@endif
				<tr>
					<td>
						<div class="container-fluid">
							<div class="row">
								<div class="col-2">
									<b>FAMILIAR</b>
								</div>

								<div class="col">
									<div class="form-control">{{ $item->familiar_apellido }}</div>
								</div>
								<div class="col">
									<div class="form-control">{{ $item->familiar_nombre }}</div>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-2"></div>

								<div class="col">
									<div class="form-control">{{ $item->familiar_domicilio }}</div>
								</div>
								<div class="col">
									<div class="form-control">{{ $item->familiar_telefono }}</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<h6 class="center font-weight-bold">ACTUALIZACIONES</h6>
		<table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
			<tbody>
				<tr>
					<td>
						<div class="container-fluid">
							<div class="row">
								<div class="col-3.5">
									<label for="fecha_actualizacion_est" class="col-form-label">Fecha de la determinación</label>
								</div>
								<div class="col-5">
									<div class="form-control">{{ $item->fecha_actualizacion_est }}</div>
								</div>
								<div class="col col-form-label">
									Anual
									&nbsp;&nbsp;
									<input type="radio" id="yes_anual_e" name="actualizacion_anual_est" value=1 {{ ($item->actualizacion_anual_est == "1") ? "checked" : "\disabled" }}>
									<label class="form-label "for="yes_anual_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_anual_e" name="actualizacion_anual_est" value=0 {{ ($item->actualizacion_anual_est == "0") ? "checked" : "\disabled" }}>
									<label class="form-label" for="no_anual_e ">NO</label>
								</div>

							</div>
							<br/>
							<div class="row">
								<div class="col">
									¿Hay cambios?
									&nbsp;&nbsp;
									<input type="radio" id="yes_cambios_e" name="actualizacion_cambios_est" value=1 {{ ($item->actualizacion_cambios_est == "1" ) ? "checked" : "\disabled" }}>
									<label class="form-label "for="yes_cambios_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_cambios_e" name="actualizacion_cambios_est" value=0 {{ ($item->actualizacion_cambios_est == "0") ? "checked" : "\disabled" }}>
									<label class="form-label" for="no_cambios_e ">NO</label>
								</div>

								@if($item->actualizacion_cambios_est)<div class="form-control">{{ $item->actualizacioncambios_describa_est }}</div>@endif
							</div>
						</div>
					</td>
				</tr>
				@if($item->actualizacioncambios_describa_est != NULL)
				<tr>
					<td>
						<div class="container-fluid">
							<div class="row">
								<div class="col-3.5">
									<label for="B_fecha_actualizacion_est" class="col-form-label">Fecha de la determinación</label>
								</div>
								<div class="col-5">
									<div class="form-control">{{ $item->B_fecha_actualizacion_est }}</div>
								</div>
								<div class="col col-form-label">
									Anual
									&nbsp;&nbsp;
									<input type="radio" id="B_yes_anual_e" name="B_actualizacion_anual_est" value=1 {{ ($item->B_actualizacion_anual_est == "1") ? "checked" : "\disabled" }}>
									<label class="form-label "for="yes_anual_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="B_no_anual_e" name="B_actualizacion_anual_est" value=0 {{ ($item->B_actualizacion_anual_est == "0") ? "checked" : "\disabled" }}>
									<label class="form-label" for="no_anual_e ">NO</label>
								</div>

							</div>
							<br/>
							<div class="row">
								<div class="col">
									¿Hay cambios?
									&nbsp;&nbsp;
									<input type="radio" id="B_yes_cambios_e" name="B_actualizacion_cambios_est" value=1 {{ ($item->B_actualizacion_cambios_est == "1") ? "checked" : "\disabled" }}>
									<label class="form-label "for="yes_cambios_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="B_no_cambios_e" name="B_actualizacion_cambios_est" value=0 {{ ($item->B_actualizacion_cambios_est == "0") ? "checked" : "\disabled" }}>
									<label class="form-label" for="no_cambios_e ">NO</label>
								</div>

								@if($item->B_actualizacion_cambios_est)<div class="form-control">{{ $item->B_actualizacioncambios_describa_est }}</div>@endif
							</div>
						</div>
					</td>
				</tr>
				@endif
				@if($item->B_actualizacioncambios_describa_est != NULL)
				<tr>
					<td>
						<div class="container-fluid">
							<div class="row">
								<div class="col-3.5">
										<label for="C_fecha_actualizacion_est" class="col-form-label">Fecha de la determinación</label>
									</div>
									<div class="col-5">
										<div class="form-control">{{ $item->C_fecha_actualizacion_est }}</div>
									</div>
									<div class="col col-form-label">
										Anual
										&nbsp;&nbsp;
										<input type="radio" id="C_yes_anual_e" name="C_actualizacion_anual_est" value=1 {{ ($item->C_actualizacion_anual_est == "1") ? "checked" : "\disabled" }}>
										<label class="form-label "for="yes_anual_e">SI</label>
										&nbsp;&nbsp;
										<input type="radio" id="C_no_anual_e" name="C_actualizacion_anual_est" value=0 {{ ($item->C_actualizacion_anual_est == "0") ? "checked" : "\disabled" }}>
										<label class="form-label" for="no_anual_e ">NO</label>
									</div>
	
								</div>
								<br/>
								<div class="row">
									<div class="col">
										¿Hay cambios?
										&nbsp;&nbsp;
										<input type="radio" id="C_yes_cambios_e" name="C_actualizacion_cambios_est" value=1 {{ ($item->C_actualizacion_cambios_est == "1") ? "checked" : "\disabled" }}>
										<label class="form-label "for="yes_cambios_e">SI</label>
										&nbsp;&nbsp;
										<input type="radio" id="C_no_cambios_e" name="C_actualizacion_cambios_est" value=0 {{ ($item->C_actualizacion_cambios_est == "0") ? "checked" : "\disabled" }}>
										<label class="form-label" for="no_cambios_e ">NO</label>
									</div>
	
									@if($item->C_actualizacion_cambios_est)<div class="form-control">{{ $item->C_actualizacioncambios_describa_est }}</div>@endif
								</div>
							</div>
						</td>
					</tr>
					@endif
				</tbody>
		</table>
	
@endforeach

@endsection