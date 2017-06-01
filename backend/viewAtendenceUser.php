<?php 

	require_once "../database/dbemployee.php";
	
	$name = $_GET['name'];
	$db = new DbEmployee();
	$emps = $db->searchEmployee($name);
	foreach ($emps as $emp) {
		echo '<div class="medicos" onclick="clickmedico(\''.$emp->name." ".$emp->surname.'\','.$emp->id.')">'.$emp->name." ".$emp->surname."</div>";
	}