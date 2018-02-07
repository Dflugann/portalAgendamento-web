<!DOCTYPE html>
<html>
	<head>
		<title>@yield('titulo')</title>
		<meta name="description" content="Group Digital - Agendamento Web">
		<meta name="keywords" content="keywords">
		<meta name="author" content="Flávio Santos">

		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	</head>
	<body>
		<!-- <nav>
			<div class="nav-wrapper green">
				<a href="#!" class="brand-logo"><img src="{{ asset('img/logo-gdigital.png') }}" alt=""> </a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="/">Home</a></li>
						@if(Auth::guest())
						@else
						<li><a href="{{route('admin.condomino')}}">Lista Condomino</a></li>
						<li><a href="{{route('admin.visitante')}}">Lista Visitante</a></li>
						<li>
							<a href="{{route('site.login.sair')}}">
								<i class="material-icons prefix">clear</i>
							</a>
						</li>
						@endif
					</ul>

					<ul class="side-nav" id="mobile-demo">
						<li><a href="/">Home</a></li>
						@if(Auth::guest())
						@else
						<li><a href="{{route('admin.condomino')}}">Lista Condomino</a></li>
						<li><a href="{{route('admin.visitante')}}">Lista Visitante</a></li>
						<li>
							<a href="{{route('site.login.sair')}}">
								Sair
							</a>
						</li>
						@endif
					</ul>
			</div>
		</nav> -->
<div class="nav-wrapper grey darken-2">
		<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="font-size:30px;color:#fff">menu</i></a>
			<div class="row">
				<div class="col s8 m8 l8">
					<div class="center">
						<a href="#!" class="brand-logo"><img src="{{ asset('img/logo-groupdigital.png') }}" alt=""> </a>
					</div>
				</div>
			</div>
			<div class="col s12 m4 l4 pull-l5">
				<h2 class="center" style="margin:-20px; font-size:20px; line-height:1.4em;">
					<span style="font-size:12px;">
						<span class="green-text">
							<span style="font-family:open sans,sans-serif;"><strong>Digital Control, ARM Informática e Group Tech</strong></span>
						</span>
					</span>
				</h2>
			</div>

		<ul id="slide-out" class="side-nav">
    <li>
			<div class="user-view">
      	<div class="background"><img width="100%" src="{{ asset('img/fundo-gdigital.gif') }}"></div>
				<div class="row">
					<img width="100%" src="{{ asset('img/logo-gdigital.gif') }}">
				</div>
      	<!-- <a href="#!name"><span class="white-text name">John Doe</span></a>
      	<a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a> -->
    	</div>
		</li>
			<li><a href="/" class="z-depth-1"><i class="material-icons" style="color: green">home</i> Home</a></li>
			@if(Auth::guest())
			@else
			<li><a href="{{route('admin.condomino')}}"><i class="material-icons" style="color: green">list</i>Lista Condomino</a></li>
			<li><a href="{{route('admin.visitante')}}"><i class="material-icons" style="color: green">list</i>Lista Visitante</a></li>
			<li>
				<a href="{{route('site.login.sair')}}">
					<i class="material-icons prefix" style="color:red">clear</i>Sair
				</a>
			</li>
			@endif
  </ul>
</div>
<!--
<ul class="side-nav" id="mobile-demo">
	<li><a href="/">Home</a></li>
	@if(Auth::guest())
	@else
	<li><a href="{{route('admin.condomino')}}">Lista Condomino</a></li>
	<li><a href="{{route('admin.visitante')}}">Lista Visitante</a></li>
	<li>
		<a href="{{route('site.login.sair')}}">
			Sair
		</a>
	</li>
	@endif
</ul> -->
