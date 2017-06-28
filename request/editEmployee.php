<?php

	require_once "../controller/employee.php";
	require_once "../database/employee.php";
	
	$id = $_POST['funcionario_id'];
	$employee = new EmployeeController();
	$employee->edit($id);
	
	//ATUALIZAR LISTA DE FUNCIONARIOS
	
	$dbemployee = new EmployeeDb();
	$employee = $dbemployee->searchId($id);
?>

		<td><?=$employee->name.' '.$employee->surname?></td>
		<td><?=$employee->social_security?></td>
		<td><?=$employee->email?></td>
		<td><?=$employee->cro?></td>
		<td><?=$employee->registration?></td>
	
