<div class="left-align"><small class="cyan-text text-darken-2">Dados Pessoais</small></div>
<div class = "row" style="background: #e0e0e0; border: 1px #000 solid;">
	<div class="input-field col s12 m3 l3">
	     @if(isset($registro->imagem))
	      <div class="input-field">
	        <img width="100" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}">
	      </div>
	     @endif
	</div>

	<div class="input-field col s12 m3 l3">
			<input disabled="disabled" name="nome" type="text" class="input-field" value="{{isset($registro->nome) ? $registro->nome : ''}}"/>	
			<label>Nome</label>              
	</div>

	<div class="input-field col s12 m3 l3">
			<input disabled="disabled" name="cpf" type="text" class="input-field" value="{{isset($registro->cpf) ? $registro->cpf : ''}}"/>	
			<label>Cpf</label>              
	</div>

	<div class="row">
		<div class="input-field col s12 m4 l4'">
		   <input disabled="disabled" name="email" type="email" value="{{isset($registro->email) ? $registro->email : ''}}">
		   <label for="email">Email</label>
		</div>
		<div class="input-field col s12 m3 l3">
			<input disabled="disabled" name="phone" type="tel" class="input-field" value="{{isset($registro->phone) ? $registro->phone : ''}}"/>
			<label>Fone</label>              
		</div>
	</div>
</div>

<div class="left-align"><small class="green-text text-darken-2">Dados do Veiculo</small></div>
<div class = "row">
	<div class="input-field col s12 m3 l3">
		<input name="marca" type="text" class="input-field" value="{{isset($registro->marca) ? $registro->marca : ''}}"/>	
		<label>Marca</label>              
	</div>

	<div class="input-field col s12 m3 l3">
		<input name="modelo" type="text" class="input-field" value="{{isset($registro->modelo) ? $registro->modelo : ''}}"/>	
		<label>Modelo</label>              
	</div>

	<div class="input-field col s12 m3 l3">
		<input name="placa" type="text" class="input-field" value="{{isset($registro->placa) ? $registro->placa : ''}}"/>	
		<label>Placa</label>              
	</div>

	<div class="input-field col s12 m3 l3">
		<input name="cor" type="text" class="input-field" value="{{isset($registro->cor) ? $registro->cor : ''}}"/>	
		<label>Cor</label>              
	</div>
</div>
<div class="left-align"><small class="red-text text-darken-2">Agendamento</small></div>
<br>
<div class="row">
	<div class="col s12 m2 l2">
		<label>Data</label>
		<input name="date" type="text" class="datepicker" value="{{isset($registro->date) ? $registro->date : ''}}">
	</div>
	<div class="col s12 m2 l2">
		<label>hora Entrada</label>              
		<input name="starttime" type="text" class="timepicker" value="{{isset($registro->starttime) ? $registro->starttime : ''}}">
	</div>
	<div class="col s12 m2 l2">
		<label>hora Saida</label>              
		<input name="endtime" type="text" class="timepicker" value="{{isset($registro->endtime) ? $registro->endtime : ''}}">
	</div>
	
	
</div>

<div class="row">
	<p>
		<input type="checkbox" class="filled-in col s12 m2 l2" id="filled-in-box" value="true" name="sautorizacao" value="{{isset($registro->sautorizacao) ? $registro->sautorizacao: ''}}"/>
		<label for="filled-in-box">Solicitar Autorização</label>					
	</p>
	<p>
        <input id = "married" type = "checkbox"  class="filled-in" value="true" name="vmorador" value="{{isset($registro->vmorador) ? $registro->vmorador : ''}}"/>
        <label for = "married">Validando com Morador</label>
     </p>
</div>