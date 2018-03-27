<div class="row">
  <div class="input-field col s12 m3 l3">
         <input type="text" class="input-field" value="{{isset($registro->tipo) ? $registro->tipo : 'Residencial'}}" disabled="disabled">
         <label for="Residencial">Tipo</label>
         <input type="hidden" name="tipo" value="Residencial">    
  </div>   
</div>

<div class="row">
  <div class="input-field col s12 m3 l3">
    <input name="titulo"  type="text" class="validate" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
    <label for="first_name">Titulo</label>
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
      <select name="lote">
        <option value="0" disabled selected>Selecione Lote</option>
          @if(isset($registro->lote))
            <option selected  value={{$registro->quadra}}>{{$registro->lote}}</option>
          @endif
          <?php for($i=01; $i < 10 ; $i++) {
            echo "<option value=$i>$i</option>";
          }?>
      </select>
      <label>Lote</label>
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
