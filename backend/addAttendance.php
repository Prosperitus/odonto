<?php
 // 23/03/2017
	include_once "employeeModel.php";
	include_once "patientModel.php";
	include_once "attendanceModel.php";
	include_once "../database/dbattendance.php";




	 function addAttendance(){
		$Attendance = new Attendance();
		session_start();
		$hosp = $_SESSION['hospital'];
		$Attendance->setPatient($_POST["Idpatient"]);
		$Attendance->setHospital($hosp->id);
		$Attendance->setLeito($_POST["leito"]);
		$Attendance->setUtiAdmissionDate($_POST["admdate"]);
		$Attendance->setAdmissionCause($_POST["admcause"]);
		$Attendance->setDoctor($_POST["Iduser"]);
		//$Attendance->setBonequinha($_POST["bonequinha"]);
		//$Attendance->setImage($_POST["image"]);
		//$Attendance->setStatus($_POST["status"]);
		$conn = new DbAttendance();
		$result = $conn->addAttendance($Attendance);
		return $result;
	}

if(addAttendance()){
	header("location: ../public/atendimentos.php");
	die();
}else{
	header("location: ../public/fail_register.php");
	die();
}