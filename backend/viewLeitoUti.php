<?php
	
	require_once "../database/dbhospital.php";
	
	$id = $_GET['id'];
	$db = new DbHospital();
	$leitos = $db->search_uti_leito($id);
	echo '<option value="" disabled selected>Leito</option>';
	foreach ($leitos as $leito) {
		if($leito->name_bed == null){
			echo '<option value="'.$leito->id.'" >Leito '.$leito->number_itu.'</option>';
		}else{
			echo '<option value="'.$leito->id.'" >'.$leito->name_bed.'</option>';
		}
	}
	