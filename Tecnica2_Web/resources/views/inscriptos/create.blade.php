@extends('layouts.app')

@section('title', 'Ingresar alumno')

@section('content')

	<form>
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

							<div class="col-3"></div>

							<div class="col row">
								<label for="nivel_esc" class="col-form-label">Nivel/Modalidad:</label>
								&nbsp;&nbsp;
								&nbsp;&nbsp;
								<input type="text" name="nivel_esc" id="nivel_esc" class="form-control col">
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
								<input type="text" name="nomb_esc" id="nomb_esc" class="form-control col-8">
							</div>
							
							<div class="col-3 row">
								<label for="nro_esc" class="col-form-label">N°:</label>
								&nbsp;&nbsp;
								<input type="number" name="nro_esc" id="nro_esc" class="form-control col-4">
							</div>
							
							<div class="col row">
								<label for="dir_esc" class="col-form-label">Dirección:</label>
								&nbsp;&nbsp;
								<input type="text" name="dir_esc" id="dir_esc" class="form-control col-8">
							</div>
							
							&nbsp; &nbsp;
						</div>
						<br>

						<div class="row">
							&nbsp; &nbsp;

							<div class="col row">
								<label for="loc_esc" class="col-form-label">Localidad:</label>
								&nbsp;&nbsp;
								<input type="text" name="loc_esc" id="loc_esc" class="form-control col-8">
							</div>
							
							<div class="col row">
								<label for="dist_esc" class="col-form-label">Distrito:</label>
								&nbsp;&nbsp;
								<input type="text" name="dist_esc" id="dist_esc" class="form-control col-8">
							</div>
							
							<div class="col row">
								<label for="prov_esc" class="col-form-label">Provincia:</label>
								&nbsp;&nbsp;
								<input type="text" name="prov_esc" id="prov_esc" class="form-control col-8">
							</div>
							
							<div class="col row">
								<label for="pais_esc" class="col-form-label">País:</label>
								&nbsp;&nbsp;
								<input type="text" name="pais_esc" id="pais_esc" class="form-control col-8">
							</div>
							
							&nbsp; &nbsp;
						</div>
						<br>
							
						<div class="row">
							&nbsp; &nbsp;
							<label for="gest_esc" class="col-form-label font-weight-bold">SECTOR DE GESTIÓN:</label>
							
							<div class="col-1"></div>

							<div class="col form-check form-check-inline">
								<input type="radio" name="gest_esc" id="gest_esc1" value="estatal" class="form-check-input">
								<label for="gest_esc1" class="form-check-label">Estatal</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="gest_esc" id="gest_esc2" value="privado" class="form-check-input">
								<label for="gest_esc2" class="form-check-label">Privado</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="gest_esc" id="gest_esc3" value="municipal"class="form-check-input">
								<label for="gest_esc3" class="form-check-label">Municipal</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="gest_esc" id="gest_esc4" value="nacional"class="form-check-input">
								<label for="gest_esc4" class="form-check-label">Nacional</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="gest_esc" id="gest_esc5" value="otro" class="form-check-input">
								<label for="gest_esc5" class="form-check-label">Otro</label>
							</div>
							
							&nbsp; &nbsp;
						</div>
						<br>
					</td>
				</tr>
			</tbody>
		</table>

		<br>
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
								<input type="radio" name="tec_insc" id="tec_insc1" value="basico" class="form-check-input">
								<label for="tec_insc1" class="form-check-label">Básico</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="tec_insc" id="tec_insc2" value="superior" class="form-check-input">
								<label for="tec_insc2" class="form-check-label">Superior</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="tec_insc" id="tec_insc3" value="polimodal"class="form-check-input">
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
								<input type="radio" name="anio_insc" id="anio_insc1" value="1" class="form-check-input">
								<label for="anio_insc1" class="form-check-label">1</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc2" value="2" class="form-check-input">
								<label for="anio_insc2" class="form-check-label">2</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc3" value="3"class="form-check-input">
								<label for="anio_insc3" class="form-check-label">3</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc4" value="4"class="form-check-input">
								<label for="anio_insc3" class="form-check-label">4</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc5" value="5"class="form-check-input">
								<label for="anio_insc3" class="form-check-label">5</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc6" value="6"class="form-check-input">
								<label for="anio_insc3" class="form-check-label">6</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="anio_insc" id="anio_insc7" value="7"class="form-check-input">
								<label for="anio_insc3" class="form-check-label">7</label>
							</div>

							<div class="col-5"></div>
							
							&nbsp; &nbsp;
						</div>
						<br>

						<div class="row">
							&nbsp; &nbsp;

							<label for="tur_insc" class="col-form-label font-weight-bold">TURNO: </label>
							
							<div class="col-1"></div>

							<div class="col form-check form-check-inline">
								<input type="radio" name="tur_insc" id="tur_insc1" value="maniana" class="form-check-input">
								<label for="tur_insc1" class="form-check-label">Mañana</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="tur_insc" id="tur_insc2" value="tarde" class="form-check-input">
								<label for="tur_insc2" class="form-check-label">Tarde</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="tur_insc" id="tur_insc3" value="vespertino"class="form-check-input">
								<label for="tur_insc3" class="form-check-label">Vespertino</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="tur_insc" id="tur_insc4" value="noche"class="form-check-input">
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
								<input type="radio" name="cond_insc" id="cond_insc1" value="ingresante" class="form-check-input">
								<label for="cond_insc1" class="form-check-label">Ingresante</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="cond_insc" id="cond_insc2" value="reinscripto" class="form-check-input">
								<label for="cond_insc2" class="form-check-label">Reinscripto</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="cond_insc" id="cond_insc3" value="promovido"class="form-check-input">
								<label for="cond_insc3" class="form-check-label">Promovido</label>
							</div>
							
							<div class="col form-check form-check-inline">
								<input type="radio" name="cond_insc" id="cond_insc4" value="repitente"class="form-check-input">
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
								<label for="pase_insc" class="col-form-label"> ¿es alumno con pase? </label>
								
								{{-- <div class="col-1"></div> --}}
								&nbsp; &nbsp;
								<div class="form-check form-check-inline">
									<input type="radio" name="pase_insc" id="pase_insc1" value="true" class="form-check-input">
									<label for="pase_insc1" class="form-check-label">SI</label>
								</div>
								{{-- &nbsp; &nbsp; --}}
								<div class="form-check form-check-inline">
									<input type="radio" name="pase_insc" id="pase_insc1" value="false" class="form-check-input">
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
									<input type="radio" name="inte_insc" id="inte_insc1" value="true" class="form-check-input">
									<label for="inte_insc1" class="form-check-label">SI</label>
								</div>
								{{-- &nbsp; &nbsp; --}}
								<div class="form-check form-check-inline">
									<input type="radio" name="inte_insc" id="inte_insc1" value="false" class="form-check-input">
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
									<input type="text" class="form-control" id="tipdocument_e" name="tipdocument_e" placeholder="Tipo de Doc.">
									<input type="number" class="form-control w-25" id="nrodocument_e" name="nrodocument_e" placeholder="Nro de Doc.">
								</div>
							</div>
	
							<div class="col">
								<div class="row">
	
									<label class="col-form-label" for="no_doc"> Si no posee documento indicar: </label>
									&nbsp; &nbsp; &nbsp;
									<div class="col-form-label">
										<input type="radio" id="entramite_m" name="estadodocumento_e" value="En Trámite">
										<label for="exampleRadios1"> En trámite </label>
									</div>
									&nbsp; &nbsp; &nbsp;
									<div class="col-form-label">
										<input type="radio" id="nodoc_m" name="estadodocumento_e" value="No Tiene Documento">
										<label for="exampleRadios2"> No posee </label>
									</div>
								</div>
							</div>
						</div>
						<br>
	
						<div class="row">
							<div class="col row">
								<label for="apell_e" class="col-form-label col-2"> Apellido/s: </label> &nbsp; &nbsp;
								<input type="text" name="apell_e" id="apell_e" class="form-control col">
							</div>
							<div class="col row">
								<label for="nomb_e" class="col-form-label col-2"> Nombre/s: </label> &nbsp; &nbsp;
								<input type="text" name="nomb_e" id="nomb_e" class="form-control col">
							</div>
							&nbsp; &nbsp;
						</div>
						<br>
						
						<div class="row">
							&nbsp; &nbsp;
							<div class="col-2 row">
								<label for="sexo_e" class="col-form-label">Sexo:</label> &nbsp; &nbsp;
								<input type="text" name="sexo_e" id="sexo_e" class="form-control col-6">
							</div>
	
							<div class="col-3 row mx-auto">
								<label for="bir_dat_e" class="col-form-label">Fecha de Nac.:</label> &nbsp; &nbsp;
								<input type="date" name="bir_dat_e" id="bir_dat_e" class="w-50 form-control">
							</div>
							
							<div class="col row">
								<label for="bir_pla_e" class="col-form-label">Lugar de Nac.:</label> &nbsp; &nbsp;
								<input type="text" name="bir_pla_e" id="bir_pla_e" class="col-7 form-control">
							</div>
							
							<div class="col row">
								<label for="nac_e" class="col-form-label">Nacionalidad:</label> &nbsp; &nbsp;
								<input type="text" name="nac_e" id="nac_e" class="col-7 form-control">
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
								<input type="text" name="dom_calle_e" id="dom_calle_e" class="form-control col-10">
							</div>
							
							<div class="col row">
								<label for="dom_nro_e" class="col-form-label">N°:</label> &nbsp; &nbsp;
								<input type="number" name="dom_nro_e" id="dom_nro_e" class="form-control col-6">
							</div>
							
							<div class="col row">
								<label for="dom_piso_e" class="col-form-label">Piso:</label> &nbsp; &nbsp; 
								<input type="number" name="dom_piso_e" id="dom_piso_e" class="form-control col-6">
							</div>
							
							<div class="col row">
								<label for="dom_torre_e" class="col-form-label">Torre:</label> &nbsp; &nbsp;
								<input type="text" name="dom_torre_e" id="dom_torre_e" class="form-control col-6">
							</div>
	
							&nbsp; &nbsp;
						</div>
						<br>
	
						<div class="row">
							&nbsp; &nbsp;
	
							<div class="col-2 row">
								<label for="dom_dept_e" class="col-form-label"> Dpto: </label>
								&nbsp; &nbsp;
								<input type="text" name="dom_dept_e" id="dom_dept_e" class="form-control col-6">
							</div>
	
							<div class="col row">
								<label for="dom_entre_e" class="col-form-label"> Entre calles: </label>
								&nbsp; &nbsp;
								<input type="text" name="dom_entre_e" id="dom_entre_e" class="form-control col-10">
							</div>
	
							&nbsp; &nbsp;
						</div>
						<br>
	
						<div class="row">
							&nbsp; &nbsp;
	
							<label for="dom_otro_e" class="col-form-label">Otro dato referido al domicilio: </label>
							&nbsp; &nbsp;
							<input type="text" name="dom_otro_e" id="dom_otro_e" class="form-control col">
								
							&nbsp; &nbsp;
						</div>
						<br>
	
						<div class="row">
							&nbsp; &nbsp;
	
							<div class="col row">
								<label for="prov_e" class="col-form-label">Provincia:</label>
								&nbsp;&nbsp;
								<input type="text" name="prov_e" id="prov_e" class="form-control col-8">
							</div>
							
							<div class="col row">
								<label for="dist_e" class="col-form-label">Distrito:</label>
								&nbsp;&nbsp;
								<input type="text" name="dist_e" id="dist_e" class="form-control col-8">
							</div>
							
							<div class="col row">
								<label for="loc_e" class="col-form-label">Localidad:</label>
								&nbsp;&nbsp;
								<input type="text" name="loc_e" id="loc_e" class="form-control col-8">
							</div>
							
							<div class="col-3 row">
								<label for="codpost_e" class="col-form-label">Código Postal:</label>
								&nbsp;&nbsp;
								<input type="number" name="codpost_e" id="codpost_e" class="form-control col-6">
							</div>
							
							&nbsp; &nbsp;	
						</div>
						<br>
	
						<div class="row">
							&nbsp; &nbsp;
	
							<div class="input-group col">
								<div class="input-group-prepend">
									<div class="input-group-text" id="telefonos_famil">Teléfonos</div>
								</div>
								<input type="number" id="telefo_fam" name="telefo_fam" placeholder="Teléfono" class="form-control">
								<input type="number" id="telefocelular_fam" name="telefocelular_fam" placeholder="Teléfono Celular" class="form-control">
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
									<input type="radio" name="her_tie_e" id="her_tie_e1" value="true">
									<label for="her_tie_e1">SI</label>
								</div>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="her_tie_e" id="her_tie_e2" value="false">
									<label for="her_tie_e2">NO</label>
								</div>
							</div>
							
							<div class="col-3 row">
								<label for="her_can_e" class="col-form-label">Cantidad:</label>
								&nbsp;&nbsp;
								<input type="number" name="her_can_e" id="her_can_e" class="form-control col-5">
							</div>
							
							<div class="col row">
								<label for="her_este_e" class="col-form-label">Cantidad de hermanos que asisten a este establecimiento:</label>
								&nbsp;&nbsp;
								<input type="number" name="her_este_e" id="her_este_e" class="form-control col-2">
							</div>
							
							&nbsp; &nbsp;
						</div>
						<br>
	
						<div class="row">
							&nbsp;&nbsp;
	
							<div class="col-1"></div>
							
							<div class="col row">
								<label for="hog_can_e" class="col-form-label">Cantidad de habitantes en el hogar:</label>
								&nbsp;&nbsp;
								<input type="number" name="hog_can_e" id="hog_can_e" class="form-control col-2">
							</div>
							
							<div class="col row">
								<label for="hog_hab_e" class="col-form-label">Cantdad de habitaciones en el hogar:</label>
								&nbsp;&nbsp;
								<input type="number" name="hog_hab_e" id="hog_hab_e" class="form-control col-2">
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
								<input type="text" name="hog_leng_e" id="hog_leng_e" class="form-control col">
							</div>
	
							<div class="col"></div>
							
							&nbsp;&nbsp;
						</div>
						<br>
	
						<div class="row">
							&nbsp; &nbsp;
							<div class="col-3"></div>
							
							<div class="col row">
								<label for="ayuda_e" class="col-form-label">Recibe ayuda escolar</label>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="ayuda_e" id="ayuda_e1" value="true">
									<label for="ayuda_e1">SI</label>
								</div>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="ayuda_e" id="ayuda_e2" value="false">
									<label for="ayuda_e2">NO</label>
								</div>
							</div>
							
							<div class="col row">
								<label for="obras_e" class="col-form-label">Obra social</label>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="obras_e" id="obras_e1" value="true">
									<label for="obras_e1">SI</label>
								</div>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="obras_e" id="obras_e2" value="false">
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
									<input type="radio" name="prog_e" id="prog_e1" value="true">
									<label for="prog_e1">SI</label>
								</div>
								&nbsp;&nbsp;
								<div class="col-form-label">
									<input type="radio" name="prog_e" id="prog_e2" value="false">
									<label for="prog_e2">NO</label>
								</div>
							</div>
							
							<div class="col-4">
								<div class="form-check form-check-inline">
									<input type="checkbox" name="prog_auh_e" id="prog_auh_e" value="true" class="form-check-input">
									<label for="prog_auh_e" class="form-check-label">AUH</label>
								</div>
	
								<div class="form-check form-check-inline">
									<input type="checkbox" name="prog_beca_ex_e" id="prog_beca_ex_e" value="true" class="form-check-input">
									<label for="prog_beca_ex_e" class="form-check-label">Becas por excepción</label>
								</div>
								
								<div class="form-check form-check-inline">
									<input type="checkbox" name="prog_progr_e" id="prog_progr_e" value="true" class="form-check-input">
									<label for="prog_progr_e" class="form-check-label">Progresar</label>
								</div>
								
								<div class="form-check form-check-inline">
									<input type="checkbox" name="prog_otros_e" id="prog_otros_e" value="true" class="form-check-input">
									<label for="prog_otros_e" class="form-check-label">Otros</label>
								</div>
								
								<div class="form-check form-check-inline">
									<input type="checkbox" name="prog_beca_jud_e" id="prog_beca_jud_e" value="true" class="form-check-input">
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
								<input type="checkbox" name="trans_pie_e" id="trans_pie_e" value="true" class="form-check-input">
								<label for="trans_pie_e" class="form-check-label">A pie</label>
							</div>
							
							<div class="col form-ckeck form-ckeck-inline">
								<input type="checkbox" name="trans_omni_e" id="trans_omni_e" value="true" class="form-check-input">
								<label for="trans_omni_e" class="form-check-label">Omnibus</label>
							</div>
							
							<div class="col form-ckeck form-ckeck-inline">
								<input type="checkbox" name="trans_auto_e" id="trans_auto_e" value="true" class="form-check-input">
								<label for="trans_auto_e" class="form-check-label">Auto Particular</label>
							</div>
							
							<div class="col form-ckeck form-ckeck-inline">
								<input type="checkbox" name="trans_taxi_e" id="trans_taxi_e" value="true" class="form-check-input">
								<label for="trans_taxi_e" class="form-check-label">Taxi/Remís</label>
							</div>
							
							<div class="col form-ckeck form-ckeck-inline">
								<input type="checkbox" name="trans_otro_e" id="trans_otro_e" value="true" class="form-check-input">
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
									<input type="radio" name="hijo_e" id="hijo_e1" value="true" class="form-check-input">
									<label for="hijo_e1" class="form-check-label">SI</label>
								</div>
								
								<div class="form-check form-check-inline">
									<input type="radio" name="hijo_e" id="hijo_e2" value="false" class="form-check-input">
									<label for="hijo_e2" class="form-check-label">NO</label>
								</div>
							</div>
	
							<div class="col">
								<label for="hijo_proy_e" class="col-form-label">Asisten a una sala del Proyecto de Salas Maternales</label>
								&nbsp; &nbsp;
	
								<div class="form-check form-check-inline">
									<input type="radio" name="hijo_proy_e" id="hijo_proy_e1" value="true" class="form-check-input">
									<label for="hijo_proy_e1" class="form-check-label">SI</label>
								</div>
								
								<div class="form-check form-check-inline">
									<input type="radio" name="hijo_proy_e" id="hijo_proy_e2" value="false" class="form-check-input">
									<label for="hijo_proy_e2" class="form-check-label">NO</label>
								</div>
							</div>
						</div>
						<br>
					</td>
				</tr>
			</tbody>
		</table>
	</form>

	<!--
	<table class="table table-bordered container-fluid w-75 mx-auto">
		{{-- ((.col.row>(label.col-form-label+{&nbsp;&nbsp;}+input:text.form-control.col))+{ }) --}}
		<thead>
			<tr>
				<td>
					<br>
					<div class="row">
						<div class="col row">
							<label for="apell_e" class="col-form-label col-2"> Apellido/s: </label> &nbsp; &nbsp;
							<input type="text" name="apell_e" id="apell_e" class="form-control col">
						</div>
						<div class="col row">
							<label for="nomb_e" class="col-form-label col-2"> Nombre/s: </label> &nbsp; &nbsp;
							<input type="text" name="nomb_e" id="nomb_e" class="form-control col">
						</div>
						&nbsp; &nbsp;
					</div>
					<br>
					
					<div class="row">
						&nbsp;&nbsp;

						<div class="col row">
							<label for="nac_m" class="col-form-label">Nacionalidad</label>
							&nbsp;&nbsp;
							<input type="text" name="nac_m" id="nac_m" class="form-control col">
						</div>
						
						<div class="col row">
							<label for="" class="col-form-label"></label>
							&nbsp;&nbsp;
							<input type="text" name="" id="" class="form-control col">
						</div>
						
						&nbsp;&nbsp;
					</div>
					<br>

					<div class="row">
						<div class="col">
							<div class="input-group mb-2">
								<div class="input-group-prepend">
								<div class="input-group-text">Documento</div>
								</div>
								<input type="text" class="form-control" id="tipdocument_e" name="tipdocument_e" placeholder="Tipo de Doc.">
								<input type="number" class="form-control w-25" id="nrodocument_e" name="nrodocument_e" placeholder="Nro de Doc.">
							</div>
						</div>

						<div class="col">
							<div class="row">

								<label class="col-form-label" for="no_doc"> Si no posee documento indicar: </label>
								&nbsp; &nbsp; &nbsp;
								<div class="col-form-label">
									<input type="radio" id="entramite_m" name="estadodocumento_e" value="En Trámite">
									<label for="exampleRadios1"> En trámite </label>
								</div>
								&nbsp; &nbsp; &nbsp;
								<div class="col-form-label">
									<input type="radio" id="nodoc_m" name="estadodocumento_e" value="No Tiene Documento">
									<label for="exampleRadios2"> No posee </label>
								</div>
							</div>
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
							<input type="text" name="dom_calle_e" id="dom_calle_e" class="form-control col-10">
						</div>
						
						<div class="col row">
							<label for="dom_nro_e" class="col-form-label">N°:</label> &nbsp; &nbsp;
							<input type="text" name="dom_nro_e" id="dom_nro_e" class="form-control col-6">
						</div>
						
						<div class="col row">
							<label for="dom_piso_e" class="col-form-label">Piso:</label> &nbsp; &nbsp; 
							<input type="number" name="dom_piso_e" id="dom_piso_e" class="form-control col-6">
						</div>
						
						<div class="col row">
							<label for="dom_torre_e" class="col-form-label">Torre:</label> &nbsp; &nbsp;
							<input type="text" name="dom_torre_e" id="dom_torre_e" class="form-control col-6">
						</div>

						&nbsp; &nbsp;
					</div>
					<br>

					<div class="row">
						&nbsp; &nbsp;

						<div class="col-2 row">
							<label for="dom_dept_e" class="col-form-label"> Dpto: </label>
							&nbsp; &nbsp;
							<input type="text" name="dom_dept_e" id="dom_dept_e" class="form-control col-6">
						</div>

						<div class="col row">
							<label for="dom_entre_e" class="col-form-label"> Entre calles: </label>
							&nbsp; &nbsp;
							<input type="text" name="dom_entre_e" id="dom_entre_e" class="form-control col-10">
						</div>

						&nbsp; &nbsp;
					</div>
					<br>

					<div class="row">
						&nbsp; &nbsp;

						<label for="dom_otro_e" class="col-form-label">Otro dato referido al domicilio: </label>
						&nbsp; &nbsp;
						<input type="text" name="dom_otro_e" id="dom_otro_e" class="form-control col">
							
						&nbsp; &nbsp;
					</div>
					<br>

					<div class="row">
						&nbsp; &nbsp;

						<div class="col row">
							<label for="prov_e" class="col-form-label">Provincia:</label>
							&nbsp;&nbsp;
							<input type="text" name="prov_e" id="prov_e" class="form-control col-8">
						</div>
						
						<div class="col row">
							<label for="dist_e" class="col-form-label">Distrito:</label>
							&nbsp;&nbsp;
							<input type="text" name="dist_e" id="dist_e" class="form-control col-8">
						</div>
						
						<div class="col row">
							<label for="loc_e" class="col-form-label">Localidad:</label>
							&nbsp;&nbsp;
							<input type="text" name="loc_e" id="loc_e" class="form-control col-8">
						</div>
						
						<div class="col-3 row">
							<label for="post_e" class="col-form-label">Código Postal:</label>
							&nbsp;&nbsp;
							<input type="number" name="post_e" id="post_e" class="form-control col-6">
						</div>
						
						&nbsp; &nbsp;	
					</div>
					<br>

					<div class="row">
						&nbsp; &nbsp;

						<div class="col-4 row">
							<label for="tel_e" class="col-form-label">Teléfono:</label>
							&nbsp;&nbsp;
							<input type="number" name="tel_e" id="tel_e" class="form-control col-8">
						</div>
						
						<div class="col-5 row">
							<label for="cel_e" class="col-form-label">Teléfono Celular:</label>
							&nbsp;&nbsp;
							<input type="number" name="cel_e" id="cel_e" class="form-control col-7">
						</div>

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
								<input type="radio" name="her_tie_e" id="her_tie_e1" value="true">
								<label for="her_tie_e1">SI</label>
							</div>
							&nbsp;&nbsp;
							<div class="col-form-label">
								<input type="radio" name="her_tie_e" id="her_tie_e2" value="false">
								<label for="her_tie_e2">NO</label>
							</div>
						</div>
						
						<div class="col-3 row">
							<label for="her_can_e" class="col-form-label">Cantidad:</label>
							&nbsp;&nbsp;
							<input type="number" name="her_can_e" id="her_can_e" class="form-control col-5">
						</div>
						
						<div class="col row">
							<label for="her_este_e" class="col-form-label">Cantidad de hermanos que asisten a este establecimiento:</label>
							&nbsp;&nbsp;
							<input type="number" name="her_este_e" id="her_este_e" class="form-control col-2">
						</div>
						
						&nbsp; &nbsp;
					</div>
					<br>

					<div class="row">
						&nbsp;&nbsp;

						<div class="col-1"></div>
						
						<div class="col row">
							<label for="hog_can_e" class="col-form-label">Cantidad de habitantes en el hogar:</label>
							&nbsp;&nbsp;
							<input type="number" name="hog_can_e" id="hog_can_e" class="form-control col-2">
						</div>
						
						<div class="col row">
							<label for="hog_hab_e" class="col-form-label">Cantdad de habitaciones en el hogar:</label>
							&nbsp;&nbsp;
							<input type="number" name="hog_hab_e" id="hog_hab_e" class="form-control col-2">
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
							<input type="text" name="hog_leng_e" id="hog_leng_e" class="form-control col">
						</div>

						<div class="col"></div>
						
						&nbsp;&nbsp;
					</div>
					<br>

					<div class="row">
						&nbsp; &nbsp;
						<div class="col-3"></div>
						
						<div class="col row">
							<label for="ayuda_e" class="col-form-label">Recibe ayuda escolar</label>
							&nbsp;&nbsp;
							<div class="col-form-label">
								<input type="radio" name="ayuda_e" id="ayuda_e1" value="true">
								<label for="ayuda_e1">SI</label>
							</div>
							&nbsp;&nbsp;
							<div class="col-form-label">
								<input type="radio" name="ayuda_e" id="ayuda_e2" value="false">
								<label for="ayuda_e2">NO</label>
							</div>
						</div>
						
						<div class="col row">
							<label for="obras_e" class="col-form-label">Obra social</label>
							&nbsp;&nbsp;
							<div class="col-form-label">
								<input type="radio" name="obras_e" id="obras_e1" value="true">
								<label for="obras_e1">SI</label>
							</div>
							&nbsp;&nbsp;
							<div class="col-form-label">
								<input type="radio" name="obras_e" id="obras_e2" value="false">
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
								<input type="radio" name="prog_e" id="prog_e1" value="true">
								<label for="prog_e1">SI</label>
							</div>
							&nbsp;&nbsp;
							<div class="col-form-label">
								<input type="radio" name="prog_e" id="prog_e2" value="false">
								<label for="prog_e2">NO</label>
							</div>
						</div>
						
						<div class="col-4">
							<div class="form-check form-check-inline">
								<input type="checkbox" name="prog_auh_e" id="prog_auh_e" value="true" class="form-check-input">
								<label for="prog_auh_e" class="form-check-label">AUH</label>
							</div>

							<div class="form-check form-check-inline">
								<input type="checkbox" name="prog_beca_ex_e" id="prog_beca_ex_e" value="true" class="form-check-input">
								<label for="prog_beca_ex_e" class="form-check-label">Becas por excepción</label>
							</div>
							
							<div class="form-check form-check-inline">
								<input type="checkbox" name="prog_progr_e" id="prog_progr_e" value="true" class="form-check-input">
								<label for="prog_progr_e" class="form-check-label">Progresar</label>
							</div>
							
							<div class="form-check form-check-inline">
								<input type="checkbox" name="prog_otros_e" id="prog_otros_e" value="true" class="form-check-input">
								<label for="prog_otros_e" class="form-check-label">Otros</label>
							</div>
							
							<div class="form-check form-check-inline">
								<input type="checkbox" name="prog_beca_jud_e" id="prog_beca_jud_e" value="true" class="form-check-input">
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
							<input type="checkbox" name="trans_pie_e" id="trans_pie_e" class="form-check-input">
							<label for="trans_pie_e" class="form-check-label">A pie</label>
						</div>
						
						<div class="col form-ckeck form-ckeck-inline">
							<input type="checkbox" name="trans_omni_e" id="trans_omni_e" class="form-check-input">
							<label for="trans_omni_e" class="form-check-label">Omnibus</label>
						</div>
						
						<div class="col form-ckeck form-ckeck-inline">
							<input type="checkbox" name="trans_auto_e" id="trans_auto_e" class="form-check-input">
							<label for="trans_auto_e" class="form-check-label">Auto Particular</label>
						</div>
						
						<div class="col form-ckeck form-ckeck-inline">
							<input type="checkbox" name="trans_taxi_e" id="trans_taxi_e" class="form-check-input">
							<label for="trans_taxi_e" class="form-check-label">Taxi/Remís</label>
						</div>
						
						<div class="col form-ckeck form-ckeck-inline">
							<input type="checkbox" name="trans_otro_e" id="trans_otro_e" class="form-check-input">
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
								<input type="radio" name="hijo_e" id="hijo_e1" value="true" class="form-check-input">
								<label for="hijo_e1" class="form-check-label">SI</label>
							</div>
							
							<div class="form-check form-check-inline">
								<input type="radio" name="hijo_e" id="hijo_e2" value="false" class="form-check-input">
								<label for="hijo_e2" class="form-check-label">NO</label>
							</div>
						</div>

						<div class="col">
							<label for="hijo_proy_e" class="col-form-label">Asisten a una sala del Proyecto de Salas Maternales</label>
							&nbsp; &nbsp;

							<div class="form-check form-check-inline">
								<input type="radio" name="hijo_proy_e" id="hijo_proy_e1" value="true" class="form-check-input">
								<label for="hijo_proy_e1" class="form-check-label">SI</label>
							</div>
							
							<div class="form-check form-check-inline">
								<input type="radio" name="hijo_proy_e" id="hijo_proy_e2" value="false" class="form-check-input">
								<label for="hijo_proy_e2" class="form-check-label">NO</label>
							</div>
						</div>
					</div>
					<br>
				</td>
			</tr>
		</tbody>
	</table> -->

	<br>
	<h5 class="center font-weight-bold">DATOS DE LA MADRE</h5>
	<form>
		<table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
			<tbody>
				<tr>
					<td>
						<div class="form-row">
							<div class="col">
								<label for="apell_mad">Apellido/s:</label>
								<input type="text" id="apell_mad" name="apell_mad" class="form-control" placeholder="Apellido">
							</div>
							<div class="col">
								<label for="nomb_mad">Nombre/s:</label>
								<input type="text" id="nomb_mad" name="nomb_mad" class="form-control" placeholder="Nombre">
							</div>
						</div>    
					
						<br><br>
					
						<div class="row container-fluid">
							&nbsp; &nbsp;
							<div class="col-5 row">
								
								<label for="naciona_mad" class="col-form-label">Nacionalidad:</label> &nbsp;
								&nbsp; &nbsp;
								<input type="text" id="naciona_mad" name="naciona_mad" class="form-control col">
							</div>
							&nbsp; &nbsp;
							<div class="col">
								&nbsp;&nbsp;¿Asistió a algún establecimiento educacional? &nbsp; &nbsp;
								<input type="radio" id="yes_ed_m" name="asistioeducacion_mad" value=1>
								<label for="yes_ed_m">Si</label>&nbsp; 
								&nbsp;
								<input type="radio" id="no_ed_m" name="asistioeducacion_mad" value=0>
								<label for="no_ed_m">No</label>
							</div>
						</div>
					
						<br><br>
					
						¿Nivel más alto que cursó? &nbsp;&nbsp;
						<input type="radio" id="primario_m" name="nivelaltocursado_mad" value="primario">
						<label for="primario_m">Primario</label>&nbsp;
						<input type="radio" id="secundario_m" name="nivelaltocursado_mad" value="secundario">
						<label for="secundario_m">Secundario</label>&nbsp;
						<input type="radio" id="terceario_m" name="nivelaltocursado_mad" value="terciario">
						<label for="terceario_m">Terciario</label>&nbsp;
						<input type="radio" id="universitario_m" name="nivelaltocursado_mad" value="universitario">
						<label for="universitario_m">Universitario</label>&nbsp;
					
						<br><br> ¿Completó ese nivel? &nbsp; &nbsp;
						<input type="radio" id="yes_comed_m" name="completovin_mad" value=1>
						<label for="yes_comed_m">Si</label> &nbsp;
						<input type="radio" id="no_comed_m" name="completovin_mad" value=0>
						<label for="no_comed_m">No</label>
						
						<br><br/>
						
						¿Vive? &nbsp; &nbsp; 
						<input type="radio" id="yes_vive_m" name="vive_mad" value=1>
						<label for="yes_vive_m">  Si</label>
						&nbsp; &nbsp; 
						<input type="radio" id="no_vive_m" name="vive_mad" value=0>
						<label for="no_vive_m">   No</label>
					</td>
				</tr>
				<tr>
					<td>
			
					
					<div class="form-row">
						<div class="col">
						<div class="input-group">
							<div class="input-group-prepend">
							<span class="input-group-text" id="documento_mad">Documento</span>
							</div>
							<input type="text" class="form-control" id="tipdocument_mad" name="tipdocument_mad" placeholder="Tipo de Doc.">
							<input type="number" class="form-control" id="nrodocument_mad" name="nrodocument_mad" placeholder="Nro de Doc.">
						</div>
						</div>
						<div class="col">
						&nbsp; &nbsp; 
						Si no posee documento indicar: <br>
						&nbsp; &nbsp;<input type="radio" id="entramite_m" name="estadodocumento_mad" value="En Trámite">
						<label for="entramited_m">En Trámite</label>
						<input type="radio" id="nodoc_m" name="estadodocumento_mad" value="No Tiene Documento">
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
								<input type="text" class="form-control w-50" id="callenombre_mad" name="callenombre_mad" placeholder="Calle">
								<input type="number" class="form-control" id="callenro_mad" name="callenro_mad" placeholder="N°">
							</div>
						</div>
						&nbsp; &nbsp; &nbsp; &nbsp;
						<div class="col row">
							<label for="piso_mad" class="col-form-label">Piso:</label>
							&nbsp; &nbsp;
							<input type="number" id="piso_mad" name="piso_mad" class="form-control col-8">
						</div>
						<div class="col row">
							<label for="torre_mad" class="col-form-label">Torre:</label>
							&nbsp; &nbsp;
							<input type="number" id="torre_mad" name="torre_mad" class="form-control col-9"> 
						</div>
					</div>
			
					<br>
					
					
					<div class="container-fluid">
						<div class="row">
							<div class="col row">
								<label for="dpto_mad" class="col-form-label">Dpto:</label> &nbsp;&nbsp;
								<input type="text" id="dpto_mad" name="dpto_mad" class="form-control col-8">
							</div>
							<div class="col row">
								<label for="distrito_mad" class="col-form-label">Distrito:</label>&nbsp;&nbsp;
								<input type="text" id="distrito_mad" name="distrito_mad" class="form-control col-8">
							</div>
							<div class="col row">
								<label for="provincia_mad" class="col-form-label">Provincia:</label>&nbsp;&nbsp;
								<input type="text" id="provincia_mad" name="provincia_mad" class="form-control col-8">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-2"> </div>

							<div class="col row">
								<label for="localidad_mad" class="col-form-label">Localidad:</label>&nbsp;&nbsp;
								<input type="text" id="localidad_mad" name="localidad_mad" class="form-control col">
							</div>
							&nbsp; &nbsp;
							
							<div class="col row">
								<label for="codpostal_mad" class="col-form-label">Cod. Postal:</label>&nbsp;&nbsp;
								<input type="number" id="codpostal_mad" name="codpostal_mad" class="form-control col">
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
											<input type="number" id="telefo_mad" name="telefo_mad" placeholder="Teléfono" class="form-control">
											<input type="number" id="telefocelular_mad" name="telefocelular_mad" placeholder="Teléfono Celular" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<label for="email" class="col-form-label mx-auto">E-mail:</label>
			
							<div class="col-5">
								<input type="text" class="form-control" id="email_mad" name="email_mad" placeholder="ejemplo@gmail.com" aria-label="E-mail" aria-describedby="basic-addon2">
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
							<input type="radio" id="yes_jefehogar_m" name="jefehogar_mad" value=1>
							<label for="entramited_m">Si</label>
							&nbsp; &nbsp;
							<input type="radio" id="no_jefehogar_m" name="jefehogar_mad" value=0>
							<label for="nodoc_m">No</label>
						</div>
						<div class="col row">
							<label for="profesion_mad" class="col-form-label">Profesión u ocupación: </label>
							&nbsp; &nbsp;
							<input type="text" id="profesion_mad" name="profesion_mad" class="form-control col-7">
						</div>
					</div>
					
					<br/>
					
					<div class="cond">
						<b class="font-weight-bold">CONDICIÓN DE ACTIVIDAD</b> <br/><br/>
						<input type="radio" id="solotrabaja_m" name="condicionactividad_mad" value="Sólo Trabaja">
						<label for="solotrabaja_m">Sólo Trabaja</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajaestudia_m" name="condicionactividad_mad" value="Trabaja y Estudia">
						<label for="trabajaestudia_m">Trabaja y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajayjub_m" name="condicionactividad_mad" value="Trabaja y Recibe Jubilac. o Pensión">
						<label for="trabajayjub_m">Trabaja y Recibe Jubilac. o Pensión</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_m" name="condicionactividad_mad" value="Sólo Busca Trabajo">
						<label for="buscatrabajo_m">Sólo Busca Trabajo</label>
						&nbsp; &nbsp; 
						<input type="radio" id="soloestudia_m" name="condicionactividad_mad" value="Sólo Estudia">
						<label for="soloestudia_m">Sólo Estudia</label>
						<br/>
						<input type="radio" id="buscatrabajoestudia_m" name="condicionactividad_mad" value="Busca Trabajo y Estudia">
						<label for="buscatrabajoestudia_m">Busca Trabajo y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_jubilada_m" name="condicionactividad_mad" value="Trabajo y Recibe Jubilac. o Pensión">
						<label for="buscatrabajo_jubilada_m">Trabajo y Recibe Jubilac. o Pensión</label>
						&nbsp; &nbsp; 
						<input type="radio" id="jubilada_m" name="condicionactividad_mad" value="Jubilado/Pensionado">
						<label for="jubilada_m">Jubilado/Pensionado</label>
						&nbsp; &nbsp; 
						<input type="radio" id="otrocond_m" name="condicionactividad_mad" value="Otro">
						<label for="otrocond_m">Otro</label>
					</div>
					</td>
				</tr>
			</tbody>
		</table>
	</form>

	<br>
	<h5 class="center font-weight-bold">DATOS DEL PADRE</h5>
	<form>
		<table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
			<tbody>
				<tr>
					<td>
						<div class="form-row">
							<div class="col">
								<label for="apell_pad">Apellido/s:</label>
								<input type="text" id="apell_pad" name="apell_pad" class="form-control" placeholder="Apellido">
							</div>
							<div class="col">
								<label for="nomb_pad">Nombre/s:</label>
								<input type="text" id="nomb_pad" name="nomb_pad" class="form-control" placeholder="Nombre">
							</div>
						</div>    
					
						<br><br>
					
						<div class="row container-fluid">
							&nbsp; &nbsp;
							<div class="col-5 row">
								
								<label for="naciona_pad" class="col-form-label">Nacionalidad:</label> &nbsp;
								&nbsp; &nbsp;
								<input type="text" id="naciona_pad" name="naciona_pad" class="form-control col">
							</div>
							&nbsp; &nbsp;
							<div class="col">
								&nbsp;&nbsp;¿Asistió a algún establecimiento educacional? &nbsp; &nbsp;
								<input type="radio" id="yes_ed_p" name="asistioeducacion_pad" value=1>
								<label for="yes_ed_p">Si</label>&nbsp; 
								&nbsp;
								<input type="radio" id="no_ed_p" name="asistioeducacion_pad" value=0>
								<label for="no_ed_p">No</label>
							</div>
						</div>
					
						<br><br>
					
						¿Nivel más alto que cursó? &nbsp;&nbsp;
						<input type="radio" id="primario_p" name="nivelaltocursado_pad" value="primario">
						<label for="primario_p">Primario</label>&nbsp;
						<input type="radio" id="secundario_p" name="nivelaltocursado_pad" value="secundario">
						<label for="secundario_p">Secundario</label>&nbsp;
						<input type="radio" id="terceario_p" name="nivelaltocursado_pad" value="terciario">
						<label for="terceario_p">Terciario</label>&nbsp;
						<input type="radio" id="universitario_p" name="nivelaltocursado_pad" value="universitario">
						<label for="universitario_p">Universitario</label>&nbsp;
					
						<br><br> ¿Completó ese nivel? &nbsp; &nbsp;
						<input type="radio" id="yes_comed_p" name="completoniv_pad" value=1>
						<label for="yes_comed_p">Si</label> &nbsp;
						<input type="radio" id="no_comed_p" name="completoniv_pad" value=0>
						<label for="no_comed_p">No</label>
						
						<br><br/>
						
						¿Vive? &nbsp; &nbsp; 
						<input type="radio" id="yes_vive_p" name="vive_pad" value=1>
						<label for="yes_vive_p">  Si</label>
						&nbsp; &nbsp; 
						<input type="radio" id="no_vive_p" name="vive_pad" value=0>
						<label for="no_vive_p">   No</label>
					</td>
				</tr>
				<tr>
					<td>
			
					
					<div class="form-row">
						<div class="col">
						<div class="input-group">
							<div class="input-group-prepend">
							<span class="input-group-text" id="documento_pad">Documento</span>
							</div>
							<input type="text" class="form-control" id="tipdocument_pad" name="tipdocument_pad" placeholder="Tipo de Doc.">
							<input type="number" class="form-control" id="nrodocument_pad" name="nrodocument_pad" placeholder="Nro de Doc.">
						</div>
						</div>
						<div class="col">
						&nbsp; &nbsp; 
						Si no posee documento indicar: <br>
						&nbsp; &nbsp;<input type="radio" id="entramite_p" name="estadodocumento_pad" value="En Trámite">
						<label for="entramited_p">En Trámite</label>
						<input type="radio" id="nodoc_p" name="estadodocumento_pad" value="No Tiene Documento">
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
								<input type="text" class="form-control w-50" id="callenombre_pad" name="callenombre_pad" placeholder="Calle">
								<input type="number" class="form-control" id="callenro_pad" name="callenro_pad" placeholder="N°">
							</div>
						</div>
						&nbsp; &nbsp; &nbsp; &nbsp;
						<div class="col row">
							<label for="piso_pad" class="col-form-label">Piso:</label>
							&nbsp; &nbsp;
							<input type="number" id="piso_pad" name="piso_pad" class="form-control col-8">
						</div>
						<div class="col row">
							<label for="torre_pad" class="col-form-label">Torre:</label>
							&nbsp; &nbsp;
							<input type="number" id="torre_pad" name="torre_pad" class="form-control col-9"> 
						</div>
					</div>
			
					<br>
					
					
					<div class="container-fluid">
						<div class="row">
							<div class="col row">
								<label for="dpto_pad" class="col-form-label">Dpto:</label> &nbsp;&nbsp;
								<input type="text" id="dpto_pad" name="dpto_pad" class="form-control col-8">
							</div>
							<div class="col row">
								<label for="distrito_pad" class="col-form-label">Distrito:</label>&nbsp;&nbsp;
								<input type="text" id="distrito_pad" name="distrito_pad" class="form-control col-8">
							</div>
							<div class="col row">
								<label for="provincia_pad" class="col-form-label">Provincia:</label>&nbsp;&nbsp;
								<input type="text" id="provincia_pad" name="provincia_pad" class="form-control col-8">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-2"> </div>

							<div class="col row">
								<label for="localidad_pad" class="col-form-label">Localidad:</label>&nbsp;&nbsp;
								<input type="text" id="localidad_pad" name="localidad_pad" class="form-control col">
							</div>
							&nbsp; &nbsp;
							
							<div class="col row">
								<label for="codpostal_pad" class="col-form-label">Cod. Postal:</label>&nbsp;&nbsp;
								<input type="number" id="codpostal_pad" name="codpostal_pad" class="form-control col">
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
											<input type="number" id="telefo_pad" name="telefo_pad" placeholder="Teléfono" class="form-control">
											<input type="number" id="telefocelular_pad" name="telefocelular_pad" placeholder="Teléfono Celular" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<label for="email" class="col-form-label mx-auto">E-mail:</label>
			
							<div class="col-5">
								<input type="text" class="form-control" id="email_pad" name="email_pad" placeholder="ejemplo@gmail.com" aria-label="E-mail" aria-describedby="basic-addon2">
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
							<input type="radio" id="yes_jefehogar_p" name="jefehogar_pad" value=1>
							<label for="entramited_p">Si</label>
							&nbsp; &nbsp;
							<input type="radio" id="no_jefehogar_p" name="jefehogar_pad" value=0>
							<label for="nodoc_p">No</label>
						</div>
						<div class="col row">
							<label for="profesion_pad" class="col-form-label">Profesión u ocupación: </label>
							&nbsp; &nbsp;
							<input type="text" id="profesion_pad" name="profesion_pad" class="form-control col-7">
						</div>
					</div>
					
					<br/>
					
					<div class="cond">
						<b class="font-weight-bold">CONDICIÓN DE ACTIVIDAD</b> <br/><br/>
						<input type="radio" id="solotrabaja_p" name="condicionactividad_pad" value="Sólo Trabaja">
						<label for="solotrabaja_p">Sólo Trabaja</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajaestudia_p" name="condicionactividad_pad" value="Trabaja y Estudia">
						<label for="trabajaestudia_p">Trabaja y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajayjub_p" name="condicionactividad_pad" value="Trabaja y Recibe Jubilac. o Pensión">
						<label for="trabajayjub_p">Trabaja y Recibe Jubilac. o Pensión</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_p" name="condicionactividad_pad" value="Sólo Busca Trabajo">
						<label for="buscatrabajo_p">Sólo Busca Trabajo</label>
						&nbsp; &nbsp; 
						<input type="radio" id="soloestudia_p" name="condicionactividad_pad" value="Sólo Estudia">
						<label for="soloestudia_p">Sólo Estudia</label>
						<br/>
						<input type="radio" id="buscatrabajoestudia_p" name="condicionactividad_pad" value="Busca Trabajo y Estudia">
						<label for="buscatrabajoestudia_p">Busca Trabajo y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_jubilada_p" name="condicionactividad_pad" value="Trabajo y Recibe Jubilac. o Pensión">
						<label for="buscatrabajo_jubilada_p">Trabajo y Recibe Jubilac. o Pensión</label>
						<input type="radio" id="jubilada_p" name="	condicionactividad_pad" value="Jubilado/Pensionado">
						<label for="jubilada_p">Jubilado/Pensionado</label>
						&nbsp; &nbsp; 
						<input type="radio" id="otrocond_p" name="condicionactividad_pad" value="Otro">
						<label for="otrocond_p">Otro</label>
					</div>
					</td>
				</tr>
			</tbody>
		</table>
	</form>

	<br>
	<h5 class="center font-weight-bold">DATOS DEL TUTOR</h5>
	<form>
		<table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
			<tbody>
				<tr>
					<td>
						<div class="form-row">
							<div class="col">
								<label for="apell_tut">Apellido/s:</label>
								<input type="text" id="apell_tut" name="apell_tut" class="form-control" placeholder="Apellido">
							</div>
							<div class="col">
								<label for="nomb_tut">Nombre/s:</label>
								<input type="text" id="nomb_tut" name="nomb_tut" class="form-control" placeholder="Nombre">
							</div>
						</div>    
					
						<br><br>
					
						<div class="row container-fluid">
							&nbsp; &nbsp;
							<div class="col-5 row">
								
								<label for="naciona_tut" class="col-form-label">Nacionalidad:</label> &nbsp;
								&nbsp; &nbsp;
								<input type="text" id="naciona_tut" name="naciona_tut" class="form-control col">
							</div>
							&nbsp; &nbsp;
							<div class="col">
								&nbsp;&nbsp;¿Asistió a algún establecimiento educacional? &nbsp; &nbsp;
								<input type="radio" id="yes_ed_t" name="asistioeducacion_tut" value=1>
								<label for="yes_ed_t">Si</label>&nbsp; 
								&nbsp;
								<input type="radio" id="no_ed_t" name="asistioeducacion_tut" value=0>
								<label for="no_ed_t">No</label>
							</div>
						</div>
					
						<br><br>
					
						¿Nivel más alto que cursó? &nbsp;&nbsp;
						<input type="radio" id="primario_t" name="nivelaltocursado_tut" value="primario">
						<label for="primario_t">Primario</label>&nbsp;
						<input type="radio" id="secundario_t" name="nivelaltocursado_tut" value="secundario">
						<label for="secundario_t">Secundario</label>&nbsp;
						<input type="radio" id="terceario_t" name="nivelaltocursado_tut" value="terciario">
						<label for="terceario_t">Terciario</label>&nbsp;
						<input type="radio" id="universitario_t" name="nivelaltocursado_tut" value="universitario">
						<label for="universitario_t">Universitario</label>&nbsp;
					
						<br><br> ¿Completó ese nivel? &nbsp; &nbsp;
						<input type="radio" id="yes_comed_t" name="completovin_tut" value=1>
						<label for="yes_comed_t">Si</label> &nbsp;
						<input type="radio" id="no_comed_t" name="completovin_tut" value=0>
						<label for="no_comed_t">No</label>
						
						<br><br>
					
						<div class="form-row">
							<div class="col">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="documento_tut">Documento</span>
									</div>
									<input type="text" class="form-control" id="tipdocument_tut" name="tipdocument_tut" placeholder="Tipo de Doc.">
									<input type="number" class="form-control" id="nrodocument_tut" name="nrodocument_tut" placeholder="Nro de Doc.">
								</div>
							</div>
							<div class="col">
								&nbsp; &nbsp; 
								Si no posee documento indicar: <br>
								&nbsp; &nbsp;<input type="radio" id="entramite_t" name="estadodocumento_tut" value="En Trámite">
								<label for="entramited_t">En Trámite</label>
								<input type="radio" id="nodoc_t" name="estadodocumento_tut" value="No Tiene Documento">
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
								<input type="text" class="form-control w-50" id="callenombre_tut" name="callenombre_tut" placeholder="Calle">
								<input type="number" class="form-control" id="callenro_tut" name="callenro_tut" placeholder="N°">
							</div>
						</div>
						&nbsp; &nbsp; &nbsp; &nbsp;
						<div class="col row">
							<label for="piso_tut" class="col-form-label">Piso:</label>
							&nbsp; &nbsp;
							<input type="number" id="piso_tut" name="piso_tut" class="form-control col-8">
						</div>
						<div class="col row">
							<label for="torre_tut" class="col-form-label">Torre:</label>
							&nbsp; &nbsp;
							<input type="number" id="torre_tut" name="torre_tut" class="form-control col-9"> 
						</div>
					</div>
			
					<br>
					
					
					<div class="container-fluid">
						<div class="row">
							<div class="col row">
								<label for="dpto_tut" class="col-form-label">Dpto:</label> &nbsp;&nbsp;
								<input type="text" id="dpto_tut" name="dpto_tut" class="form-control col-8">
							</div>
							<div class="col row">
								<label for="distrito_tut" class="col-form-label">Distrito:</label>&nbsp;&nbsp;
								<input type="text" id="distrito_tut" name="distrito_tut" class="form-control col-8">
							</div>
							<div class="col row">
								<label for="provincia_tut" class="col-form-label">Provincia:</label>&nbsp;&nbsp;
								<input type="text" id="provincia_tut" name="provincia_tut" class="form-control col-8">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-2"> </div>

							<div class="col row">
								<label for="localidad_tut" class="col-form-label">Localidad:</label>&nbsp;&nbsp;
								<input type="text" id="localidad_tut" name="localidad_tut" class="form-control col">
							</div>
							&nbsp; &nbsp;
							
							<div class="col row">
								<label for="codpostal_tut" class="col-form-label">Cod. Postal:</label>&nbsp;&nbsp;
								<input type="number" id="codpostal_tut" name="codpostal_tut" class="form-control col">
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
											<input type="number" id="telefo_tut" name="telefo_tut" placeholder="Teléfono" class="form-control">
											<input type="number" id="telefocelular_tut" name="telefocelular_tut" placeholder="Teléfono Celular" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<label for="email" class="col-form-label mx-auto">E-mail:</label>
			
							<div class="col-5">
								<input type="text" class="form-control" id="email_tut" name="email_tut" placeholder="ejemplo@gmail.com" aria-label="E-mail" aria-describedby="basic-addon2">
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
							<input type="radio" id="yes_jefehogar_t" name="jefehogar_tut" value=1>
							<label for="entramited_t">Si</label>
							&nbsp; &nbsp;
							<input type="radio" id="no_jefehogar_t" name="jefehogar_tut" value=0>
							<label for="nodoc_t">No</label>
						</div>
						<div class="col row">
							<label for="profesion_tut" class="col-form-label">Profesión u ocupación: </label>
							&nbsp; &nbsp;
							<input type="text" id="profesion_tut" name="profesion_tut" class="form-control col-7">
						</div>
					</div>
					
					<br/>
					
					<div class="cond">
						<b class="font-weight-bold">CONDICIÓN DE ACTIVIDAD</b> <br/><br/>
						<input type="radio" id="solotrabaja_t" name="condicionactividad_tut" value="Sólo Trabaja">
						<label for="solotrabaja_t">Sólo Trabaja</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajaestudia_t" name="condicionactividad_tut" value="Trabaja y Estudia">
						<label for="trabajaestudia_t">Trabaja y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajayjub_t" name="condicionactividad_tut" value="Trabaja y Recibe Jubilac. o Pensión">
						<label for="trabajayjub_t">Trabaja y Recibe Jubilac. o Pensión</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_t" name="condicionactividad_tut" value="Sólo Busca Trabajo">
						<label for="buscatrabajo_t">Sólo Busca Trabajo</label>
						&nbsp; &nbsp; 
						<input type="radio" id="soloestudia_t" name="condicionactividad_tut" value="Sólo Estudia">
						<label for="soloestudia_t">Sólo Estudia</label>
						<br/>
						<input type="radio" id="buscatrabajoestudia_t" name="condicionactividad_tut" value="Busca Trabajo y Estudia">
						<label for="buscatrabajoestudia_t">Busca Trabajo y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_jubilada_t" name="condicionactividad_tut" value="Trabajo y Recibe Jubilac. o Pensión">
						<label for="buscatrabajo_jubilada_t">Trabajo y Recibe Jubilac. o Pensión</label>
						&nbsp; &nbsp; 
						<input type="radio" id="jubilada_t" name="condicionactividad_tut" value="Jubilado/Pensionado">
						<label for="jubilada_t">Jubilado/Pensionado</label>
						&nbsp; &nbsp; 
						<input type="radio" id="otrocond_t" name="condicionactividad_tut" value="Otro">
						<label for="otrocond_t">Otro</label>
					</div>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	
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
							<input type="text" class="form-control col-5" id="obrasocial_est" name="obrasocial_est">
							&nbsp;&nbsp;&nbsp;&nbsp;
							<label class="col-form-label" for="N° afiliado_est ">  N° Afiliado</label>
							&nbsp;&nbsp;
							<input type="number"  class="form-control col-sm-3"  id="N° afiliado_est" name="N° afiliado_est">
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
								<div class="col-4">
									<b class="font-weight-bold">¿TIENE ALGUN TIPO DE ALERGIA?</b>
								</div>
								<div class="col">
									<input type="radio" id="yes_alergia_e" name="tienealguntipo_alergia_est" value=1>
									<label class="form-label "for="yes_alergia_e">Si</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_alergia_e" name="tienealguntipo_alergia_est" value=0>
									<label class="form-label" for="no_alergia_e ">No</label>  
								</div>
							</div>
							<br>

							<div class="row">
								<div class="col-6.5">
									<label for="manifestacionesalergia_est" class="col-form-label"> En caso afirmativo, describa sus manifestaciones </label>
								</div>
								<div class="col">
									<input type="text" class="form-control" id="manifestacionesalergia_est" name="manifestacionesalergia_est" placeholder="Manifestaciones">
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-3.5">
									<label for="alergia_sedebe_est" class="col-form-label">La alergia se debe a</label>
								</div>
								<div class="col-7">
									<input type="text" class="form-control" id="alergia_sedebe_est" name="alergia_sedebe_est" placeholder="Motivo">
								</div>
								&nbsp;&nbsp;

								<div class="col col-form-label">
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
								<b class="font-weight-bold">TRATAMIENTOS</b>
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
								<div class="col-1 col-form-label">
									&nbsp;&nbsp;Especifique
								</div>
								&nbsp;&nbsp;
								<div class="col-4">
									<input type="text" class="form-control" id="manifestacionesalergia_est" name="manifestacionesalergia_est" placeholder="Tratamiento">
								</div>
							</div>

							<br>

							<div class="row">
								<div class="col-3.5 col-form-label">
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
								<div class="col-2.5 col-form-label">
									Tipo de cirugía
								</div>
								<div class="col">
									<input type="text" class="form-control" id="tipocirugia_est" name="tipocirugia_est" placeholder="Tipo">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-7 col-form-label">
									¿Presenta alguna limitación física?
									&nbsp;&nbsp;
									<input type="radio" id="yes_limfisica_e" name="presentalimitacion_fisica_est" value=1>
									<label class="form-label "for="yes_limfisica_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_limfisica_e" name="presentalimitacion_fisica_est" value=0>
									<label class="form-label" for="no_limfisica_e ">NO</label>
								</div>
								<div class="col-1.5 col-form-label">
									Aclaración
								</div>
								<div class="col">
									<input type="text" class="form-control" id="aclaralimitación_fisica_est" name="aclaralimitación_fisica_est">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-3">
									<label for="otroproblemad_salud_est" class="col-form-label">¿Otros problemas de salud?</label>
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
									<b class="font-weight-bold">VACUNAS OBLIGATORIAS</b> <div class="float-right"><small class="text-muted">tomando en cuenta el Calendario de Vacunación y la Guía de Salud Nº 2</small></div>  
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
									<b class="font-weight-bold">DETERMINACION DE</b>
								</div>
								<div class="col-1.5">
									<label for="talla_est" class="col-form-label">Talla</label>
								</div>
								<div class="col">
									<input type="text" class="form-control" id="talla_est" name="talla_est" placeholder="(En centímetros)">
								</div>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<div class="col-1.5">
									<label for="peso_est" class="col-form-label">Peso</label>
								</div>
								<div class="col">
									<input type="text" class="form-control" id="peso_est" name="peso_est" placeholder="Kgrs. (con 1 décimo)">
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-4"><label for="fechadeterminacion_est" class="col-form-label">Fecha de la determinación</label></div>
								<div class="col-6">
									<input type="date" class="form-control" id="fechadeterminacion_est" name="fechadeterminacion_est" value="2020-01-01">
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
		<h6 class="center font-weight-bold">ACTUALIZACIONES</h6>
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
									<input type="radio" id="yes_cambios_e" name="actualizacion_cambios_est" value=1>
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
@endsection
