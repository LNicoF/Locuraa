@extends('layouts.template')

@section('title', 'Preinscripción - Completa')

@section('contenido')
    <input type="hidden" name="form_section" value=3>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Felicitaciones!</strong> El alumno se ha preinscripto correctamente.
    </div>
    <div class="title1 m-b-md top">
        <nav class="links">
            <a href="{{ route('welcome') }}">VOLVER A LA PANTALLA DE INICIO</a>
        </nav>
    </div>

@endsection
