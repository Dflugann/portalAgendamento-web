@extends('layout.system')

@section('titulo', 'Lista de Usuários')

@section('corpo')
<div class="container">
	<h2 class="center">Lista de Usuários</h2>
	<div class="row">
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Acao</th>
				</tr>
			</thead>
		
			<tbody>
				@foreach($usuarios as $usuario)
				<tr>
					<td>{{$usuario->id}}</td>
					<td>{{$usuario->name}}</td>
					<td>{{$usuario->email}}</td>
					<td>
						<a href=""><i class="material-icons">lock_outline</i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</div>

@endsection