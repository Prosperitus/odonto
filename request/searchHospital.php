<?php

	require_once "../database/hospital.php";
	
	$id = $_GET['id'];
	
	$db = new HospitalDb();
	$hospital = $db->searchId($id);
	
	$json = json_encode($hospital);
	echo $json;