@extends('layouts.app')

@section('title', 'Módulos')

@section('content')

	<br><br>
	<div align="center" class="font-weight-bold"> 
		Los módulos de ingreso serán trabajados durante el primer período de 1er año por los docentes de Prácticas del Lenguajes y de Matemática.
		<br>
		Los estudiantes deben tenerlos resueltos para el momento de inicio de clases, donde podrán despejar las dudas que hayan surgido con sus docentes 
	</div>
	<br><br>

	<div class="mx-auto w-25 list-group center">
		<a class="list-group-item list-group-item-action" target="_blank" href="{{ asset('modulos/Mate.pdf') }}">
			Módulo de Matemáteca
		</a>
		<a class="list-group-item list-group-item-action" target="_blank" href="{{ asset('modulos/RESPUESTAS.pdf') }}">
			Respuestas de Matemática
		</a>
		<a class="list-group-item list-group-item-action" target="_blank" href="{{ asset('modulos/Lengua.pdf') }}">
			Módulo de Prácticas del Lenguaje
		</a>
	</div>
		
@endsection