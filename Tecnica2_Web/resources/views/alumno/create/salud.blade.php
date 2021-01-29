@extends('layouts.app')

@section('title', 'Salud')

@section('content')

	<br>

	<form action="{{ route('alumno.store') }}" method="POST">

		<div class="container-fluid">
			<div class="row">
				<div class="col-2"></div>
				<div class="col">
					@if ($errors->any())
						<br>
						<h3>
							<a class="btn btn-warning" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								Por favor... Complete los campos faltantes para enviar el formulario.
						  	</a>
							<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
							  Click Aquí!
							</button>
						</h3>
						<br/>
						@foreach($errors->all() as $error)
						<div class="collapse" id="collapseExample">
							<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								
								{{ $error }}
							</div>
						</div>
						@endforeach
						<br/><br/>
					@endif
				</div>
				<div class="col-2"></div>
			</div>
		</div>


		@csrf
		<input type="hidden" name="form_section" value=2>
		<input type="hidden" name="alumno_id" value={{ $alumno_id }}>

		<h5 class="center font-weight-bold">INFORMACIÓN DE SALUD</h5>
		<table class="table table-bordered" style="width:75%; margin-left: auto; margin-right: auto;">
			<tbody>
				<tr>
					<td>
						<div class="form-row row">
							<label class="col-form-label"  for="obrasocial_est">Obra Social</label>
							&nbsp;&nbsp;
							<input type="text" class="form-control col-5" id="obrasocial_est" name="obrasocial_est" maxlength="50">
							&nbsp;&nbsp;&nbsp;&nbsp;
							<label class="col-form-label" for="N_afiliado_est ">  N° Afiliado</label>
							&nbsp;&nbsp;
							<input type="number"  class="form-control col-sm-3"  id="N_afiliado_est" name="N_afiliado_est" min="-999999999999999" max="999999999999999">
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
									<input type="radio" id="yes_enfermedadtrat_e" required name="tienenenfermedad_est" value=1 >
									<label class="form-label "for="yes_enfermedadtrat_e">Si</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_enfermedadtrat_e" name="tienenenfermedad_est" value=0>
									<label class="form-label" for="no_enfermedadtrat_e">No</label>
								</div>
								<div class="col-7">
									<input type="text" class="form-control" id="cualenfermedad_est" name="cualenfermedad_est" placeholder="¿Cual?" maxlength="75">
								</div>
							</div>
						
							<br>

							<div class="row">Durante los últimos tres años ¿fue internado alguna vez?</div>
						
							<div class="row">
								<div class="col-4">
									<input type="radio" id="yes_fueinternado_e" required name="fueinternado_ultimos3años_est" value=1>
									<label class="form-label "for="yes_fueinternado_e">Si</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_fueinternado_e" name="fueinternado_ultimos3años_est" value=0>
									<label class="form-label" for="no_fueinternado_e ">No</label>
								</div>
								<div class="col-7">
									<input type="text" class="form-control" id="porquefueinternado_est" name="porquefueinternado_est" placeholder="¿Por que?" maxlength="75">
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
									<input type="radio" id="yes_alergia_e" required name="tienealguntipo_alergia_est" value=1>
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
									<input type="text" class="form-control" id="manifestacionesalergia_est" name="manifestacionesalergia_est" placeholder="Manifestaciones" maxlength="75">
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-3.5">
									<label for="alergia_sedebe_est" class="col-form-label">La alergia se debe a</label>
								</div>
								<div class="col-7">
									<input type="text" class="form-control" id="alergia_sedebe_est" name="alergia_sedebe_est" placeholder="Motivo" maxlength="75">
								</div>
								&nbsp;&nbsp;

								<div class="col col-form-label">
									<input type="checkbox" class="form-check-input" id="alergia_nosabe_est" name="alergia_nosabe_est" value="1">
									<label class="form-check-label" for="alergia_nosabe_est" >No sabe</label>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col">
									¿Recibe tratamiento permanente?  &nbsp;&nbsp;
									<input type="radio" id="yes_tratamientoalergia_e" required name="recibe_tratamientopermanente_est" value=1>
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
									<input type="radio" id="yes_tratamiento_e" required name="recibe_tratamientomedico_est" value=1>
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
									<input type="text" class="form-control" id="especifique_tratamiento_est" name=especifique_tratamiento_est placeholder="Tratamiento" maxlength="50">
								</div>
							</div>

							<br>

							<div class="row">
								<div class="col-3.5 col-form-label">
									Quirúrgicos 
									&nbsp;&nbsp;
									<input type="radio" id="yes_tratamientoqui_e" required name="recibio_tratamientoquirurgico_est" value=1>
									<label class="form-label "for="yes_tratamientoqui_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_tratamientoqui_e" name="recibio_tratamientoquirurgico_est" value=0>
									<label class="form-label" for="no_tratamientoqui_e ">NO</label>
								</div>
								<div class="col-2">
									<input type="number" class="form-control" id="edad_tratamientoquirurgico" name="edad_tratamientoquirurgico" placeholder="Edad" min="0" max="99">
								</div>
								<div class="col-2.5 col-form-label">
									Tipo de cirugía
								</div>
								<div class="col">
									<input type="text" class="form-control" id="tipocirugia_est" name="tipocirugia_est" placeholder="Tipo" maxlength="75">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-7 col-form-label">
									¿Presenta alguna limitación física?
									&nbsp;&nbsp;
									<input type="radio" id="yes_limfisica_e" required name="presentalimitacion_fisica_est" value=1>
									<label class="form-label "for="yes_limfisica_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="no_limfisica_e" name="presentalimitacion_fisica_est" value=0>
									<label class="form-label" for="no_limfisica_e ">NO</label>
								</div>
								<div class="col-1.5 col-form-label">
									Aclaración
								</div>
								<div class="col">
									<input type="text" class="form-control" id="aclaralimitación_fisica_est" name="aclaralimitación_fisica_est" maxlength="50">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-3">
									<label for="otroproblemad_salud_est" class="col-form-label">¿Otros problemas de salud?</label>
								</div>
								<div class="col">
									<input type="text" class="form-control" id="otroproblemad_salud_est" name="otroproblemad_salud_est" placeholder="Problema" maxlength="100">
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
									<input type="radio" id="vacunacioncompleta" required name="calendariovacunas_est" value="VACUNACION COMPLETA">
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
									<input type="number" step="any" class="form-control" id="talla_est" required name="talla_est" placeholder="(En centímetros)" min="0" max="500.00">
								</div>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<div class="col-1.5">
									<label for="peso_est" class="col-form-label">Peso</label>
								</div>
								<div class="col">
									<input type="number" step="any" class="form-control" id="peso_est" required  name="peso_est" placeholder="Kgrs. (con 1 décimo)" min="0" max="500.00">
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-4"><label for="fechadeterminacion_est" class="col-form-label">Fecha de la determinación</label></div>
								<div class="col-6">
									<input type="date" class="form-control" id="fechadeterminacion_est" required name="fechadeterminacion_est" value="2020-01-01">
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
									<input type="text" class="form-control" id="recurrir_institucion_est" name="recurrir_institucion_est" placeholder="Nombre de la Institución" placeholder="75">
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-4 "></div>

								<div class="col">
									<input type="text" class="form-control" id="recurrir_domicilio_est" name="recurrir_domicilio_est" placeholder="Domicilio" placeholder="75">
								</div>
								<div class="col">
									<input type="text" class="form-control" id="recurrir_telefono_est" name="recurrir_telefono_est" placeholder="Teléfono" placeholder="25">
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
									<input type="text" class="form-control" id="medico_apellido" name="medico_apellido" placeholder="Apellido/s" placeholder="50">
								</div>
								<div class="col">
									<input type="text" class="form-control" id="medico_nombre" name="medico_nombre" placeholder="Nombre/s" placeholder="50">
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-2"></div>

								<div class="col">
									<input type="text" class="form-control" id="medico_domicilio" name="medico_domicilio" placeholder="Domicilio" placeholder="75">
								</div>
								<div class="col">
									<input type="text" class="form-control" id="medico_telefono" name="medico_telefono" placeholder="Teléfono" placeholder="25">
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
									<input type="text" class="form-control" id="familiar_apellido" required name="familiar_apellido" placeholder="Apellido/s" placeholder="50">
								</div>
								<div class="col">
									<input type="text" class="form-control" id="familiar_nombre" required name="familiar_nombre" placeholder="Nombre/s" placeholder="50">
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-2"></div>

								<div class="col">
									<input type="text" class="form-control" id="familiar_domicilio" required name="familiar_domicilio" placeholder="Domicilio" placeholder="75">
								</div>
								<div class="col">
									<input type="text" class="form-control" id="familiar_telefono" required name="familiar_telefono" placeholder="Teléfono" placeholder="25">
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
									<input type="date" class="form-control" id="fecha_actualizacion_est" name="fecha_actualizacion_est">
								</div>
								<div class="col col-form-label">
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

								<input type="text" class="form-control" id="actualizacioncambios_describa_est" name="actualizacioncambios_describa_est" placeholder="Describa los cambios de salud del alumno" maxlength="100">
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="container-fluid">
							<div class="row">
								<div class="col-3.5">
									<label for="B_fecha_actualizacion_est" class="col-form-label">Fecha de la determinación</label>
								</div>
								<div class="col-5">
									<input type="date" class="form-control" id="B_fecha_actualizacion_est" name="B_fecha_actualizacion_est">
								</div>
								<div class="col col-form-label">
									Anual
									&nbsp;&nbsp;
									<input type="radio" id="B_yes_anual_e" name="B_actualizacion_anual_est" value=1>
									<label class="form-label "for="yes_anual_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="B_no_anual_e" name="B_actualizacion_anual_est" value=0>
									<label class="form-label" for="no_anual_e ">NO</label>
								</div>

							</div>
							<br/>
							<div class="row">
								<div class="col">
									¿Hay cambios?
									&nbsp;&nbsp;
									<input type="radio" id="B_yes_cambios_e" name="B_actualizacion_cambios_est" value=1>
									<label class="form-label "for="yes_cambios_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="B_no_cambios_e" name="B_actualizacion_cambios_est" value=0>
									<label class="form-label" for="no_cambios_e ">NO</label>
								</div>

								<input type="text" class="form-control" id="B_actualizacioncambios_describa_est" name="B_actualizacioncambios_describa_est" placeholder="Describa los cambios de salud del alumno" maxlength="100">
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="container-fluid">
							<div class="row">
								<div class="col-3.5">
									<label for="C_fecha_actualizacion_est" class="col-form-label">Fecha de la determinación</label>
								</div>
								<div class="col-5">
									<input type="date" class="form-control" id="C_fecha_actualizacion_est" name="C_fecha_actualizacion_est">
								</div>
								<div class="col col-form-label">
									Anual
									&nbsp;&nbsp;
									<input type="radio" id="C_yes_anual_e" name="C_actualizacion_anual_est" value=1>
									<label class="form-label "for="yes_anual_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="C_no_anual_e" name="C_actualizacion_anual_est" value=0>
									<label class="form-label" for="no_anual_e ">NO</label>
								</div>

							</div>
							<br/>
							<div class="row">
								<div class="col">
									¿Hay cambios?
									&nbsp;&nbsp;
									<input type="radio" id="C_yes_cambios_e" name="C_actualizacion_cambios_est" value=1>
									<label class="form-label "for="yes_cambios_e">SI</label>
									&nbsp;&nbsp;
									<input type="radio" id="C_no_cambios_e" name="C_actualizacion_cambios_est" value=0>
									<label class="form-label" for="no_cambios_e ">NO</label>
								</div>

								<input type="text" class="form-control" id="C_actualizacioncambios_describa_est" name="C_actualizacioncambios_describa_est" placeholder="Describa los cambios de salud del alumno" maxlength="100">
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="ml-auto text-center">
			<input type="submit" value="Enviar" class="btn btn-primary form-control w-75">
		</div>
	</form>
@endsection
