<?php
	include "HospitalModel.php";
	include "../database/dbhospital.php";


	function addHospital(){
		$Hospital = new Hospital();
		$Hospital->setNameHosp($_POST["namehops"]);
		$Hospital->setChefUti($_POST["chefuti"]);
		$Hospital->setPhoneChef($_POST["phonechef"]);
		$Hospital->setPhoneUti($_POST["phoneuti"]);
		$conn = new DbHospital();
		$conn->addHospital($Hospital);
	}


if(addHospital()){
	header("location: ../success_register.php");
}else{
	header("location: ../fail_register.php");
}
