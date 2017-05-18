<?php
 // 23/03/2017
	include "employeeModel.php";
	include "../database/dbconnect.php";

	function addAttendance(){
		$Employee = new Attendance();
		$Employee->setPatient($_POST["patient"]);
		$Employee->setHospital($_POST["hospital"]);
		$Employee->setAdmissionCause($_POST["admissioncause"]);
		$Employee->setAttendanceStatus($_POST["attendanceStatus"]);
        $Employee->setṔhotos($_POST["photos"]);
        $Employee->setUti($_POST["uti"]);
        $Employee->setPatientPicture($_POST["patientPicture"]);
        $Employee->setMedicalrecord($POST["medicalrecord"]);
        $Employee->setEmployee($POST["Employee"]);
		$Employee->setdataAdmissaoUti($_POST["dataAdmissaoUti"]); 
        $Employee->setpatientPicture($_POST["patientPicture"]);

		$conn = new DBconnect();
		$conn->addAttendance($Attendance);
	}

addAttendance();
