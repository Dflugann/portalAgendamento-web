<div class="row">
  <div class="input-field col s12 m12 l12">
    <input name="name" type="text" value="{{isset($registro->name) ? $registro->name : old('name')}}" class="validate" minlength="5" maxlength="15" pattern="[A-Za-zÀ-ú\s]+$" required>
    @if($errors->has('name'))
      <span class="red-text text-darken-2">
        <strong>{{$errors->first('name')}}</strong>
      </span>
    @endif
    <label for="nome" data-error="Preencha corretamente" class="active">Nome</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s12 m4 l4">
    <input name="phone" type="tel"  value="{{isset($registro->phone) ? $registro->phone : old('phone')}}" class="validate" minlength="9" maxlength="14" placeholder="ex: (11)99999-9999" pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$" required>
    <label for="phone" data-error="Preencha com seu telefone">Fone</label>
    @if($errors->has('phone'))
      <span class="red-text text-darken-2">
        <strong>{{$errors->first('phone')}}</strong>
      </span>
    @endif
  </div>

  <div class="input-field col s12 m8 l8">
    <input name="email" type="email"  value="{{isset($registro->email) ? $registro->email : old('email')}}" class="validate" required>
    <label for="email" data-error="Preencha com seu E-mail">Email</label>
    @if($errors->has('email'))
      <span class="red-text text-darken-2">
        <strong>{{$errors->first('email')}}</strong>
      </span>
    @endif
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
  @if($errors->has('imagem'))
    <span class="red-text text-darken-2">
        <strong>{{$errors->first('imagem')}}</strong>
      </span>
  @endif
  @if(isset($registro->imagem))
    <div class="input-field">
      <img width="100" src="{{asset($registro->imagem)}}">
    </div>
  @endif
</div>

<div class="row">
<div class="input-field col s12 m6 l6">
  <input placeholder="Usuário" name="user" type="text" value="{{isset($registro->user) ? $registro->user : ''}}" class="validate" minlength="5" maxlength="15" pattern="[A-Za-zÀ-ú\s]+$" required>
  <label for="user" data-error="Digite um nome de usuário">Usuario</label>
  @if($errors->has('user'))
    <span class="red-text text-darken-2">
        <strong>{{$errors->first('user')}}</strong>
      </span>
  @endif
</div>

<div class="input-field col s12 m6 l6">
  <input placeholder="Password" name="password" type="password" class="validate" minlength="5" maxlenght="15" required>
  <label for="password" data-error="Digite uma senha">Password</label>
  @if($errors->has('password'))
    <span class="red-text text-darken-2">
        <strong>{{$errors->first('password')}}</strong>
      </span>
  @endif
</div>
</div>

@if(isset($registro->status))
<input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" {{isset($registro->status) && ($registro->status) == 'sim' ? 'checked' : ''}}/>
<label for="filled-in-box">Ativo</label>
  @else
  <input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" checked/>
  <label for="filled-in-box">Ativo</label>
@endif