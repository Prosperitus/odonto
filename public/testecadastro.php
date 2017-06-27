<?php 
	require_once "cabecalho.php";
?>
    <div style="background-color:#1565c0 ;width:100%;height:100%">
    <!--CLASS/FORM-->
    <div class="row margemCentro" style="position:relative;margin:auto;background-color:white;width:950px;height:650px;margin-top:18px;box-shadow: 0 6px 10px 0 rgba(0,0,0,0.2);">
      <form style="padding:10px 30px 10px 30px" class="col s11 m12" method="post" action="../request/addHospital.php" enctype="multipart/form-data"> 
    
        <!--TITULO-->
        <h3 style="font-size:35px;border-bottom:1px solid #eeeeee;padding-bottom:20px;color:#0277bd;font-weight:450; ">Cadastro Hospital</h3>

        <!--NOME DO HOSPITAL-->   
        <div class="input-field col s6">
          <i class="material-icons prefix">business</i>
          <input name="nome_hospital" id="nome_hospital" pattern="^\S[0-9a-zA-ZÀ-úẽẼ\s]*$" title="Digite o nome do Hospital" type="text" class="validate" required>
          <label for="nome_hospital">Nome do Hospital</label>
        </div>

        <!--TELEFONE DA UTI-->
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_uti" id="telefone_uti" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="(00) 00000-0000" type="text" class="validate" required>
          <label for="telefone_uti">Telefone da UTI</label>
        </div>

        <!--NOME DO CHEFE DA UTI-->
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>  
          <input name="nome_chefe_uti" id="nome_chefe_uti" pattern="^\S[a-zA-ZÀ-úẽẼ\s]*$" title="Apenas Letras" type="text" class="validate" required>
          <label for="nome_chefe_uti">Nome do Chefe da UTI</label>
        </div>
       
         <!--TELEFONE DO CHEFE DA UTI-->
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_chefe_uti" id="telefone_chefe_uti" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="(00) 00000-0000" type="text" class="validate" required>
          <label for="telefone_chefe_uti">Telefone do Chefe da UTI</label>
        </div>

    
		<div class="utis">
		<div class="uti">
		<!--NOME DA UTI-->   
        <div class="input-field col s6">
          <i class="material-icons prefix">business</i>
          <input name="nome_uti[]" id="nome_uti" title="Digite o nome da UTI" type="text" class="validate" required>
          <label for="nome_uti">Nome da UTI</label>
        </div>
		
		<!--QUANTIDADE DE LEITO DA UTI-->   
        <div class="input-field col s6">
          <i class="material-icons prefix">business</i>
          <input name="quantidade_leito_uti[]" id="quantidade_leito_uti" title="Digite quantidade de leitos da UTI" pattern="^\S[0-9]*$" type="text" class="validate" required>
          <label for="quantidade_leito_uti">Quantidade de leitos na UTI</label>
        </div>
		</div>
		</div>
		
		<!--ADD UTI-->
          <div class="input-field col s9">
            <a id="addUTI" class="btn-floating blue positionStatic"> <i class="material-icons">add</i></a>
			<a id="delUTI" class="btn-floating red positionStatic"> <i class="material-icons">delete</i></a>
          </div>
		  
		      <!--ARQUIVOS-->
        <div class="file-field input-field col s5" id="hospitalFile">
          <div class="btn input-field col s3 light-blue">
            <span>Arquivos</span>
             <input type="file" name="file_upload">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload de um ou mais arquivos">
          </div>
        </div>
				  
        <!--IMAGEM-->
        <div class="file-field input-field col s5" id="hospitalFile" >
          <div class="btn input-field col s3 light-blue">
            <span>Imagem</span>
            <input type="file" name="imagemHospital" accept="image/*">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload de uma imagem">
          </div>
        </div>
		

        <!--CHECK-->
        <div style="border-top:1px solid #eeeeee;padding-top:15px;"  class="input-field col s12">
          <button class="btn waves-effect waves-light  light-blue darken-3 col s3 " type="submit" name="action" id="buttonSubmit">Confirmar
            <i class="material-icons right">send</i>
          </button>
        </div>

      </form>
     
    </div>



    </div>

 <?php require_once "rodape.php";
