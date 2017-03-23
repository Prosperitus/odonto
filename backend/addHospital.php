<?php
	include "employeeModel.php";
	include "../database/dbconnect.php";

	function addHospital(){
		$Employee = new Hospital();
		$Employee->setNameHosp($_POST["namehops"]);
		$Employee->setUTI($_POST["uti"]);
		$Employee->setBed($_POST["bed"]);
		$Employee->setChefUti($_POST["chefuti"]);
		$Employee->setPhoneChef($_POST["phonechef"]);
		$Employee->setPhoneHosp($_POST["phonehosp"]);
		$conn = new DBconnect();
		$conn->addHopspital($Hospital);
	}

addHospital();
