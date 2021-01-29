@extends('layouts.template')

@section('title', 'Listado de Alumnos')

@section('content')

	<br>
	<h3 class="font-weight-bold center">
		Alumnos inscriptos
	</h3>
	<br>

	<table class="table table-bordered table-sm container-fluid w-50 mx-auto">
		<thead class="thead-light">
			<tr class="">
				<th scope="col" class="center font-weight-bold">Año</th>
				<th scope="col" class="center font-weight-bold">Nombre</th>
				<th scope="col" class="center font-weight-bold">Documento</th>
				<th scope="col" class="center font-weight-bold" style="width: 115px">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($alumnos as $alumno)
				<tr> 
					<td>{{ $alumno->anio_insc }}</td>
					<td scope="row">{{ $alumno->nomb_e }}</td>
					<td>{{ ($alumno->estadodocumento_e != Null) ? $alumno->nrodocument_e : $alumno->estadodocumento_e }}</td>
					<td>
						<div class="btn-group">
							<a href="{{ route('alumno.edit', $alumno->id_alumno) }}" role="button" class="btn btn-primary btn-sm">Editar</a>
							<a href="{{ route('alumno.pdf', $alumno->id_alumno) }}" role="button" class="btn btn-warning btn-sm">PDF</a>

							<form method="POST" action="{{ route('alumno.destroy', $alumno->id_alumno) }}">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger btn-sm">Eliminar</button>
							</form>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection
