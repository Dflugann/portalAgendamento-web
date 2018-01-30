  <div class="input-field col s12 m6">
    <input name="nome" type="text" class="validate" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome</label>
  </div>

  <div class="input-field col s12 m6">
    <input name="sobrenome" type="text" class="validate" value="{{isset($registro->sobrenome) ? $registro->sobrenome : ''}}">
    <label>Sobrenome</label>
  </div>

  <div class="input-field col s12 m3">
    <input name="cpf" type="text" class="validate" value="{{isset($registro->cpf) ? $registro->cpf : ''}}">
    <label>Cpf</label>
  </div>

  <div class="input-field col s12 m3">
    <input name="tel" type="text" class="validate" value="{{isset($registro->tel) ? $registro->tel : ''}}">
    <label>Fone</label>
  </div>

  <div class="input-field col s12 m3">
    <input name="conj" type="text" class="validate" value="{{isset($registro->conj) ? $registro->conj : ''}}">
    <label>Conj</label>
  </div>

  <div class="input-field col s12 m3">
    <input name="numapart" type="text" class="validate" value="{{isset($registro->numapart) ? $registro->numapart : ''}}">
    <label>N° Apartamento</label>
  </div>

<div class="file-field input-file col a12 s12 m12">
  <div class="btn">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
      <input class="file-path validate" type="text">
  </div>
</div>
  @if(isset($registro->imagem))
    <div class="input-field">
      <img width="150" src="{{$registro->imagem}}">
    </div>
  @endif

<div class="row">
  <div class="input-field col s12">
    <input name="email" type="email" class="validate">
    <label for="email">Email</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <input name="password" type="password" class="validate">
    <label for="password">Password</label>
  </div>
</div>

<p>
   <input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status"{{isset($registro->status) && $registro->satus == 'sim' ? 'checked' : ''}} />
   <label for="filled-in-box">Ativo</label>
 </p>
