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
		$Attendance->setObservacoes($_POST["obsPaciente"]);
		//$Attendance->setBonequinha($_POST["bonequinha"]);
		//$Attendance->setImage($_POST["image"]);
		//$Attendance->setStatus($_POST["status"]);
		$conn = new DbAttendance();
		$result = $conn->addAttendance($Attendance);
		return $result;
	}

if(addAttendance()){
	$conn = new DbAttendance();
	$result = $conn->searchAttendanceLast();
	echo '<script>
			$(document).ready(function(){
			$("#avaliacao").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header">'.$result->namePatient.' '.$result->surnamePatient.'</div>\'
			+ \'<div class="portlet-content">'.$result->observacoes.'</div>\'
			+ \'</div>\');
			});</script>';
}else{
	header("location: ../public/fail_register.php");
	die();
}