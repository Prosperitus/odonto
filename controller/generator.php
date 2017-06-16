<?php

	require_once "../database/employee.php";
	
	function generator($caract){
		$conn = new EmployeeDb();
		$maxID = $conn->searchMaxId();
		$maxID = $maxID+1;
		$maxID = (string) $maxID;
		while(strlen($maxID) < $caract){
			$maxID = (string) "0".$maxID;
		}
		return (int) $maxID;
	}



?>

