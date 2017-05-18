<?php
 // 23/03/2017
	include "employeeModel.php";
	include "../database/dbconnect.php";

	function addAttendance(){
		$Attendance = new Attendance();
		$dbpatient = new DbPatient();
		if (!$dbp->searchId($_POST["patient"])) {
			echo "false";
			return;
		}
		$Attendance->setPatient($_POST["patient"]);

		$dbh = new DbHospital();
		if (!$dbh->search_id($_POST["hospital"])) {
			echo "false";
			return;

		$dbh = new DbUti();
		if (!$dbh->searchItuId($_POST["uti"])) {
			echo "false";
			return;	
		}
		$Attendance->setHospital($_POST["hospital"]);
		$Attendance->setAdmissionDate($_POST["admdate"]);
		$Attendance->setFinalDate($_POST["#"]);
		$Attendance->setAdmissionCause($_POST["admcause"]);
		$Attendance->setDoctorResponsible($_POST["#"]);
		//$Attendance->setUti($_POST["uti"]);
		//$Attendance->setStatus($_POST["status"]);
		$conn = new DbAttendance();
		$conn->addAttendance($Attendance);
	}