<?php

	require_once "../database/dbemployee.php";
	
	function generateRegistry($caract){
		$conn = new DbEmployee();
		$maxID = $conn->getUserMaxId();
		$maxID = $maxID+1;
		$maxID = (string) $maxID;
		while(strlen($maxID) < $caract){
			$maxID = (string) "0".$maxID;
		}
		return (int) $maxID;
	}



?>

