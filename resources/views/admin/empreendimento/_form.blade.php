<div class="row">
  <div class="input-field col s6">
    <input name="titulo" placeholder="Titulo" type="text" class="validate" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
    <label for="first_name">Titulo</label>
  </div>
  <div class="input-field col s6">
    <select name="tipo">
      @if(isset($registro->tipo))
        <option selected value="{{isset($registro->tipo) ? $registro->tipo : ''}}" >{{$registro->tipo}} </option>
      @else
          <option value="0" disabled selected>Escolha opção</option> 
      @endif

      <option value="Comercial">Comercial</option>
      <option value="Conjunto">Conjunto</option>
      <option value="Empreendimento">Empreendimento</option>
      <option value="Torre ">Torre</option>
    </select>
     <label>Tipo</label>
   </div>
 </div>
 <div class="row">
   <div class="file-field input-field col s12 m12 l12">
     <div class="btn">
       <span>Imagem</span>
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
 </div>
 <div class="row">
  <div class="col s12 m12 l12">
    <div class="input-field col s12 m12 l12">
      <textarea name="descricao" class="materialize-textarea">{{isset($registro->descricao) ? $registro->descricao : ''}}</textarea>
      <label>Descrição</label>
    </div>
  </div>
 </div>
