<?php

	require_once "../controller/hospital.php";
	require_once "../database/hospital.php";

	//EDITAR HOSPITAL
	$hospital = new HospitalController();
	$hospital->edit();
	
	//ATUALIZAR BOARD
	$dbhospital = new HospitalDb();
	$hospitals = $dbhospital->searchAll();
	?>
	<center>
	<p class="tituloPrincipalHospital">Em qual hospital você está hoje?</p>
	</center>
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

			
	<?php }} ?>