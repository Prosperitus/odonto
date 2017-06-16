<?php 
	require_once "../controller/employee.php";
	require_once "../controller/verifyLogin.php";
	verifyLogRedirect();
	
	$name = $_GET['name'];
	$funcionarioControle = new EmployeeController();
	$funcionarioControle->searchName($name);
	
	