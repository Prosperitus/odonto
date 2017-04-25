<?php
	include "HospitalModel.php";
	include "../database/dbhospital.php";


	function addHospital(){
		$Hospital = new Hospital();
		$Hospital->setNameHosp($_POST["namehops"]);
		$Hospital->setChefUti($_POST["chefuti"]);
		$Hospital->setPhoneChef($_POST["phonechef"]);
		$Hospital->setPhoneUti($_POST["phoneuti"]);
		//$Hospital->setPhoneHosp($_POST["phonehosp"]);
		$conn = new DbHospital();
		$conn->addHospital($Hospital);
	}


if(addHospital()){
	header("location: ../public/success_register.php");
}else{
	header("location: ../public/fail_register.php");
}
