<div class="row">

  <div class="input-field col s12 m4 l4">
    <input name="nome" type="text" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome</label>
  </div>

  <div class="input-field col s12 m4 l4">
    <input name="cpf" type="text"  value="{{isset($registro->cpf) ? $registro->cpf : ''}}">
    <label>CPF</label>
  </div>

  <div class="input-field col s12 m4 l4">
    <input name="phone" type="text"  value="{{isset($registro->phone) ? $registro->phone : ''}}">
    <label>Fone</label>
  </div>

</div>

<div class="row">
  <div class="input-field col s12 m6 l6">
    <input name="email_admin" type="email"  value="{{isset($registro->email) ? $registro->email : ''}}">
    <label for="email">Email</label>
  </div>
  <div class="input-field col s12 m6 l6">
    <select multiple name="nome_empr">
      <option value="" disabled selected>Selecione empreendimentos para novo administrador</option>
      <option value=""></option>
    </select>
    <label>Empreendimentos</label>
  </div>
</div>

<div class="file-field input-file col a12 s12 m12">
<div class="btn">
  <span>Foto</span>
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
<div class="input-field col s12 m6 l6">
  <input name="user_admin" type="text" value="{{isset($registro->user_admin) ? $registro->user_admin : ''}}">
  <label>Usuario</label>
</div>

<div class="input-field col s12 m6 l6">
  <input name="password" type="password"  value="{{isset($registro->password) ? $registro->password : ''}}">
  <label for="password">Password</label>
</div>
</div>

<div class="input-field col s12 m2 l2">
<input type="checkbox" class="filled-in" id="filled-in-box" checked value="true" name="status" {{isset($registro->status) && $registro->status == 'sim' ? 'checked' : ''}} />
<label for="filled-in-box">Ativo</label>
</div>
