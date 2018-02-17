  <div class="input-field col s12 m6">
    <input name="nome" type="text" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome</label>
  </div>

  <div class="input-field col s12 m6">
    <input name="sobrenome" type="text"  value="{{isset($registro->sobrenome) ? $registro->sobrenome : ''}}">
    <label>Sobrenome</label>
  </div>

  <div class="input-field col s12 m3">
    <input name="cpf" type="text"  value="{{isset($registro->cpf) ? $registro->cpf : ''}}">
    <label>Cpf</label>
  </div>

  <div class="input-field col s12 m3">
    <input name="tel" type="text"  value="{{isset($registro->tel) ? $registro->tel : ''}}">
    <label>Fone</label>
  </div>

  <div class="input-field col s12 m3">
    <input name="conj" type="text"  value="{{isset($registro->conj) ? $registro->conj : ''}}">
    <label>Conj</label>
  </div>

  <div class="input-field col s12 m3">
    <input name="numapart" type="text" value="{{isset($registro->numapart) ? $registro->numapart : ''}}">
    <label>N° Apartamento</label>
  </div>

<div class="file-field input-file col a12 s12 m12">
  <div class="btn">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
      <input class="file-path" type="text">
  </div>
  @if(isset($registro->imagem))
    <div class="input-field">
      <img width="100" src="{{asset($registro->imagem)}}">
    </div>
  @endif
</div> 

<div class="row">
  <div class="input-field col s12">
    <input name="email" type="email"  value="{{isset($registro->email) ? $registro->email : ''}}">
    <label for="email">Email</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <input name="password" type="password"  value="{{isset($registro->password) ? $registro->password : ''}}"">
    <label for="password">Password</label>
  </div>
</div>

<p>
   <input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" {{isset($registro->status) && $registro->status == 'sim' ? 'checked' : ''}} />
   <label for="filled-in-box">Ativo</label>
 </p>
