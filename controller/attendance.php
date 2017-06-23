<?php
 // 23/03/2017
	include_once "../model/employee.php";
	include_once "../model/patient.php";
	include_once "../model/attendance.php";
	include_once "../database/attendance.php";
	require_once "../controller/verifyLogin.php";



class AttendanceController{
	
	function __construct(){
		verifyLogRedirect();
	}
	
	 public function add(){
		$Attendance = new Attendance();
		session_start();
		$hosp = $_SESSION['hospital'];
		$Attendance->setPatient($_POST["Idpatient"]);
		$Attendance->setHospital($hosp->id);
		$Attendance->setBed($_POST["leito"]);
		$Attendance->setUtiAdmissionDate($_POST["admdate"]);
		$Attendance->setDoctor($_POST["Iduser"]);
		//$Attendance->setBonequinha($_POST["bonequinha"]);
		//$Attendance->setImage($_POST["image"]);
		//$Attendance->setStatus($_POST["status"]);
		$conn = new AttendanceDb();
		$result = $conn->add($Attendance);
		if($result){
			$attendanceLast = $conn->searchLast();
			$admcauses = $_POST["admcause"];
			if(is_array($admcauses)){
				foreach($admcauses as $admCauseSingle){
					 $conn->addCauseAdmission($admCauseSingle,$attendanceLast->id);
				}
			}else{
				$conn->addCauseAdmission($admcauses,$attendanceLast->id);
			}
		}
		$this->redirect($result);
	}
	
	private function redirect($result){
		if($result){
			$conn = new AttendanceDb();
			$result = $conn->searchLast();
			echo '<div class="portlet">
					<div class="portlet-header">'.$result->namePatient.' '.$result->surnamePatient.'</div>
					<div class="portlet-content"></div>
				</div>';
		}
	}
	
	public function search($text){
		if(isset($_SESSION['hospital'])){
		$hospital = $_SESSION['hospital'];
		}
		$db = new AttendanceDb();
		$attendances = $db->search($hospital->id,$text);
		if($attendances != null || $attendances != false){
			foreach($attendances as $attendance){
				echo $this->prepare($attendance);
			}
		}
	}
	
	public function searchAll($hospital){
		$db = new AttendanceDb();
		$attendances = $db->searchAll($hospital->id);
		if($attendances != null || $attendances != false){
			foreach($attendances as $attendance){
				echo $this->prepare($attendance);
			}
		}
	}
	
	public function prepare($attendance){
		if($attendance->status == '1'){
			
			return '<script>
			$(document).ready(function(){
			$("#avaliacao").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header" style="word-wrap: break-word;">'.$attendance->namePatient.' '.$attendance->surnamePatient.'</div>\'
			+ \'<div class="portlet-content" style="word-wrap: break-word;"></div>\'
			+ \'</div>\');
			});</script>';
		}
		if($attendance->status == '2'){
			return '<script>
			$(document).ready(function(){
			$("#reavaliacao").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header" style="word-wrap: break-word;">'.$attendance->namePatient.' '.$attendance->surnamePatient.'</div>\'
			+ \'<div class="portlet-content" style="word-wrap: break-word;">'.$attendance->observacoes.'</div>\'
			+ \'</div>\');
			});</script>';
		}
		if($attendance->status == '3'){
			return '<script>
			$(document).ready(function(){
			$("#aprovacao").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header" style="word-wrap: break-word;">'.$attendance->namePatient.' '.$attendance->surnamePatient.'</div>\'
			+ \'<div class="portlet-content" style="word-wrap: break-word;">'.$attendance->observacoes.'</div>\'
			+ \'</div>\');
			});</script>';
		}
		if($attendance->status == '6'){
			return '<script>
			$(document).ready(function(){
			$("#orcamento").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header" style="word-wrap: break-word;">'.$attendance->namePatient.' '.$attendance->surnamePatient.'</div>\'
			+ \'<div class="portlet-content" style="word-wrap: break-word;">'.$attendance->observacoes.'</div>\'
			+ \'</div>\');
			});</script>';
		}
		if($attendance->status == '9'){
			return '<script>
			$(document).ready(function(){
			$("#acompanhamento").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header" style="word-wrap: break-word;">'.$attendance->namePatient.' '.$attendance->surnamePatient.'</div>\'
			+ \'<div class="portlet-content" style="word-wrap: break-word;">'.$attendance->observacoes.'</div>\'
			+ \'</div>\');
			});</script>';
		}
		if($attendance->status == '13'){
			return '<script>
			$(document).ready(function(){
			$("#concluido").append(\'<div class="portlet">\'
			+ \'<div class="portlet-header" style="word-wrap: break-word;">'.$attendance->namePatient.' '.$attendance->surnamePatient.'</div>\'
			+ \'<div class="portlet-content" style="word-wrap: break-word;">'.$attendance->observacoes.'</div>\'
			+ \'</div>\');
			});</script>';
		}
	}

}