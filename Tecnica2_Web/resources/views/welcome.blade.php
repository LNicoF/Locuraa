@extends('layouts.template')

@section('title', 'Inicio')

@section('contenido')
	
	@guest {{-- SIN LOGUEAR --}}
		
		<div class="top" aria-label="breadcrumb">
			<br>
				<nav class="links"><a href="{{ route('register') }}">Familias registrarse para dar inicio al registro de aspirantes para el ingreso 2021</a></nav>
			<br>
			
		</div>

	@else {{-- LOGUEADO --}}

		@if (Auth::user()->id_rol == 1) {{-- ADMINISTRADOR --}}

			<div class="title1 m-b-md top">
				<nav class="links">
					<a href={{ route('preincriptos') }}>LISTADO DE PREINSCRIPTOS</a>
					|
					<a href={{ route('preincriptos_alfabetico') }}>LISTADO ALFABÉTICO DE INSCIPTOS POR AÑO</a>
				</nav>
			</div>
			
		@else {{-- FAMILIA --}}
			@yield('registrado')
			<div class="title1 m-b-md top">
				<nav class="links">
					<a href="{{ route('alumno.create') }}">CARGAR ESTUDIANTE</a>
					|
					<a href="{{ route('alumno.index') }}">MODIFICAR DATOS</a>
					|
					<a href="{{ url('/alumno/modulos') }}">MÓDULOS DE INGRESO</a>
				</nav>
			</div>

		@endif

	@endguest

@endsection
