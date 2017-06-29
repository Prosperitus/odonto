<?php

	require_once "../controller/patient.php";
	require_once "../database/patient.php";
	
	$id = filter_input(INPUT_POST, 'patient_id');
	$patient = new PatientController();
	$patient->edit($id);
	
	//ATUALIZAR LISTA DE FUNCIONARIOS
	
	$dbpatient = new PatientDb();
	$patient1 = $dbpatient->searchId($id);
?>

		<td><?=$patient->name.' '.$patient->surname?></td>
		<td><?=$patient->social_security?></td>
		<td><?=$patient->email?></td>
		<td><?=$patient->healthPlan?></td>
		<td><?=$patient->ResponsibleName1?></td
