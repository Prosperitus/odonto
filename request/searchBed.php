<?php
	
	require_once "../controller/hospital.php";
	require_once "../controller/verifyLogin.php";
	verifyLogRedirect();
	
	$hospitalController = new HospitalController();
	$hospitalController->createViewBed();