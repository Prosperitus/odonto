<?php

	require_once "../controller/patient.php";
	require_once "../database/patient.php";
	
	
	$id = filter_input(INPUT_POST, 'paciente_id');
	$patient = new PatientController();
	$patient->edit($id);
	
	//ATUALIZAR LISTA DE FUNCIONARIOS
	
	$dbpatient = new PatientDb();
	$patient = $dbpatient->searchId($id);
?>

		<td><?=$patient->name.' '.$patient->surname?></td>
		<td><?=$patient->social_security?></td>
		<td><?=$patient->health_insurance?></td>
		<?php if($patient->responsible2 != null && $patient->responsible2 != ""){?>
		<td><?=$patient->responsible1.', '.$patient->responsible2?></td>
		<?php }else{ ?>
		<td><?=$patient->responsible1?></td>
		<?php } ?>
