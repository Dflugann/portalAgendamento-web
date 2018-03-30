@extends('layout.system')

@section('titulo', 'Detalhes Agenda')

@section('corpo')
	<div class="container">
		<h3 class="center">Detalhes Agenda</h3>
			@include('admin.agenda._form')
	</div>


@endsection