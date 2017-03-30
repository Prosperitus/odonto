<?php
	include "employeeModel.php";
	include "../database/dbhospital.php";

	function addHospital(){
		$Employee = new Hospital();
		$Employee->setNameHosp($_POST["namehops"]);
		$Employee->setUTI($_POST["uti"]);
		$Employee->setBed($_POST["bed"]);
		$Employee->setChefUti($_POST["chefuti"]);
		$Employee->setPhoneChef($_POST["phonechef"]);
		$Employee->setPhoneHosp($_POST["phonehosp"]);
		$conn = new DbHospital();
		$conn->addHospital($Hospital);
	}


if(addHospital()){
	header("location: ../success_register.php");
}else{
	header("location: ../fail_register.php");
}
