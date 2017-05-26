<?php 

	require_once "../database/dbpatient.php";
	
	$name = $_GET['name'];
	$dbpatient = new DbPatient();
	$pats = $dbpatient->searchPatient($name);
	foreach ($pats as $pat) {
		echo '<div class="pacientes" onclick="clickpaciente(\''.$pat->name." ".$pat->surname.'\')">'.$pat->name." ".$pat->surname."</div>";
	}
?>
