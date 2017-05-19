<?php 
	require_once "cabecalho.php";
	require "../database/dbhospital.php";

	$dbhospital = new DbHospital();
	$hospitals = $dbhospital->searchHospitalAll();

?>

<!-- tags utf8 html 4 e 5 -->
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<div class="row main" >

	<center>
		<h2>Selecione:</h2>
	</center>
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
  			    <p>Informações ou opções de edição ou remoção do hospital</p>
  			  </div>
			
 		</div>
 	</div>

<?php } ?>
				
</div>


        
<?php require_once "rodape.php";
