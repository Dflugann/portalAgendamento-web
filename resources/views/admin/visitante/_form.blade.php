<div class="left-align"><small class="cyan-text text-darken-2">Dados Pessoais</small></div>
<div class = "row">
	<div class="input-field col s12 m3 l3">
		<input name="nome" type="text" class="input-field" />	
		<label>Nome</label>              
	</div>

	<div class="input-field col s12 m3 l3">
		<input name="sobrenome" type="text" class="input-field" />	
		<label>Sobrenome</label>              
	</div>

	<div class="input-field col s12 m3 l3">
		<input name="rg" type="text" class="input-field" />	
		<label>Rg</label>              
	</div>

	<div class="input-field col s12 m3 l3">
		<input name="cpf" type="text" class="input-field" />	
		<label>Cpf</label>              
	</div>
</div>
<div class="row">
	<div class="input-field col s12 m6 l6'">
	   <input name="email" type="email"  value="{{isset($registro->email_admin) ? $registro->email_admin : ''}}">
	   <label for="email">Email</label>
	</div>
	<div class="input-field col s12 m3 l3">
		<input name="phone" type="tel" class="input-field" />	
		<label>Fone</label>              
	</div>
</div>
<div class="file-field input-field col s12 m6 l6">
     <div class="btn">
       <span>Foto</span>
       <input class type="file" name="imagem">
     </div>
     <div class="file-path-wrapper">
       <input type="text" class="file-path">
     </div>
     @if(isset($registro->imagem))
      <div class="input-field">
        <img width="100" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}">
      </div>
     @endif
   </div>
