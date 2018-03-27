@extends('layout.system')

@section('titulo', 'Lista Visitante')

@section('corpo')
<div class="container">
  <h3 class="center">Adicionar Visitantes</h3>
	<form action="{{route('admin.visitante.salvar')}}" method="POST" enctype="multipaart/form-data">
		{{csrf_field()}}
		@include('admin.visitante._form')

		<div class="center">
			<button class="btn green">Enviar</button>	
		</div>
	</form>       

</div>


@endsection