@extends('layout.system')

@section('titulo', 'QRcode')

@section('corpo')
<div class="container">
	<h4 class="center">
		<strong>Visitante</strong> <br><small>{{$visitante->nome}} {{$visitante->sobrenome}}</small> 
	</h4>
	<div class="center-align">
		<img width="50" class="circle responsive-img" src="/public/{{$visitante->imagem}}" >	
	</div>
	
	<div class="col s12 m12 l12">
		<div class="center-align">
			<img class="responsive-img" src="/public/{{$qrcode->imagem}}" />	
		</div>	
	</div>
	<div class="center-align">
		<a href="{{route('agenda.index')}}" class="btn blue">Voltar</a>	
	</div>	
</div>


@endsection