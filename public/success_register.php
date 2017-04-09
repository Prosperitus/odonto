<?php 
	require_once "cabecalho.php";
?>
	<div class="main">
	<p>Cadastro efetuado com sucesso!</p>
	</div>
	<footer class="page-footer light-blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

    <!--SCRIPSTs-->
    <script>
      $('.datepicker').pickadate({
      selectYears:100
      });
      $(document).ready(function() {
      $('select').material_select();
      });
    </script>
    <script src="js/mask_paciente.js"></script>
  </body>
</html>
