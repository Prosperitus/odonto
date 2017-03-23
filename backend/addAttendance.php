<?php
	include "employeeModel.php";
	include "../database/dbconnect.php";

	function addAttendance(){
		$Employee = new Attendance();
		$Employee->setPatient($_POST["patient"]);
		$Employee->setHospital($_POST["hospital"]);
		$Employee->setDate($_POST["admdate"]);
		$Employee->setCause($_POST["admcause"]);
		$Employee->setStatus($_POST["status"]);
		$conn = new DBconnect();
		$conn->addAttendance($Attendance);
	}

addAttendance();
