<div class="row">
  <div class="input-field col s12 m4 l4">
    <select name="nome_empr">

      <option value="0" disabled selected>Selecione</option>

      @if(isset($registros_apart->nome_empr))
      <option selected value='{{$registros_apart->nome_empr}}' >{{$registros_apart->nome_empr}}</option>";
      @endif
      @foreach($registros_empreend as $registro)
      @if($registro->status == 'sim')
      <option value='{{$registro->titulo}}'>{{$registro->titulo}}</option>";
      @endif
      @endforeach
    </select>
      <label>Empreendimento</label>
  </div>

  <div class="input-field col s12 m12 l2">
    <select name="andar">
      <option value="0" disabled selected>Selecione</option>
      <?php
      if (isset($registros_apart->andar)) {
        echo "<option selected value=$registros_apart->andar>$registros_apart->andar °</option>";
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
      if (isset($registros_apart->num)) {
        echo "<option selected value=$registros_apart->num>$registros_apart->num °</option>";
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
      if (isset($registros_apart->vaga)) {
        echo "<option selected value=$registros_apart->vaga>$registros_apart->vaga °</option>";
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
      if (isset($registros_apart->dorm)) {
        echo "<option selected value=$registros_apart->dorm>$registros_apart->dorm °</option>";
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
      if (isset($registros_apart->suite)) {
        echo "<option selected value=$registros_apart->suite>$registros_apart->suite °</option>";
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
      if (isset($registros_apart->banh)) {
        echo "<option selected value=$registros_apart->banh>$registros_apart->banh °</option>";
      }
      for($a =0; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
      } ?>
    </select>
      <label>BANHEIRO</label>
  </div>
  <div class="input-field col s12 m2 l2">
    <input type="text" name="area" value="{{isset($registros_apart->area) ? $registros_apart->area : ''}}" >
      <label>ÁREA</label>
  </div>
</div>

<input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" {{isset($registros_apart->status) && ($registros_apart->status) == 'sim' ? 'checked' : ''}}/>
<label for="filled-in-box">Ativo</label>
