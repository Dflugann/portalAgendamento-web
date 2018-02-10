
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

    var i = setInterval(function () {
      clearInterval(i);
      document.getElementById("loading").style.display = "none";
      document.getElementById("conteudo").style.display = "inline";
  }, 2000);

  });
  </script>

</body>

</html>
