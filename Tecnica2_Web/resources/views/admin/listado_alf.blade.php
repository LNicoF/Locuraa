@extends('layouts.app')

@section('title', 'LISTADO DE PREINSCRIPTOS ALFABETICOS')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Lista de alumnos inscriptos - Ordenada Alfabeticamente</span>
                </div>

                <div class="card-body">      
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="Año" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Año
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('preincriptos_alfabetico') }}">Todos los Años</a>
                                      <a class="dropdown-item" href="{{ route('preincriptos_alfabetico', 1) }}">Primer Año</a>
                                      <a class="dropdown-item" href="{{ route('preincriptos_alfabetico', 2) }}">Segundo Año</a>
                                      <a class="dropdown-item" href="{{ route('preincriptos_alfabetico', 3) }}">Tercer Año</a>
                                      <a class="dropdown-item" href="{{ route('preincriptos_alfabetico', 4) }}">Cuarto Año</a>
                                      <a class="dropdown-item" href="{{ route('preincriptos_alfabetico', 5) }}">Quinto Año</a>
                                      <a class="dropdown-item" href="{{ route('preincriptos_alfabetico', 6) }}">Sexto Año</a>
                                      <a class="dropdown-item" href="{{ route('preincriptos_alfabetico', 7) }}">Septimo Año</a>
                                    </div>
                                  </div>
                            </th>

                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Número de Documento</th>
                            <th scope="col">Información</th>
                            <th scope="col">Impresión</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumnos as $item)
                            <tr>
                                <td>{{ $item->anio_insc }}</td>
                                <td>{{ $item->apell_e }} {{  $item->nomb_e }}</td>
                                <td>{{ $item->nrodocument_e }}</td>
                                <td>
                                    <a href="{{ route('preinscriptos.completo', $item->id_alumno) }}" class="btn btn-primary btn-sm">Total Ingresada</a>
                                </td>
                                <td>
                                    @foreach($responsables as $item2)
                                        @foreach($info_salud as $item3)
                                            @if(($item2->id_alumno == $item->id_alumno)  && ($item3->id_alumno == $item->id_alumno))<a href="{{ route('preinscriptos.adicional', $item->id_alumno) }}" class="btn btn-success btn-sm float-right" role="button">✔️</a>@endif
                                        @endforeach
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection