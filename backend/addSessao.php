<?php
	require "../database/dbhospital.php";


	function addSessionHospital($id){
		$db = new DbHospital();
		$hospital = $db->search_id($id);
		if($hospital != false){
			$_SESSION['hospital'] = $hospital;
		}
	}