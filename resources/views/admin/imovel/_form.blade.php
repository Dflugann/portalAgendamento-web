

<div class="row">
  <div class="input-field col s12 m4 l4">
    <select class="icons" name="id_empreendimento">
      <option value="0" disabled selected>Selecione</option>
      @if(isset($registros->nome_empr))

      <option selected value='{{$registros->id_empreendimento}}' data-icon='../../{{$registros->imagem}}' class="right">{{$registros->nome_empr}}</option>";
      @endif
      @foreach($registros_empr as $registro_empr)
      @if($registro_empr->status == 'sim')
      <option value='{{$registro_empr->id_empreendimento}}' data-icon='../../{{$registro_empr->imagem}}' class="right">{{$registro_empr->titulo}}</option>;
      @endif
      @endforeach
    </select>
      <label>Empreendimento</label>
  </div>
</div>



<div class="row">
  <div class="input-field col s12 m3 l3">
    <select name="tipo" id="selecionar">
      <option value="" disabled="disabled" selected>Selecione o tipo de Imóvel</option>
      <option data-section="comercial" value="comercial">Comercial</option>
      <option data-section="vertical" value="vertical">Residencia Vertical</option>
      <option data-section="horizontal" value="horizontal">Residencia Horizontal</option>
    </select>
    <label>Selecione</label>
  </div>
</div>

<!--COMERCIAL-->
<div data-name="comercial" class="hide">
  <div class="row">
    <div class="input-field col s12 m2 l2">
      <input type="text" name="blocoComercial" placeholder="Bloco">
      <label>Bloco</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <input type="text" name="andarComercial" placeholder="Andar">
      <label>Andar</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <input type="text" name="conjunto" placeholder="Conjunto">
      <label>Conjunto</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <select name="vagaComercial">
        <option value="0" disabled selected>Selecione</option>
        <?php
        if (isset($registros->vaga)) {
        echo "<option selected value=$registros->vaga>$registros->vaga °</option>";
        }
        for($a =1; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
        } ?>
      </select>
      <label>Vaga</label>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <textarea name="descricaoComercial" class="materialize-textarea" data-length="120"></textarea>
        <label>Descrição</label>
      </div>
    </div>
  </div>
</div>

<!--RESIDENCIA VERTICAL-->
<div data-name="vertical" class="hide">
  <div class="row">
    <div class="input-field col s12 m2 l2">
      <input type="text" name="bloco" placeholder="Bloco">
      <label>Bloco</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <input type="text" name="andar" placeholder="Andar">
      <label>Andar</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <input type="text" name="apto" placeholder="Apto">
      <label>Apto</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <select name="vaga">
        <option value="0" disabled selected>Selecione</option>
        <?php
        if (isset($registros->vaga)) {
        echo "<option selected value=$registros->vaga>$registros->vaga °</option>";
        }
        for($a =1; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
        } ?>
      </select>
      <label>Vaga</label>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <textarea name="descricaoVertical" class="materialize-textarea" data-length="120"></textarea>
        <label>Descrição</label>
      </div>
    </div>

  </div>
</div>

<!--RESIDENCIA HORIZONTAL-->
<div data-name="horizontal" class="hide">
  <div class="row">
    <div class="input-field col s12 m2 l2">
      <input type="text" name="quadra" placeholder="Quadra">
      <label>Quadra</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <input type="text" name="numLote" placeholder="Numero/lote">
      <label>Numero/lote</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <select name="vaga">
        <option value="0" disabled selected>Selecione</option>
        <?php
        if (isset($registros->vaga)) {
        echo "<option selected value=$registros->vaga>$registros->vaga °</option>";
        }
        for($a =1; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
        } ?>
      </select>
      <label>Vaga</label>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <textarea name="descricao" class="materialize-textarea" data-length="120"></textarea>
        <label>Descrição</label>
      </div>
    </div>
  </div>
</div>
<!--<div data-name="rsvertical" class="hide">
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
</div>-->

@if(isset($registros->status))
  <input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" {{isset($registros->status) && ($registros->status) == 'sim' ? 'checked' : ''}}/>
  <label for="filled-in-box">Ativo</label>
@else
  <input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" checked/>
  <label for="filled-in-box">Ativo</label>
@endif
