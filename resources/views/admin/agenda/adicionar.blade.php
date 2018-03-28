@extends('layout.system')

@section('titulo', 'Adicionar Agenda')

@section('corpo')
<div class="container">
	<h3 class="center">Adicionar Agenda</h3>
	<div class="row">
		<form action="{{route('agenda.store')}}" method="post">
			{{csrf_field()}}

			@include('admin.agenda._form')

			<div class="center">
				<button class="btn green">Enviar</button>
			</div>			
		</form>
	</div>
</div>


@endsection