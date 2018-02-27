<div class="row">
  <div class="input-field col s12 m3 l3">
    <input name="titulo" placeholder="Titulo" type="text" class="validate" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
    <label for="first_name">Titulo</label>
  </div>
  <div class="input-field col s12 m3 l3">
    <select name="tipo">
      @if(isset($registro->tipo))
        <option selected value="{{isset($registro->tipo) ? $registro->tipo : ''}}" >{{$registro->tipo}} </option>
      @else
          <option value="0" disabled selected>Selecione Tipo</option>
      @endif

      <option value="Comercial">Comercial</option>
      <option value="Conjunto">Conjunto</option>
      <option value="Empreendimento">Empreendimento</option>
      <option value="Torre ">Torre</option>
    </select>
     <label>Tipo</label>
   </div>
   <div class="input-field col s12 m3 l3">
      <select name="quadra">
        <option value="0" disabled selected>Selecione Quadra</option>
          @if(isset($registro->quadra))
            <option selected  value={{$registro->quadra}}>{{$registro->quadra}}</option>
          @endif
          <?php for($i=01; $i < 10 ; $i++) {
              echo "<option value=$i>$i</option>";
          }?>
      </select>
      <label>Quadra</label>
   </div>
   <div class="input-field col s12 m3 l3">
      <select name="bloco">
        <option value="0" disabled selected>Selecione Bloco</option>
          @if(isset($registro->bloco))
            <option selected  value={{$registro->quadra}}>{{$registro->bloco}}</option>
          @endif
          <?php for($i=01; $i < 10 ; $i++) {
            echo "<option value=$i>$i</option>";
          }?>
      </select>
      <label>Bloco</label>
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

 <div class="row">
   <div class="file-field input-field col s12 m12 l12">
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
 </div>

 @if(isset($registro->status))
 <input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" {{isset($registro->status) && $registro->status == 'sim' ? 'checked' : ''}} />
 <label for="filled-in-box">Ativo</label>
 @else
 <input type="checkbox" class="filled-in" id="filled-in-box" checked value="true" name="status" {{isset($registro->status) && $registro->status == 'sim' ? 'checked' : ''}} />
 <label for="filled-in-box">Ativo</label>
 @endif
