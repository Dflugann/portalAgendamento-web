

<div class="row">
  <div class="input-field col s12 m4 l4">
    <select class="icons" name="id_empreendimento">
      <option value="0" disabled selected>{{$empreendimento->titulo}}</option>
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

@if($registros->tipo == 'comercial')
   <div class="row">
    <div class="input-field col s12 m2 l2">
      <input type="text" name="blocoComercial" placeholder="Bloco" value="{{isset($endereco->bloco) ? $endereco->bloco : ''}}">
      <label>Bloco</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <input type="text" name="andarComercial" placeholder="Andar" value="{{isset($endereco->andar) ? $endereco->andar : ''}}">
      <label>Andar</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <input type="text" name="conjunto" placeholder="Conjunto" value="{{isset($endereco->conjunto) ? $endereco->conjunto : ''}}">
      <label>Conjunto</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <select name="vagaComercial">
        <option value="0" disabled selected>{{$endereco->vaga}}</option>
        <?php
        if (isset($registros->vaga)) {
        echo "<option selected value=$registros->vaga>$registros->vaga</option>";
        }
        for($a =1; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
        } ?>
      </select>
      <label>Vaga</label>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <textarea name="descricaoComercial" class="materialize-textarea" data-length="120">{{isset($registros->descricao) ? $registros->descricao : ''}}</textarea>
        <label>Descrição</label>
      </div>
    </div>
  </div>
@endif


@if($registros->tipo == 'vertical')
  <div class="row">
    <div class="input-field col s12 m2 l2">
      <input type="text" name="bloco" placeholder="Bloco" value="{{isset($endereco->bloco) ? $endereco->bloco : '' }}">
      <label>Bloco</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <input type="text" name="andar" placeholder="Andar" value="{{isset($endereco->andar) ? $endereco->andar : '' }}">
      <label>Andar</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <input type="text" name="apto" placeholder="Apto" value="{{isset($endereco->apto) ? $endereco->apto : '' }}">
      <label>Apto</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <select name="vaga">
        <option value="0" disabled selected>Selecione</option>
        <?php
        if (isset($registros->vaga)) {
        echo "<option selected value=$registros->vaga>$registros->vaga</option>";
        }
        for($a =1; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
        } ?>
      </select>
      <label>Vaga</label>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <textarea name="descricaoVertical" class="materialize-textarea" data-length="120">{{isset($registros->descricao) ? $registros->descricao : '' }}</textarea>
        <label>Descrição</label>
      </div>
    </div>

  </div>
@endif

@if($registros->tipo == 'horizontal')
  <div class="row">
    <div class="input-field col s12 m2 l2">
      <input type="text" name="quadra" placeholder="Quadra" value="{{isset($endereco->quadra) ? $endereco->quadra : '' }}">
      <label>Quadra</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <input type="text" name="numLote" placeholder="Numero/lote" value="{{isset($endereco->numLote) ? $endereco->numLote : '' }}">
      <label>Numero/lote</label>
    </div>

    <div class="input-field col s12 m2 l2">
      <select name="vaga">
        <option value="0" disabled selected>Selecione</option>
        <?php
        if (isset($registros->vaga)) {
        echo "<option selected value=$registros->vaga>$registros->vaga </option>";
        }
        for($a =1; $a <= 5; $a++) {
        echo "<option value=$a>$a</option>";
        } ?>
      </select>
      <label>Vaga</label>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <textarea name="descricao" class="materialize-textarea" data-length="120" >{{isset($registros->descricao) ? $registros->descricao : '' }}</textarea>
        <label>Descrição</label>
      </div>
    </div>
  </div>
@endif

@if(isset($registros->status))
  <input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" {{isset($registros->status) && ($registros->status) == 'sim' ? 'checked' : ''}}/>
  <label for="filled-in-box">Ativo</label>
@else
  <input type="checkbox" class="filled-in" id="filled-in-box" value="true" name="status" checked/>
  <label for="filled-in-box">Ativo</label>
@endif
