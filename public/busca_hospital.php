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
		<div class="welcome">
	
		Bem vindo, <?=$user->name?>


	    </div> 
		
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
	<p class="tituloPrincipalHospital">Em qual hospital você está hoje?</p>
	</center>';
	?>
	<a href="cadastro_hospital.php">
	<div class="col s6 m4" id="tituloAdicionaHospital" style="margin-right:20px;margin-left:20px; margin-bottom: 40px;">
	      <div class="card" style="width: 630px;margin: auto;">
	        <div class="card-image" style="max-height:220px">
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

	

	    <div class="col s6 m4" id="tituloAdicionaHospital" style="margin-right:20px;margin-left:20px; margin-bottom: 40px;">
	      <div class="card col s6" style="width: 630px;margin: auto;">
	        <div class="card-image" style="max-height:200px">
	          <img src="../images/hospital 2.jpg" id="imagemHospital">
	         
	          <a href="hospital_atual.php?id=<?=$hospital->id?>" id="botaoBuscaHospital" class=" btn-floating halfway-fab waves-effect waves-light red"><i  class="material-icons">done</i></a>
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
			      <div class="card">
				<div class="card-image" style="max-height:200px">
				  <img src="<?=$hospital->image?>" id="imagemHospital">
				 
				  <a href="hospital_atual.php?id=<?=$hospital->id?>" class="botaoBuscaHospital btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">done</i></a>
				  <div class="divHospitalConteudo1">
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
	</body>
</html>
