<div class="left-align"><small class="cyan-text text-darken-2"><strong>Dados Pessoais</strong></small></div>
<div class = "row" style="background: #e0e0e0; border: 1px #000 solid;">
	<div class="input-field col s12 m2 l2">
	     @if(isset($registro_visitante->imagem))
	    <div class="input-field">
	        <img width="130" src="{{asset($registro_visitante->imagem)}}" alt="{{$registro_visitante->titulo}}">
	    </div>
	    <input type="hidden" name="id_visitante" value="{{$registro_visitante->id}}">
		<input type="hidden" name="id_auth" value="{{$registro_visitante->id_auth}}">
	     @endif
	</div>
	

	<div class="input-field col s12 m3 l3">
			<input disabled="disabled" name="nome" type="text" class="input-field" value="{{isset($registro_visitante->nome) ? $registro_visitante->nome : ''}}"/>	
			<label>Nome</label>              
	</div>

	<div class="input-field col s12 m3 l3">
			<input disabled="disabled" name="cpf" type="text" class="input-field" value="{{isset($registro_visitante->cpf) ? $registro_visitante->cpf : ''}}"/>	
			<label>Cpf</label>              
	</div>

	<div class="row">
		<div class="input-field col s12 m4 l4">
		   <input disabled="disabled" name="email" type="email" value="{{isset($registro_visitante->email) ? $registro_visitante->email : ''}}">
		   <label for="email">Email</label>
		</div>
		<div class="input-field col s12 m3 l3">
			<input disabled="disabled" name="phone" type="tel" class="input-field" value="{{isset($registro_visitante->phone) ? $registro_visitante->phone : ''}}"/>
			<label>Fone</label>              
		</div>
		<div class="input-field col s12 m3 l3">
		   <input disabled="disabled" name="empresa" type="text" value="{{isset($registro_visitante->empresa) ? $registro_visitante->empresa : ''}}">
		   <label for="email">Empresa</label>
		</div>
		<div class="input-field col s12 m3 l3">
			<input disabled="disabled" name="funcao" type="text" class="input-field" value="{{isset($registro_visitante->funcao) ? $registro_visitante->funcao : ''}}"/>
			<label>Função</label>              
		</div>
	</div>
</div>

<div class="left-align"><small class="green-text text-darken-2"><strong>Dados do Veiculo</strong></small></div>
<div class = "row" style="{{isset($registro) ? 'background: #e0e0e0; border: 1px #000 solid;' : '' }}">
	<div class="input-field col s12 m3 l3">
		<input name="marca" type="text" class="input-field" value="{{isset($registro->marca) ? $registro->marca : ''}}" {{isset($registro->marca) ? 'disabled' : ''}} />
		<label>Marca</label>              
	</div>

	<div class="input-field col s12 m3 l3">
		<input name="modelo" type="text" class="input-field" value="{{isset($registro->modelo) ? $registro->modelo : ''}}" {{isset($registro->modelo) ? 'disabled' : ''}}/>	
		<label>Modelo</label>              
	</div>

	<div class="input-field col s12 m3 l3">
		<input name="placa" type="text" class="input-field" value="{{isset($registro->placa) ? $registro->placa : ''}}" {{isset($registro->placa) ? 'disabled' : ''}} />
		<label>Placa</label>              
	</div>

	<div class="input-field col s12 m3 l3">
		<input name="cor" type="text" class="input-field" value="{{isset($registro->cor) ? $registro->cor : ''}}" {{isset($registro->cor) ? 'disabled' : ''}} />
		<label>Cor</label>              
	</div>
</div>
<div class="left-align"><small class="red-text text-darken-2"><strong>Agendamento</strong></small></div>
<div class="row" style="{{isset($registro) ? 'background: #e0e0e0; border: 1px #000 solid;' : '' }}">
	
		<div class="col s12 m3 l3">
			@if(isset($registro->date))
			<label>Data</label>
			<p style="color: red;">
				<?php 
				setlocale(LC_ALL, 'pt_BR');
				date_default_timezone_set('America/Sao_Paulo');
				echo utf8_encode($registro->date = strftime('%A, %d de %B de %Y', strtotime($registro->date)))?>	
			</p>

			@else
			<label>Data</label>
			<input name="date" type="text" class="datepicker" value="{{isset($registro->date) ? $registro->date : ''}}" {{isset($registro->date) ? 'disabled' : ''}} />
			@endif

		</div>
		<div class="col s12 m3 l3">
			<label>hora Entrada</label>              
			<input name="starttime" type="text" class="timepicker" value="{{isset($registro->starttime) ? $registro->starttime : ''}}" {{isset($registro->starttime) ? 'disabled' : ''}} />
		</div>
		<div class="col s12 m3 l3">
			<label>hora Saida</label>              
			<input name="endtime" type="text" class="timepicker" value="{{isset($registro->endtime) ? $registro->endtime : ''}}" {{isset($registro->endtime) ? 'disabled' : ''}} />
		</div>
	@if(isset($registro))
	@else
	<div class="col s12 m3 l3">
		<input type="checkbox" class="filled-in col s12 m2 l2" id="filled-in-box" value="true" name="sautorizacao" value="{{isset($registro->sautorizacao) ? $registro->sautorizacao: ''}}" {{isset($registro->sautorizacao) ? 'disabled' : ''}} />
		<label for="filled-in-box">Solicitar Autorização</label>					
	</div>
	<div class="col s12 m3 l3">
		<input id = "married" type = "checkbox"  class="filled-in" value="true" name="vmorador" value="{{isset($registro->vmorador) ? $registro->vmorador : ''}}" {{isset($registro->vmorador) ? 'disabled' : ''}} />
        <label for = "married">Validando com Morador</label>
	</div>	
	@endif	
</div>
@if(isset($registro))
<div class="left-align"><small class="black-text text-darken-4"><strong>Morador</strong></small></div>
<div class="row" style="{{isset($registro) ? 'background: #e0e0e0; border: 1px #000 solid;' : '' }}">	
		<div class="col s12 m3 l3">
			<label>Nome</label>
			<input name="date" type="text" class="input-field center" value="{{isset($registro->nome_auth) ? $registro->nome_auth : ''}}" {{isset($registro->date) ? 'disabled' : ''}} />
		</div>
		<div class="col s12 m3 l3">
			<label>Empreendimento</label>              
			<input name="empreendimento" type="text" class="input-field" value="" {{isset($registro->starttime) ? 'disabled' : ''}} />
		</div>
		<div class="col s12 m3 l3">
			<label>Imovel</label>              
			<input name="imovel" type="text" class="input-field" value="" {{isset($registro->endtime) ? 'disabled' : ''}} />
		</div>
		<div class="col s12 m3 l3">
			<label>Fone</label>              
			<input name="Fone" type="text" class="input-field" value="" {{isset($registro->endtime) ? 'disabled' : ''}} />
		</div>
</div>
<div class="left-align">
	<a href="{{route('agenda.index')}}" class="waves-effect waves-teal btn-flat"><i class="material-icons left">chevron_left</i>Voltar</a>
</div>
@endif

