<?php

	require_once "../database/dbconnect.php";

	function generateRegistry(){
		$conn = new DBconnector();
		$maxID = $conn->getUserMaxId();
		$maxID = $maxID+1;
		$maxID = (string) $maxID;
		while(strlen($maxID) <10){
			$maxID = (string) "0".$maxID;
		}
		return (int) $maxID;
	}

geneRegistry();

?>

