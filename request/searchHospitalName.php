<?php

	require_once "../database/hospital.php";
	
	$id = $_GET['id'];
	
	$db = new HospitalDb();
	$hospital = $db->searchName($id);
	
	$json = json_encode($hospital);
	echo $json;