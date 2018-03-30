@extends('layout.system')

@section('titulo', 'Lista Agenda')

@section('corpo')

	<div class="container">
		<h3 class="center">
			Lista Agenda
		</h3>
		<div class="row">
			<table class="highlight centered ">
				<thead>
					<tr>
						<th>Data</th>
						<th>Hora/Entrada</th>
						<th>Hora/Saida</th>
						<th>Morador</th>
						<th>Visitante</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>

					@foreach($registros as $registro)

					<tr>
						
						<td style="color: red;">
							<?php 
							setlocale(LC_ALL, 'pt_BR');
							date_default_timezone_set('America/Sao_Paulo');
							echo utf8_encode($registro->date = strftime('%A, %d de %B de %Y', strtotime($registro->date)))?>	
						</td>

						<td>{{$registro->starttime}}</td>
						<td>{{$registro->endtime}}</td>
						<td>{{$registro->nome_auth}}</td>
						<td>{{$registro->nome_visitante}}</td>
						<td>
							<?php if ($registro->vmorador == 'sim'): ?>
			                <a href="{{route('usuario.show', $registro->id_auth)}}" class="tooltipped btn-floating btn-smail red pulse" data-position="bottom" data-delay="50" data-tooltip="Confirmar com morador">
			                  	<i class="material-icons" style="font-size:2rem; ">new_releases</i></a>							
							<?php else: ?>
							<a href="{{route('usuario.show', $registro->id_auth)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Autorizado pelo morador">
			                  	<i class="material-icons" style="font-size:2rem; color:green; ">new_releases</i></a>	
								
							<?php endif ?>
			                <a href="{{route('agenda.show', $registro->id)}}" class="tooltipped waves-effect modal-trigger" data-position="bottom" data-delay="50" data-tooltip="Detalhes">
			                	<i class="large material-icons" style="font-size:2rem">view_agenda</i></a>
			                <!--<a href="{{route('visita.deletar', $registro->id)}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deletar">
			            	    <i class="large material-icons" style="font-size:2rem">delete_forever</i></a>-->
			            </td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="left-align">
				<a href="{{route('visita.index')}}" class="waves-effect waves-teal btn-light btn"><i class="material-icons left">chevron_left</i>Voltar</a>
			</div>
		</div>
	</div>					
	

@endsection