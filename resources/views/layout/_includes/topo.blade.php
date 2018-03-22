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
		<link rel="stylesheet" href="{{asset('/css/style.css')}}">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	</head>
	<body>

<!-- COLOQUE A DIV "loading" ACIMA DE TODO O CONTEUDO DO SITE (ABAIXO DA <body>) -->


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
			<div class="row" style="margin-bottom: 0px;">
				<div class="col s8 m11 l11">
					<div class="center">
						<a href="#!" class="brand-logo"><img src="{{ asset('img/logo-groupdigital.png') }}" alt=""> </a>
					</div>
				</div>
				<div class="col s12 m8 l8 push-l4">
					<span class="green-text">
						<strong class="center-align">Digital Control, ARM Informática e Group Tech</strong>
					</span>
				</div>
				<div class="right-align">
					<div class="col s12 m5 l5 ">
						<h5>
							<strong class="center-align" style="color:#E0E0E0">Excelência em</strong>
							<strong class="center-align" style="color:#99E271"> em Controle de Acesso</strong>
						</h5>
					</div>
					<div class="col s12 m5 l5 ">
						<h5>
							<strong style="color:#99E271"><i class="material-icons">phone</i> (11) 3031-9142</strong>
						</h5>
					</div>
				</div>
			</div>

		<ul id="slide-out" class="side-nav">
    <li>
			<!-- <div class="center">
				@if(Auth::guest()) @else <smail><strong>Olá </strong>{{Auth::user()->name}} @endif</smail>
			</div> -->
			<div class="user-view" style="padding: 0px 10px 0;">
      	<div class="background">
					<img width="100%" src="{{ asset('img/fundo-gdigital.gif') }}"></div>
					<img width="100%" src="{{ asset('img/logo-gdigital.gif') }}">
      	<!-- <a href="#!name"><span class="white-text name">John Doe</span></a>
      	<a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a> -->
    	</div>
		</li>
			<li><a href="{{route('admin.home')}}" class="z-depth-1"><i class="material-icons" style="color: green">home</i> Home</a></li>
			@if(Auth::guest())
			<li>
				<a href="#" class="tooltipped" data-position="bottom" data-delay="100" data-tooltip="Quem Somos"><i class="material-icons" style="color: #5b5b5d">fingerprint</i>Empresa</a>
				<a href="#" class="tooltipped" data-position="bottom" data-delay="100" data-tooltip="Nossos Serviços"><i class="material-icons" style="color: #5b5b5d">fingerprint</i>Serviços</a>
				<a href="#" class="tooltipped" data-position="bottom" data-delay="100" data-tooltip="Principais Clientes"><i class="material-icons" style="color: #5b5b5d">fingerprint</i>Cliantes</a>
				<a href="#" class="tooltipped" data-position="bottom" data-delay="100" data-tooltip="Fale Conosco"><i class="material-icons" style="color: #5b5b5d">fingerprint</i>Contato</a>
			</li>

			@else
			<li>
				<a href="{{route('usuario.create')}}" class="tooltipped" data-position="bottom" data-delay="100" data-tooltip="Novo Usuário"><i class="material-icons" style="color: #7b1fa2">person_add</i> Usuarios</a>
			</li>
			<li>
				<a href="{{route('admin.supervisor.adicionar')}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Novo Empreendimento"><i class="material-icons" style="color: #2196f3">person_add</i> Empreendimento</a>
			</li>
			<li>
				<a href="{{route('admin.operador.adicionar')}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Novo Imóveis"><i class="material-icons" style="color: #4caf50">person_add</i> Imóveis</a>
			</li>
			<li>
				<a href="{{route('admin.visitante.adicionar')}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Novo Papel"><i class="material-icons" style="color: #e65100">person_add</i> Papeis</a>
			</li>
			<hr>
			<li>
				<a href="{{route('admin.apartamento.adicionar')}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Adicionar Apartamento"><i class="material-icons" style="color: #26a69a">location_city</i> Apartamento</a>
			</li>
			<li>
				<a href="{{route('admin.empreendimento.adicionar')}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Adicionar Empreendimento"><i class="material-icons" style="color: #1B5E20">domain</i> Empreendimento</a>
			</li>
			<hr>
			<li><a href="{{route('admin.administrador')}}"><i class="material-icons" style="color: green">list</i>Lista Administradores</a></li>
			<li><a href="{{route('admin.apartamento')}}"><i class="material-icons" style="color: green">list</i>Lista Apartamentos</a></li>
			<li><a href="{{route('admin.empreendimento')}}"><i class="material-icons" style="color: green">list</i>Lista Empreendimento</a></li>
			<li><a href="{{route('admin.operador')}}"><i class="material-icons" style="color: green">list</i>Lista Operador</a></li>
			<li><a href="{{route('admin.visitante')}}"><i class="material-icons" style="color: green">list</i>Lista Visitante</a></li>
			<li>
				<a href="{{route('site.login.sair')}}">
					<i class="material-icons prefix" style="color:red">clear</i>Sair
				</a>
			</li>
			@endif
  </ul>
</div>
<!--start LOAD-->
		<div class="col s12 m12 l12 center" >
			<div id="loading" style="display: block">
				<div class="preloader-wrapper big active">
					<div class="spinner-layer spinner-green-only">
						<div class="circle-clipper left">
							<div class="circle"></div>
						</div><div class="gap-patch">
							<div class="circle"></div>
						</div><div class="circle-clipper right">
							<div class="circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--end LOAD-->
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
