@extends('layout.system')

@section('titulo', 'Lista de Usuários')

@section('corpo')
<div class="container">
	<h2 class="center">Lista de Usuários</h2>
	
	@include('admin._caminho')

	<div class="row">
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>Telefone</th>
					<th>E-mail</th>
					<th>Usuário</th>
					<th>Status</th>					
					<th>Foto</th>					
					<th>Acao</th>
				</tr>
			</thead>
		
			<tbody>
				@foreach($usuarios as $usuario)
				<tr>
					<td>{{$usuario->id}}</td>
					<td>{{$usuario->name}}</td>
					<td>{{$usuario->phone}}</td>
					<td>{{$usuario->email}}</td>
					<td>{{$usuario->user}}</td>
					@if(($usuario->status == 'sim'))
					<td style="color: green">{{$usuario->status}}</td>
					@else
					<td style="color: red">{{$usuario->status}}</td>
					@endif
					<td><img class="responsive-img" width="50" height="50" src="../{{$usuario->imagem}}"></td>
					<td>
					
					<!--<a href="{{route('usuario.edit',$usuario->id)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar">
					<i class="material-icons" style="font-size:2rem">create</i></a>-->

					<a href="{{route('usuario.permissao',$usuario->id)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Permissões">
					<i class="material-icons" style="font-size:2rem">lock_outline</i></a>

					<!--<a href="{{route('usuario.deletar', $usuario->id)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deletar">
                    <i class="large material-icons" style="font-size:2rem">delete_forever</i></a>-->

					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<a id="scale-demo" href="{{route('usuario.create')}}" class="btn-floating btn-large scale-transition tooltipped" data-position="bottom" data-delay="50" data-tooltip="Adicionar Usuário">
                <i class="material-icons">add</i>
              </a>
	</div>

</div>

@endsection