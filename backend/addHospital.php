<?php
	include "employeeModel.php";
	include "../database/dbhospital.php";


	function addHospital(){
		$Hospital = new Hospital();
		$Hospital->setNameHosp($_POST["namehops"]);
		$Hospital->setUTI($_POST["uti"]);
		$Hospital->setBed($_POST["bed"]);
		$Hospital->setChefUti($_POST["chefuti"]);
		$Hospital->setPhoneChef($_POST["phonechef"]);
		$Hospital->setPhoneHosp($_POST["phonehosp"]);
		$conn = new DbHospital();
		$conn->addHospital($Hospital);
	}


if(addHospital()){
	header("location: ../success_register.php");
}else{
	header("location: ../fail_register.php");
}
