<?php 
	require_once "cabecalho.php";
?>


    <!--CLASS/FORM-->
    <div class="row margemCentro">
		<div id="formHospitalCadastro"></div>
      <form class="col s11" method="post" action="../backend/addHospital.php" > 
    
      <!--TITULO-->
        <h3>Cadastro Hospital</h3>

      <!--NOME DO HOSPITAL-->   
        <div class="input-field col s5">
          <i class="material-icons prefix">business</i>
          <input name="nome_hospital" id="nome_hospital" type="text" class="validate" required>
          <label for="nome_hospital">Nome do Hospital</label>
        </div>

         <!--TELEFONE DA UTI-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_uti" id="telefone_uti" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="(00) 000000-0000" type="text" class="validate" required>
          <label for="telefone_uti">Telefone da UTI</label>
        </div>

        <!--NOME DO CHEFE DA UTI-->
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>  
          <input name="nome_chefe_uti" id="nome_chefe_uti" type="text" class="validate" required>
          <label for="nome_chefe_uti">Nome do Chefe da UTI</label>
        </div>
       
         <!--TELEFONE DO CHEFE DA UTI-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_chefe_uti" id="telefone_chefe_uti" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="(00) 000000-0000" type="text" class="validate" required>
          <label for="telefone_chefe_uti">Telefone do Chefe da UTI</label>
        </div>

        <!--NÚMERO DE UTIs-->
        <div class="input-field col s5">
        <i class="material-icons prefix">view_headline</i>  
          <input name="numeroutis_hospital" id="numeroutis_hospital" pattern="[0-9]+$" title="Só números" type="text" class="validate" required>
          <label for="numeroutis_hospital">Nº de UTIs</label>
        </div>
		
         <!--ARQUIVOS-->

                  <div class="file-field input-field col s5" style="clear:both">
                    <div class="btn input-field col s5 light-blue">
                      <span>Arquivos</span>
                      <input type="file" multiple>
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Upload one or more files">
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