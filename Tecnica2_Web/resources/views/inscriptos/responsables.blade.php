@extends('layouts.app')

@section('title', 'Responsables')

@section('content')
	<form>
		@csrf
		<input type="hidden" name="form_section" value=1>
		<!--<input type="hidden" name="id_alumno" value={{ $id_alumno }}> -->
	<br>
	<h5 class="center font-weight-bold">DATOS DE LA MADRE</h5>
	<table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
		<tbody>
			<tr>
				<td>
					<div class="form-row">
						<div class="col">
							<label for="apell_mad">Apellido/s:</label>
							<input type="text" id="apell_mad" name="apell_mad" required class="form-control" placeholder="Apellido" >
						</div>
						<div class="col">
							<label for="nomb_mad">Nombre/s:</label>
							<input type="text" id="nomb_mad" name="nomb_mad" required class="form-control" placeholder="Nombre">
						</div>
					</div>    
				
					<br><br>
				
					<div class="row container-fluid">
						&nbsp; &nbsp;
						<div class="col-5 row">
							
							<label for="naciona_mad" class="col-form-label">Nacionalidad:</label> &nbsp;
							&nbsp; &nbsp;
							<input type="text" id="naciona_mad" name="naciona_mad" required class="form-control col">
						</div>
						&nbsp; &nbsp;
						<div class="col">
							&nbsp;&nbsp;¿Asistió a algún establecimiento educacional? &nbsp; &nbsp;
							<input type="radio" id="yes_ed_m" required name="asistioeducacion_mad" value=1>
							<label for="yes_ed_m">Si</label>&nbsp; 
							&nbsp;
							<input type="radio" id="no_ed_m" name="asistioeducacion_mad" value=0>
							<label for="no_ed_m">No</label>
						</div>
					</div>
				
					<br><br>
				
					¿Nivel más alto que cursó? &nbsp;&nbsp;
					<input type="radio" id="primario_m" required name="nivelaltocursado_mad" value="primario">
					<label for="primario_m">Primario</label>&nbsp;
					<input type="radio" id="secundario_m" name="nivelaltocursado_mad" value="secundario">
					<label for="secundario_m">Secundario</label>&nbsp;
					<input type="radio" id="terceario_m" name="nivelaltocursado_mad" value="terciario">
					<label for="terceario_m">Terciario</label>&nbsp;
					<input type="radio" id="universitario_m" name="nivelaltocursado_mad" value="universitario">
					<label for="universitario_m">Universitario</label>&nbsp;
				
					<br><br> ¿Completó ese nivel? &nbsp; &nbsp;
					<input type="radio" id="yes_comed_m" required name="completoniv_mad" value=1>
					<label for="yes_comed_m">Si</label> &nbsp;
					<input type="radio" id="no_comed_m" name="completoniv_mad" value=0>
					<label for="no_comed_m">No</label>
					
					<br><br/>
					
					¿Vive? &nbsp; &nbsp; 
					<input type="radio" id="yes_vive_m" required name="vive_mad" value=1>
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
					<input type="radio" id="solotrabaja_m" name="condicionactividad_mad" value="Solo Trabaja">
					<label for="solotrabaja_m">Sólo Trabaja</label>
					&nbsp; &nbsp; 
					<input type="radio" id="trabajaestudia_m" name="condicionactividad_mad" value="Trabaja y Estudia">
					<label for="trabajaestudia_m">Trabaja y Estudia</label>
					&nbsp; &nbsp; 
					<input type="radio" id="trabajayjub_m" name="condicionactividad_mad" value="Trabaja y Recibe Jubilacion o Pension">
					<label for="trabajayjub_m">Trabaja y Recibe Jubilac. o Pensión</label>
					&nbsp; &nbsp; 
					<input type="radio" id="buscatrabajo_m" name="condicionactividad_mad" value="Solo Busca Trabajo">
					<label for="buscatrabajo_m">Sólo Busca Trabajo</label>
					&nbsp; &nbsp; 
					<input type="radio" id="soloestudia_m" name="condicionactividad_mad" value="Solo Estudia">
					<label for="soloestudia_m">Sólo Estudia</label>
					<br/>
					<input type="radio" id="buscatrabajoestudia_m" name="condicionactividad_mad" value="Busca Trabajo y Estudia">
					<label for="buscatrabajoestudia_m">Busca Trabajo y Estudia</label>
					&nbsp; &nbsp; 
					<input type="radio" id="buscatrabajo_jubilada_m" name="condicionactividad_mad" value="Busca Trabajo y Recibe Jubilacion o Pension">
					<label for="buscatrabajo_jubilada_m">Busca Trabajo y Recibe Jubilac. o Pensión</label>
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
	<br>
	<h5 class="center font-weight-bold">DATOS DEL PADRE</h5>
	<table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
			<tbody>
				<tr>
					<td>
						<div class="form-row">
							<div class="col">
								<label for="apell_pad">Apellido/s:</label>
								<input type="text" id="apell_pad" name="apell_pad" required class="form-control" placeholder="Apellido">
							</div>
							<div class="col">
								<label for="nomb_pad">Nombre/s:</label>
								<input type="text" id="nomb_pad" name="nomb_pad" required class="form-control" placeholder="Nombre">
							</div>
						</div>    
					
						<br><br>
					
						<div class="row container-fluid">
							&nbsp; &nbsp;
							<div class="col-5 row">
								
								<label for="naciona_pad" class="col-form-label">Nacionalidad:</label> &nbsp;
								&nbsp; &nbsp;
								<input type="text" id="naciona_pad" required name="naciona_pad" class="form-control col">
							</div>
							&nbsp; &nbsp;
							<div class="col">
								&nbsp;&nbsp;¿Asistió a algún establecimiento educacional? &nbsp; &nbsp;
								<input type="radio" id="yes_ed_p" required name="asistioeducacion_pad" value=1>
								<label for="yes_ed_p">Si</label>&nbsp; 
								&nbsp;
								<input type="radio" id="no_ed_p" name="asistioeducacion_pad" value=0>
								<label for="no_ed_p">No</label>
							</div>
						</div>
					
						<br><br>
					
						¿Nivel más alto que cursó? &nbsp;&nbsp;
						<input type="radio" id="primario_p" required name="nivelaltocursado_pad" value="primario">
						<label for="primario_p">Primario</label>&nbsp;
						<input type="radio" id="secundario_p" name="nivelaltocursado_pad" value="secundario">
						<label for="secundario_p">Secundario</label>&nbsp;
						<input type="radio" id="terceario_p" name="nivelaltocursado_pad" value="terciario">
						<label for="terceario_p">Terciario</label>&nbsp;
						<input type="radio" id="universitario_p" name="nivelaltocursado_pad" value="universitario">
						<label for="universitario_p">Universitario</label>&nbsp;
					
						<br><br> ¿Completó ese nivel? &nbsp; &nbsp;
						<input type="radio" id="yes_comed_p" required name="completoniv_pad" value=1>
						<label for="yes_comed_p">Si</label> &nbsp;
						<input type="radio" id="no_comed_p" name="completoniv_pad" value=0>
						<label for="no_comed_p">No</label>
						
						<br><br/>
						
						¿Vive? &nbsp; &nbsp; 
						<input type="radio" id="yes_vive_p" required name="vive_pad" value=1>
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
						<input type="radio" id="solotrabaja_p" name="condicionactividad_pad" value="Solo Trabaja">
						<label for="solotrabaja_p">Sólo Trabaja</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajaestudia_p" name="condicionactividad_pad" value="Trabaja y Estudia">
						<label for="trabajaestudia_p">Trabaja y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajayjub_p" name="condicionactividad_pad" value="Trabaja y Recibe Jubilacion o Pension">
						<label for="trabajayjub_p">Trabaja y Recibe Jubilac. o Pensión</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_p" name="condicionactividad_pad" value="Solo Busca Trabajo">
						<label for="buscatrabajo_p">Sólo Busca Trabajo</label>
						&nbsp; &nbsp; 
						<input type="radio" id="soloestudia_p" name="condicionactividad_pad" value="Solo Estudia">
						<label for="soloestudia_p">Sólo Estudia</label>
						<br>
						<input type="radio" id="buscatrabajoestudia_p" name="condicionactividad_pad" value="Busca Trabajo y Estudia">
						<label for="buscatrabajoestudia_p">Busca Trabajo y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_jubilada_p" name="condicionactividad_pad" value="Busca Trabajo y Recibe Jubilacion o Pension">
						<label for="buscatrabajo_jubilada_p">Busca Trabajo y Recibe Jubilac. o Pensión</label>
						&nbsp; &nbsp; 
						<input type="radio" id="jubilada_p" name="condicionactividad_pad" value="Jubilado/Pensionado">
						<label for="jubilada_p">Jubilado/Pensionado</label>
						&nbsp; &nbsp; 
						<input type="radio" id="otrocond_p" name="condicionactividad_pad" value="Otro">
						<label for="otrocond_p">Otro</label>
					</div>
					</td>
				</tr>
			</tbody>
	</table>

	<br>
	<h5 class="center font-weight-bold">DATOS DEL TUTOR</h5>
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
						<input type="radio" id="yes_comed_t" name="completoniv_tut" value=1>
						<label for="yes_comed_t">Si</label> &nbsp;
						<input type="radio" id="no_comed_t" name="completoniv_tut" value=0>
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
						<input type="radio" id="solotrabaja_t" name="condicionactividad_tut" value="Solo Trabaja">
						<label for="solotrabaja_t">Sólo Trabaja</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajaestudia_t" name="condicionactividad_tut" value="Trabaja y Estudia">
						<label for="trabajaestudia_t">Trabaja y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="trabajayjub_t" name="condicionactividad_tut" value="Trabaja y Recibe Jubilacion o Pension">
						<label for="trabajayjub_t">Trabaja y Recibe Jubilac. o Pensión</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_t" name="condicionactividad_tut" value="Solo Busca Trabajo">
						<label for="buscatrabajo_t">Sólo Busca Trabajo</label>
						&nbsp; &nbsp; 
						<input type="radio" id="soloestudia_t" name="condicionactividad_tut" value="Solo Estudia">
						<label for="soloestudia_t">Sólo Estudia</label>
						<br/>
						<input type="radio" id="buscatrabajoestudia_t" name="condicionactividad_tut" value="Busca Trabajo y Estudia">
						<label for="buscatrabajoestudia_t">Busca Trabajo y Estudia</label>
						&nbsp; &nbsp; 
						<input type="radio" id="buscatrabajo_jubilada_t" name="condicionactividad_tut" value="Busca Trabajo y Recibe Jubilacion o Pension">
						<label for="buscatrabajo_jubilada_t">Busca Trabajo y Recibe Jubilac. o Pensión</label>
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

@endsection
