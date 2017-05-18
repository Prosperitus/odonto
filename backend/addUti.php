<?php


	function addUit(){

		$Uti = new Uti();
		$Uti->setNameHosp($_POST["nome_hospital"]);
		$Uti->setIdUti($_POST["id"]);

		$conn = new DbHospital();
		$result = $conn->addUti($Uti);

		return $result;










}












