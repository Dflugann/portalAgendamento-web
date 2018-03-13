<div class="row">
  <div class="input-field col s12 m16 l6">
    <input name="nome" type="text" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome</label>
  </div>
  <div class="input-field col s12 m16 l6">
    <input name="sobrenome" type="text" value="{{isset($registro->sobrenome) ? $registro->sobrenome : ''}}">
    <label>Sobrenome</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s12 m4 l4">
    <input name="phone" type="text"  value="{{isset($registro->phone) ? $registro->phone : ''}}">
    <label>Fone</label>
  </div>
  <div class="input-field col s12 m8 l8">
    <input name="email_admin" type="email"  value="{{isset($registro->email_admin) ? $registro->email_admin : ''}}">
    <label for="email">Email</label>
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

@if(isset($registro->status))
<input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" {{isset($registro->status) && ($registro->status) == 'sim' ? 'checked' : ''}}/>
<label for="filled-in-box">Ativo</label>
  @else
  <input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" checked/>
  <label for="filled-in-box">Ativo</label>
@endif

