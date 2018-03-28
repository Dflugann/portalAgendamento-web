@extends('layout.system')

@section('titulo', 'Editar Visitante')

@section('corpo')
<div class="container">
  <h3 class="center">Editar Visitantes</h3>
	<form action="{{route('visita.update', $registro->id)}}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="put">
		@include('admin.visitante._form')

		<div class="center">
			<button class="btn green">Enviar</button>	
		</div>
	</form>       

</div>


@endsection