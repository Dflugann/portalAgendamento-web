<div class="row">
  <div class="input-field col s12 m4 l4">
    <select class="icons" name="nome_empr">
      <option value="0" disabled selected>Selecione</option>
      @if(isset($registros->nome_empr))

      <option selected value='{{$registros->nome_empr}}' data-icon='../../{{$registros->imagem}}' class="right">{{$registros->nome_empr}}</option>";
      @endif
      @foreach($registros_empr as $registro_empr)
      @if($registro_empr->status == 'sim')
      <option value='{{$registro_empr->titulo}}' data-icon='../../{{$registro_empr->imagem}}' class="right">{{$registro_empr->titulo}}</option>;
      @endif
      @endforeach
    </select>
      <label>Empreendimento</label>
  </div>

  <div class="input-field col s12 m12 l2">
    <select name="andar">
      <option value="0" disabled selected>Selecione</option>
      <?php
      if (isset($registros->andar)) {
        echo "<option selected value='$registros->andar'>$registros->andar °</option>";
      }
      for($a =1; $a <= 50; $a++) {
        echo "<option value=$a>$a °</option>";
      } ?>
    </select>
      <label>Andar</label>
  </div>

  <div class="input-field col s12 m2 l2">
    <select name="num">
      <option value="0" disabled selected>Selecione</option>
      <?php
      if (isset($registros->num)) {
        echo "<option selected value='$registros->num'>$registros->num °</option>";
      }
      for($a =1; $a <= 500; $a++) {
        echo "<option value=$a>$a</option>";
      } ?>
    </select>
      <label>Numero</label>
  </div>

  <div class="input-field col s12 m2 l2">
    <select name="vaga">
      <option value="0" disabled selected>Selecione</option>
      <?php
      if (isset($registros->vaga)) {
        echo "<option selected value=$registros->vaga>$registros->vaga °</option>";
      }
      for($a =0; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
      } ?>
    </select>
      <label>Vaga</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s12 m2 l2">
    <select name="dorm">
      <option value="" disabled selected>Selecione</option>
      <?php
      if (isset($registros->dorm)) {
        echo "<option selected value=$registros->dorm>$registros->dorm °</option>";
      }
      for($a =0; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
      } ?>
    </select>
      <label>DORMS</label>
  </div>
  <div class="input-field col s12 m2 l2">
    <select name="suite">
      <option value="0" disabled selected>Selecione</option>
      <?php
      if (isset($registros->suite)) {
        echo "<option selected value='$registros->suite'>$registros->suite °</option>";
      }
      for($a =0; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
      } ?>
    </select>
      <label>SUITE</label>
  </div>
  <div class="input-field col s12 m2 l2">
    <select name="banh">
      <option value="0" disabled selected>Selecione</option>
      <?php
      if (isset($registros->banh)) {
        echo "<option selected value=$registros->banh>$registros->banh °</option>";
      }
      for($a =0; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
      } ?>
    </select>
      <label>BANHEIRO</label>
  </div>
  <div class="input-field col s12 m2 l2">
    <input type="text" name="area" value="{{isset($registros->area) ? $registros->area : ''}}" >
      <label>ÁREA</label>
  </div>
</div>

@if(isset($registros->status))
  <input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" {{isset($registros->status) && ($registros->status) == 'sim' ? 'checked' : ''}}/>
  <label for="filled-in-box">Ativo</label>
@else
  <input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" checked/>
  <label for="filled-in-box">Ativo</label>
@endif
