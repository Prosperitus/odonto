<?php 
	require_once "cabecalho.php";
?>


    <!--CLASS/FORM-->
    <div class="row margemCentro">
      <form class="col s11" action="../backend/addHospital.php" method="post"> 
    
      <!--TITULO-->
        <h3>Cadastro UTI</h3>

        <!--CHECK-->
          <div class="input-field col s9">
            <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Confirmar Cadastro
              <i class="material-icons right">send</i>
            </button>
          </div>

      </form>
    </div>

 <?php require_once "rodape.php";