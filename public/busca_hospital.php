<?php
	require_once "cabecalho.php";
	require_once "../database/hospital.php";
	
	$dbhospital = new HospitalDb();
	$hospitals = $dbhospital->searchAll();
	
	if(isset($_GET['expired']) && $_GET['expired'] == "1"){
		unset($_SESSION['hospital']);
	}
?>
	<div class="row" style="width: 100%">
		<div id="newtab-customize-overlay"></div>
		<div class="welcome" style="padding-top:30px;">
	
		Bem vindo, <?=$user->name?>


	    </div>

<!--MODAL-->
  <div id="modalDeleteHospital" class="modal" style="width:300px;">
    <div class="modal-content">
		<h5>Exclusão de Hospital</h5>
		<label class="bold" id="lblDeleteHospital">Deseja Realmente excluir o hospital?</label>
		<input name="idHospitalExcluir" id="idHospitalExcluir" type="hidden">
	</div>
	<div class="modal-footer">
	  <a href="#!" class="modal-action modal-close btn waves-effect waves-light light-blue" style="margin-left:10px">Não</a>
      <a href="#!" class="modal-action modal-close btn waves-effect waves-light light-blue" id="yesDeleteHospital">Sim</a>
    </div>
  </div>
		
<!--MODAL-->
  <div id="modalEditHospital" class="modal">
    <div class="modal-content">
	  <form class="col s11 m12" id="formEditHospital" method="post" action="" enctype="multipart/form-data" required>
      <!--TITULO-->
        <h3 style="height:80px;background-color: #03a9f4; margin-bottom:50px;font-size:40px; text-align: center;color:white; padding:20px;";>Edição de Hospital</h3>
		
		<!--ID DO HOSPITAL-->   
		<input name="id_hospital" id="id_hospital" type="hidden">
		
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
        <div class="file-field input-field col s5" id="hospitalFile">
          <div class="btn input-field col s5 light-blue">
            <span>Arquivos</span>
             <input type="file" name="file_upload">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" id="file_path" type="text" placeholder="Upload de um ou mais arquivos">
          </div>
        </div>
				  
        <!--IMAGEM-->
        <div class="file-field input-field col s5" id="hospitalFile">
          <div class="btn input-field col s5 light-blue">
            <span>Imagem</span>
            <input type="file" name="imagemHospital" accept="image/*">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" id="image_path" type="text" placeholder="Upload de uma imagem">
			<input name="image_path" id="image_path_hidden" type="hidden">
          </div>
        </div>

        <!--CHECK-->
        <div class="input-field col s9" style="margin-bottom: 50px">
          <button class="btn waves-effect waves-light light-blue" type="submit" name="action" id="buttonEditHospital">Editar
            <i class="material-icons right">send</i>
          </button>
        </div>
	  </form>
    </div>
  </div>		

  <div id="boardHospitais">
	<?php 
	
	if ($hospitals == null){
		echo "
		
		<center>
		
				<img width=300px height=250px alt='Oops! Não há nada aqui, cadastre seu primeiro hospital!'
			title='alt='Oops! Não há nada aqui, cadastre seu primeiro hospital!' 
			src='../images/hospital/icon_hospital_nothing_here.png'/>
				
				<br/>
				
				<p><b>Oops! Não achamos nada! ;(</p>
				<p><a href='cadastro_hospital.php'>Clique aqui e <u>cadastre seu primeiro hospital</u></a></p>
		
		      ";
	}else{
		
	echo '<center>
	<p style="padding-bottom:20px;" class="tituloPrincipalHospital">Em qual hospital você está hoje?</p>
	</center>';
	?>
	<a href="cadastro_hospital.php">
	<div class="col s6 m4" id="tituloAdicionaHospital">
	      <div class="card" id="cardHospital">
	        <div class="card-image" id="cardImageHospital">
	          <img  src="../images/hospital 2.jpg" id="imagemHospital">
	          <div id="botaoBuscaHospital" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></div>
			  <div id="divHospitalConteudo2">
				<p class="pHospitalConteudo1">ADICIONAR NOVO HOSPITAL</p>	
			  </div>
	        </div>
		
	      </div>
	    </div>
	</a>
	<?php
	foreach($hospitals as $hospital){ 
	
	
		if($hospital->image == '' || $hospital->image == null){
	?>

	

	    <div class="col s6 m4" id="tituloAdicionaHospital">
	      <div class="card col s6" id="cardHospital">
	        <div class="card-image" id="cardImageHospital">
	          <img src="../images/hospital 2.jpg" id="imagemHospital">
	         
	          <a href="hospital_atual.php?id=<?=$hospital->id?>" id="botaoBuscaHospital" class=" btn-floating halfway-fab waves-effect waves-light red"><i  class="material-icons">done</i></a>
			  <a class="btn-floating halfway-fab red" id="botaoEditHospital" onclick="buscarHospital(<?=$hospital->id?>)" href="#modalEditHospital"><i  class="material-icons">edit</i></a>
			  <a class="btn-floating halfway-fab red" id="botaoDeleteHospital" onclick="buscarHospitalName(<?=$hospital->id?>)" href="#modalDeleteHospital"><i  class="material-icons">delete</i></a>
				  <div id="divHospitalConteudo1" >
					<p class="pHospitalConteudo1"><?=$hospital->name?></p>
					<p><label class="lblHospitalConteudo">Nome do chefe da Uti:  </label><label class="lblHospitalConteudo"><?=$hospital->nome_chefe_uti?></label></p>
					<p><label class="lblHospitalConteudo">Telefone da Uti:  </label><label class="lblHospitalConteudo"><?=$hospital->telephone_uti?></label></p>
					<p><label class="lblHospitalConteudo">Telefone do chefe da Uti:  </label><label class="lblHospitalConteudo"><?=$hospital->telephone_chefe_uti?></label></p>
					
				  </div>
	        </div>
		
	      </div>
	    </div>

		<?php }else{  ?>
			
			<div class="col s6 m4" id="tituloAdicionaHospital">
	      <div class="card col s6" id="cardHospital">
	        <div class="card-image" id="cardImageHospital">
	          <img src="<?=$hospital->image?>" id="imagemHospital">
	         
	          <a href="hospital_atual.php?id=<?=$hospital->id?>" id="botaoBuscaHospital" class=" btn-floating halfway-fab waves-effect waves-light red"><i  class="material-icons">done</i></a>
			  <a class="btn-floating halfway-fab red" id="botaoEditHospital" onclick="buscarHospital(<?=$hospital->id?>)" href="#modalEditHospital"><i  class="material-icons">edit</i></a>
			  <a class="btn-floating halfway-fab red" id="botaoDeleteHospital" onclick="buscarHospitalName(<?=$hospital->id?>)" href="#modalDeleteHospital"><i  class="material-icons">delete</i></a>
				  <div id="divHospitalConteudo1" >
					<p class="pHospitalConteudo1"><?=$hospital->name?></p>
					<p><label class="lblHospitalConteudo">Nome do chefe da Uti:  </label><label class="lblHospitalConteudo"><?=$hospital->nome_chefe_uti?></label></p>
					<p><label class="lblHospitalConteudo">Telefone da Uti:  </label><label class="lblHospitalConteudo"><?=$hospital->telephone_uti?></label></p>
					<p><label class="lblHospitalConteudo">Telefone do chefe da Uti:  </label><label class="lblHospitalConteudo"><?=$hospital->telephone_chefe_uti?></label></p>
					
				  </div>
	        </div>
		
	      </div>
	    </div>		

			
		<?php }
		
		
		}} ?>
	</div>				
	</div>
	</body>
</html>
