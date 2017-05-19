<?php 
	require_once "cabecalho.php";
	require_once "../database/dbhospital.php";

 foreach($Hospitais as $hospital){ ?>
		<tr class="listHospitals" onclick="visualizar(<?=$hospital->id?>)">
			<td><?=$Hospital->namehosp?></td>
			<td><?=$Hospital->chefuti?></td>
			<td><?=$Hospital->phonechef?></td>
			<td><?=$Hospital->phoneUti?></td>
			
<?php } ?>

<?php require_once "rodape.php";
