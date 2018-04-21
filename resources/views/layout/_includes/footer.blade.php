
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    Materialize.updateTextFields();
    $(".button-collapse").sideNav();
    $('.tooltipped').tooltip({delay: 50});
    $('.carousel').carousel();
    $(".button-collapse").sideNav();
    $('.materialboxed').materialbox();
    $('.slider').slider();
    $('.parallax').parallax();
    $('select').material_select();
    $('.modal').modal();
    $('.scrollspy').scrollSpy();
   
    $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Limpar', // text for clear-button
    canceltext: 'Cancelar', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });

    $('.datepicker').pickadate({
    selectMonths: true,// Creates a dropdown to control month
    selectYears: 15,// Creates a dropdown of 15 years to control year
    // The title label to use for the month nav buttons
    labelMonthNext: 'Próximo Mês',
    labelMonthPrev: 'Mês Anterior',
    // The title label to use for the dropdown selectors
    labelMonthSelect: 'Selecione o Mês',
    labelYearSelect: 'Selecione o ano',
    // Months and weekdays
    monthsFull: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
    monthsShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ],
    weekdaysFull: [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado' ],
    weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
    // Materialize modified
    weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
    // Today and clear
    today: 'Hoje',
    clear: 'Limpar',
    close: 'Ok',
    // The format to show on the `input` element
    format: 'dd-mm-yyyy', //d mmmm, yyyy
    closeOnSelect: false // Close upon selecting a date,
  });

    var i = setInterval(function () {
      clearInterval(i);
      document.getElementById("loading").style.display = "none";
      document.getElementById("conteudo").style.display = "inline";
  }, 2000);

  });
  </script>
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
