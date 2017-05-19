<?php 
	require_once "cabecalho.php";
	require "../database/dbhospital.php";
?>


      <?php
	$dbhospital = new DbHospital();
	$hospitals = $dbhospital->searchHospitalAll();


?>
<meta charset="utf-8" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
Selecione:

<div class="row main" >

<?php foreach($hospitals as $hospital){ ?>
	 <div class="col s6 m4">
<div class="card small">
		
   


 <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="http://materializecss.com/images/office.jpg">
    </div>

    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?=$hospital->name?><i class="material-icons right">more_vert</i></span>
      <p><a href="#">Selecionar</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>

 </div>
 </div>
 </div>

				<?php } ?>
				
				</div></div>


 <!--
 <div class="row main">
    <div class="col s6 m4">z
      <div class="card">
        <div class="card-image">
          <img src="../images/medico.jpg">
          <span class="card-title"></span>
          <a href="cadastro_funcionario.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Cadastro de Funcionario - <?=$hospital->name?></p>
        </div>
      </div>
    </div>
      
      
    <div class="col s6 m4">
      <div class="card">
        <div class="card-image">
          <img src="../images/paciente.jpg">
          <span class="card-title"></span>
          <a href="cadastro_paciente.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Cadastro de Paciente</p>
        </div>
      </div>
    </div>
  
   
    <div class="col s6 m4">
      <div class="card">
        <div class="card-image">
          <img src="../images/hospital 2.jpg">
          <span class="card-title"></span>
          <a href="cadastro_hospital.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Cadastro de Hospital</p>
        </div>
      </div>
    </div>
  </div>          -->
        
<?php require_once "rodape.php";