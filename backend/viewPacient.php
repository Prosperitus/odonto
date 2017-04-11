<?php 
 
	require_once "../database/dbpatient.php";
	
	$id = $_GET['id'];
	$pat = searchPacientId($id);
	function searchPacientId($id){
		$db = new DbPatient();
		$pat = $db->searchId($id);
		return $pat;
	}
echo $pat->name;	
?>
