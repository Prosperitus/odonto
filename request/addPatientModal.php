<?php

	require_once "../controller/patient.php";

	$pacienteController = new PatientController();
	$patientLast = $pacienteController->addModal();
