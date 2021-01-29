<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title> @yield('title') - {{ config('app.name', 'EEST Nº2 "Educación y Trabajo') }}</title>
	<link rel="icon" href="{{ asset('images/icon.ico') }}"/>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<style>
		html, body {
			background-color: #fff;
			/* color: #636b6f; */
			font-family: 'Nunito', sans-serif;
			font-weight: 200;
			height: 100vh;
			margin: 0;
		}

		.top {
			margin-top: 30px;
		}

		.full-height {
			height: 100vh;
		}

		.flex-center {
			align-items: center;
			display: flex;
			justify-content: center;
		}

		.position-ref {
			position: relative;
		}

		.top-right {
			position: absolute;
			right: 10px;
			top: 18px;
		}

		.content {
			text-align: center;
		}

		.title {
			font-size: 20px;
		}
		
		.title2 {
			font-size: 40px;
		}

		.title3 {
			margin-bottom:30px;
			font-size: 10px;
		}

		.title4 {
			font-size: 13px;
		}

		.links > a {
			color: #636b6f;
			padding: 0 25px;
			font-size: 10px;
			font-weight: 600;
			letter-spacing: .1rem;
			text-decoration: none;
			text-transform: uppercase;
			transition: color 0.5s;
		}

		.links > a:hover{
			color: #499eff;
		}

		.links > .hover-link{
			color: #499eff;
		}

		.m-b-md {
			margin-bottom: 30px;
		}

		.imagencabecera {
			float: center;
			width: 100px;
		}

		.center {
			text-align: center;
		}

		.table-form {
			width: 1200px;
			margin: 0 auto;
			margin-bottom: 100px;
		}

		/* ESCONDER LOS BOTONES DEL INPUT NUMERICO */
		/* Chrome, Safari, Edge, Opera */
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		/* Firefox */
		input[type=number] {
			-moz-appearance: textfield;
		}
	</style>
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					Inicio
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav ml-auto links">
						<li class="nav-item">
							<a class="nav-link" href="https://tecnica2mardel.wordpress.com/">Nuestra escuela</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://www.facebook.com/tecnica2mardel">Facebook</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://www.youtube.com/watch?v=G7ZmFxOhLog">Video EEST Nº2 </a>
						</li>
						<li class="nav-item{{ (request()->routeIs('equipo')) ? ' active' : '' }}">
							<a class="nav-link" href="/equipo">Equipo de Gestión</a>
						</li>
					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						@guest
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
							</li>
							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
								</li>
							@endif
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

									<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
										{{ __('Salir') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>

		<main>
			@yield('content')
		</main>
	</div>
</body>
</html>
