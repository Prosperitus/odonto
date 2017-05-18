<?php 
	require_once "cabecalho.php";
?>

<script>
$(document).ready(function(){
	$("#addUTI").click(function(){
		$(".utis").append('<div class="input-field col s5">'
          +'<i class="material-icons prefix">business</i>'
         + '<input name="nome_uti[]" id="nome_uti" title="Digite o nome da UTI" type="text" class="validate" required>'
         + '<label for="nome_uti">Nome da UTI</label>'
       + '</div>'
       + '<div class="input-field col s5">'
        + '<i class="material-icons prefix">business</i>'
       +  ' <input name="quantidade_leito_uti[]" id="quantidade_leito_uti" title="Digite quantidade de leito da UTI" type="text" class="validate" required>'
        +  '<label for="quantidade_leito_uti">Quantidade de leito da UTI</label>'
        +'</div>'
		+'</div>');
	});
});
</script>
    <!--CLASS/FORM-->
    <div class="row margemCentro" style="width: 91%">
      <form class="col s11" action="../backend/addHospital.php" method="post"> 
    
      <!--TITULO-->
        <h3>Cadastro UTI</h3>
		<div class="utis">
		<!--NOME DA UTI-->   
        <div class="input-field col s5">
          <i class="material-icons prefix">business</i>
          <input name="nome_uti[]" id="nome_uti" title="Digite o nome da UTI" type="text" class="validate" required>
          <label for="nome_uti">Nome da UTI</label>
        </div>
		
		<!--QUANTIDADE DE LEITO DA UTI-->   
        <div class="input-field col s5">
          <i class="material-icons prefix">business</i>
          <input name="quantidade_leito_uti[]" id="quantidade_leito_uti" title="Digite quantidade de leito da UTI" type="text" class="validate" required>
          <label for="quantidade_leito_uti">Quantidade de leito da UTI</label>
        </div>
		</div>
		
		<!--ADD UTI-->
          <div class="input-field col s9">
            <button id="addUTI" style="border: 1px solid #0399ff;font-size:20px;font-weight:900;background-color: #0399ff;color:white; border-radius: 100%;-moz-border-radius: 100%;-webkit-border-radius
: 100%;padding: 0px 9px 0px 9px">+</button>
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
