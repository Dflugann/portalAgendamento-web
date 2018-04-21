<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">
.hide
{
   display: none;
}
	</style>
	<title></title>
</head>
<body>


<h1>Formulario de Inscrição</h1>
<form name="incrição">
    <b>Nome Completo:</b></br> <input type="text" size="100" placeholder="Digite seu nome completo" required></br></br>
    <b>Endereço:</b></br> <input type="text" size="100" placeholder="Digite seu endereço - Rua ******** ***** ****** Nº***" required></br></br>
    <b>Telefone:</b></br> <input type="text" size="100" placeholder="(DDD) 9XXXX -XXXX" required maxlength="12" >
    </br></br>
    <b>Incrição para o campeonato de:</b></br>
    <select name="Inscricao" id="selecionar">
        <option value="">Selecionar...</option>
        <option data-section="cosplay" value="Cosplay">Cosplay</option>
        <option data-section="smite" value="Smite">Smite</option>
        <option data-section="k-pop" value="K-pop">K-Pop</option>
        <option data-section="bey-blade" value="Bey Blade">Bey Blade</option>
        <option data-section="just-dance" value="Just Dance">Just Dance</option>
        <option data-section="quadribol" value="Quadribol">Quadribol Terrestre</option>
        <option data-section="anime-quiz" value="Anime Quiz">Anime Quiz<option>
        <option data-section="desenho" value="Desenho">Competição de Desenho</option>
    </select>

    <div data-name="cosplay" class="hide">
        Campos cosplay: <input type="text" value=""><br>
        Campos Teste: <input type="text" value=""><br>
    </div>

    <div data-name="smite" class="hide">
        Campos smite: <input type="text" value=""><br>
    </div>

    <div data-name="k-pop" class="hide">
        Campos kpop: <input type="text" value=""><br>
    </div>

    <div data-name="bey-blade" class="hide">
        campos bey-blade: <input type="text" value=""><br>
    </div>

    <div data-name="just-dance" class="hide">
        just-dance: <input type="text" value=""><br>
    </div>

    <div data-name="quadribol" class="hide">
        quadribol: <input type="text" value=""><br>
    </div>

    <div data-name="anime-quiz" class="hide">
        anime quiz: <input type="text" value=""><br>
    </div>

    <div data-name="desenho" class="hide">
        desenho: <input type="text" value=""><br>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
	$("#selecionar").change(function() {
    var $this, secao, atual, campos;
  
    campos = $("div[data-name]");
    
    campos.addClass("hide");

    if (this.value !== "") {
        secao = $('option[data-section][value="' + this.value + '"]', this).attr("data-section");
      
        atual = campos.filter("[data-name=" + secao + "]");
      
        if (atual.length !== 0) {
            atual.removeClass("hide");
        }
    }
});

</script>
</body>
</html>