<?php
	require_once "Hospitalmodel.php";
	require_once "employeeModel.php";
	require_once "patientModel.php";


 class Attendance{
	 private $utiAdmissionDate;
	 private $attendanceFinalDate; //não obrigatório
	 private $admissionCause;
	 private $attendanceStatus;
	 private $bonequinha;
	 private $medicalRecord;
	 private $image; //não obrigatório
	 private $uti;	

	 //------------TIPADAS------------
	 private Hospital $hospital;
	 private Employee $employee;
	 private Patient $patient;
	 //--------------------------------



	 public function getImage(){
		 return $this->image;
	 }
	 
	 public function setImage($image){
		 $this->image = $image;
	 }

	 public function getAttendanceFinalDate(){
		 return $this->attendanceFinalDate;
	 }
	 
	 public function setAttendanceFinalDate($attendanceFinalDate){
		 $this->attendanceFinalDate = $attendanceFinalDate;
	 }


	 function __construct(){

		}

	 public function getAdmissionCause(){
		 return $this->admissionCause;
	 }
	 
	 public function setAdmissionCause($admissionCause){
		 $this->admissionCause = $admissionCause;
	 }

	 public function getUti(){
		 return $this->uti;
	 }
	 
	 public function setUti($uti){
		 $this->uti = $uti;
	 }


	 public function getMedicalRecord(){
		 return $this->medicalRecord;
	 }
	 
	 public function setMedicalRecord($medicalRecord){
		 $this->medicalRecord = $medicalRecord;
	 }

	 public function getBonequinha(){
		 return $this->bonequinha;
	 }
	 
	 public function setBonequinha($bonequinha){
		 $this->bonequinha = $bonequinha;
	 }

	 public function getAttendanceStatus(){
		 return $this->attendanceStatus;
	 }
	 
	 public function setAttendanceStatus($attendanceStatus){
		 $this->attendanceStatus = $attendanceStatus;
	 }

	 
	 public function getUtiAdmissionDate(){
		 return $this->utiAdmissionDate;
	 }
	 
	 public function setUtiAdmissionDate($utiAdmissionDate){
		 $this->utiAdmissionDate = $utiAdmissionDate;
	 }
	 
	 
	 public function getHospital(){
		 return $this->hospital;
	 }
	 
	 public function setHospital($hospital){
		 $this->hospital = $hospital;
	 }
	 
	 public function getEmployee(){
		 return $this->employee;
	 }
	 
	 public function setEmployee($employee){
		 $this->employee = $employee;
	 }
	 
	 
	  public function getPatient(){
		 return $this->patient;
	 }
	 
	 public function setPatient($patient){
		 $this->patient = $patient;
	 }


	 
 }