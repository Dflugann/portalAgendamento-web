<div class="row">
  <div class="input-field col s12 m4 l4">
    <select name="conjunto">
      <option value="0" disabled selected>Selecione</option>
      @foreach($registros as $registro)
        <option value={{$registro->titulo}}>{{$registro->titulo}}</option>";
      @endforeach
    </select>
      <label>Conjunto / Torre</label>
  </div>

  <div class="input-field col s12 m12 l2">
    <select name="andar">
      <option value="0" disabled selected>Selecione</option>
      <?php for($a =1; $a <= 50; $a++) {
        echo "<option value=$a>$a °</option>";
      } ?>
    </select>
      <label>Andar</label>
  </div>

  <div class="input-field col s12 m2 l2">
    <select name="numero">
      <option value="0" disabled selected>Selecione</option>
      <?php for($a =1; $a <= 500; $a++) {
        echo "<option value=$a>$a</option>";
      } ?>
    </select>
      <label>Numero</label>
  </div>

  <div class="input-field col s12 m2 l2">
    <select name="vaga">
      <option value="0" disabled selected>Selecione</option>
      <?php for($a =0; $a <= 5; $a++) {
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
      <?php for($a =0; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
      } ?>
    </select>
      <label>DORMS</label>
  </div>
  <div class="input-field col s12 m2 l2">
    <select name="suite">
      <option value="0" disabled selected>Selecione</option>
      <?php for($a =0; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
      } ?>
    </select>
      <label>SUITE</label>
  </div>
  <div class="input-field col s12 m2 l2">
    <select name="banheiro">
      <option value="0" disabled selected>Selecione</option>
      <?php for($a =0; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
      } ?>
    </select>
      <label>BANHEIRO</label>
  </div>
  <div class="input-field col s12 m2 l2">
    <input type="text" name="area" >
      <label>ÁREA</label>
  </div>
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
