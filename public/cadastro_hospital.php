<?php 
	require_once "cabecalho.php";
?>

    <!--CLASS/FORM-->
    <div class="row margemCentro" style="left:100px;position:relative">
      <form class="col s11 m12" method="post" action="../request/addHospital.php" enctype="multipart/form-data"> 
    
        <!--TITULO-->
        <h3>Cadastro Hospital</h3>

        <!--NOME DO HOSPITAL-->   
        <div class="input-field col s5">
          <i class="material-icons prefix">business</i>
          <input name="nome_hospital" id="nome_hospital" pattern="[0-9a-zA-ZÀ-úẽẼ\s]+$" title="Digite o nome do Hospital" type="text" class="validate" required>
          <label for="nome_hospital">Nome do Hospital</label>
        </div>

        <!--TELEFONE DA UTI-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_uti" id="telefone_uti" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="(00) 00000-0000" type="text" class="validate" required>
          <label for="telefone_uti">Telefone da UTI</label>
        </div>

        <!--NOME DO CHEFE DA UTI-->
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>  
          <input name="nome_chefe_uti" id="nome_chefe_uti" pattern="[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" type="text" class="validate" required>
          <label for="nome_chefe_uti">Nome do Chefe da UTI</label>
        </div>
       
         <!--TELEFONE DO CHEFE DA UTI-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_chefe_uti" id="telefone_chefe_uti" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="(00) 00000-0000" type="text" class="validate" required>
          <label for="telefone_chefe_uti">Telefone do Chefe da UTI</label>
        </div>

        <!--ARQUIVOS-->
        <div class="file-field input-field col s5" style="clear:both">
          <div class="btn input-field col s5 light-blue">
            <span>Arquivos</span>
             <input type="file" name="file_upload">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload de um ou mais arquivos">
          </div>
        </div>
				  
        <!--IMAGEM-->
        <div class="file-field input-field col s5" style="clear:both">
          <div class="btn input-field col s5 light-blue">
            <span>Imagem</span>
            <input type="file" name="imagemHospital" accept="image/*">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload de uma imagem">
          </div>
        </div>

        <!--CHECK-->
        <div class="input-field col s9">
          <button class="btn waves-effect waves-light light-blue" type="submit" name="action" id="buttonSubmit">Confirmar Cadastro
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
    </div>

 <?php require_once "rodape.php";
