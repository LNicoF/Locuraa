@extends('layouts.app')

@section('content')
	
	<div class="flex-center position-ref full-height">
				
		<div class="content">
			<img src="{{asset('images/logo.jpg')}}" class="imagencabecera">
			
			<div class="title m-b-md top">
				EEST Nº2 "Educación y Trabajo"
			</div>
			
			{{-- <div class="links m-b-md">
				@yield('links') 
			</div> --}}
			
			@yield('contenido')
		</div>
	</div>

@endsection
