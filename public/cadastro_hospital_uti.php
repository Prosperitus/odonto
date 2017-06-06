<?php 
	require_once "cabecalho.php";
?>

<script>
  $(document).ready(function(){
	  var index = 0;
  	$("#addUTI").click(function(){
  		$(".utis").append('<div class="uti"><div class="input-field col s5">'
        +'<i class="material-icons prefix">business</i>'
        + '<input name="nome_uti[]" id="nome_uti" title="Digite o nome da UTI" type="text" class="validate" required>'
        + '<label for="nome_uti">Nome da UTI</label>'
        + '</div>'
        + '<div class="input-field col s5">'
        + '<i class="material-icons prefix">business</i>'
        + ' <input name="quantidade_leito_uti[]" id="quantidade_leito_uti" title="Digite quantidade de leito da UTI" type="text" class="validate" required>'
        + '<label for="quantidade_leito_uti">Quantidade de leito da UTI</label>'
        +'</div>'
  	    +'</div></div>');
  	});
	$("#delUTI").click(function(){
  		$(".utis .uti:last").remove();
  	});
  });
</script>
<style>
	footer{
		bottom:0%;
		width:100%;
		position:fixed;
	}
</style>
    <!--CLASS/FORM-->
    <div class="row margemCentro" style="width: 91%">
      <form class="col s11" action="../backend/addUti.php" method="post"> 
    
    <!--TITULO-->
    <h3>Cadastro UTI</h3>
    
		<div class="utis">
		<div class="uti">
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
          <label for="quantidade_leito_uti">Quantidade de leitos na UTI</label>
        </div>
		</div>
		</div>
		
		<!--ADD UTI-->
          <div class="input-field col s9">
            <a id="addUTI" class="btn-floating blue" style="position:static"> <i class="material-icons">add</i></a>
			<a id="delUTI" class="btn-floating red" style="position:static"> <i class="material-icons">delete</i></a>
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
