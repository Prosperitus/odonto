<?php

	include "Hospitalmodel.php";
	include "../database/dbhospital.php";


	function addHospital(){
		$Hospital = new Hospital();
		$Hospital->setNameHosp($_POST["nome_hospital"]);
		$Hospital->setChefUti($_POST["nome_chefe_uti"]);
		$Hospital->setPhoneChef($_POST["telefone_chefe_uti"]);
		$Hospital->setPhoneUti($_POST["telefone_uti"]);
		//$Hospital->setPhoneHosp($_POST["phonehosp"]);
		$conn = new DbHospital();
		$result = $conn->addHospital($Hospital);
		return $result;
	}



if(addHospital()){
	header("location: ../public/success_register.php");
 }else{
	die();
 }





