<?php 
	require_once "cabecalho.php";
?>

    <!--CLASS/FORM-->
    <div class="row margemCentro" style="width: 91%">
      <form class="col s11" action="../request/addUti.php" method="post"> 
    
    <!--TITULO-->
    <h3>Cadastro UTI</h3>
    
		<div class="utis">
		<div class="uti">
		<!--NOME DA UTI-->   
        <div class="input-field col s5">
          <i class="material-icons prefix">business</i>
          <input name="nome_uti[]" id="nome_uti" title="Digite o nome da UTI" pattern="^\S[\w]\s*$" type="text" class="validate" required>
          <label for="nome_uti">Nome da UTI</label>
        </div>
		
		<!--QUANTIDADE DE LEITO DA UTI-->   
        <div class="input-field col s5">
          <i class="material-icons prefix">business</i>
          <input name="quantidade_leito_uti[]" id="quantidade_leito_uti" title="Digite quantidade de leito da UTI" pattern="^\S[0-9]*$" type="text" class="validate" required>
          <label for="quantidade_leito_uti">Quantidade de leitos na UTI</label>
        </div>
		</div>
		</div>
		
		<!--ADD UTI-->
          <div class="input-field col s9">
            <a id="addUTI" class="btn-floating blue positionStatic"> <i class="material-icons">add</i></a>
			<a id="delUTI" class="btn-floating red positionStatic"> <i class="material-icons">delete</i></a>
          </div>
		
        <!--CHECK-->
          <div class="input-field col s9">
            <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Confirmar Cadastro
              <i class="material-icons right">send</i>
            </button>
          </div>
      </form>
    </div>

 <?php require_once "rodape.php";
