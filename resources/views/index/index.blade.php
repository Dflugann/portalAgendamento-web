@extends('layout.system')

@section('titulo','Index')

@section('corpo')	
<h3>Teste INDEX VIEWS</h3>

	@foreach($data as $dados)
		<p>{{$dados->nome}}</p>
		<p>{{$dados->tel}}</p>
	@endforeach
@endsenction

