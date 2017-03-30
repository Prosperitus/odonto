<?php

	require_once "../database/dbconnect.php";

	function generateRegistry(int caract){
		$conn = new DBconnector();
		$maxID = $conn->getUserMaxId();
		$maxID = $maxID+1;
		$maxID = (string) $maxID;
		while(strlen($maxID) <caract){
			$maxID = (string) "0".$maxID;
		}
		return (int) $maxID;
	}

geneRegistry();

?>

