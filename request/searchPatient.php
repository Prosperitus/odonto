<?php 
	require_once "../controller/patient.php";
	require_once "../controller/verifyLogin.php";
	verifyLogRedirect();
	
	$name = $_GET['name'];
	$pacienteControle = new PatientController();
	$pacienteControle->searchName($name);
?>
