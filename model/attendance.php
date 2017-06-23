<?php
	require_once "../model/hospital.php";
	require_once "../model/employee.php";
	require_once "../model/patient.php";


 class Attendance{
	 private $utiAdmissionDate;
	 private $attendanceFinalDate; //não obrigatório
	 private $admissionCause;
	 private $attendanceStatus;
	 private $bonequinha;
	 private $medicalRecord;
	 private $image; //não obrigatório
	 private $bed;
	 private $id;

	 //------------TIPADAS------------
	 private $hospital;
	 private $doctor;
	 private $patient;
	 //--------------------------------

	function __construct(){
		$this->hospital = new Hospital();
		$this->doctor = new Employee();
		$this->patient = new Patient();
	}
	 
	 public function getId() {
	 	return $this->id;
	 }

	 public function setId() {
	 	$this->id = $id;
	 }

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


	 

	 public function getAdmissionCause(){
		 return $this->admissionCause;
	 }
	 
	 public function setAdmissionCause($admissionCause){
		 $this->admissionCause = $admissionCause;
	 }

	 public function getBed(){
		 return $this->bed;
	 }
	 
	 public function setBed($leito){
		 $this->bed = $leito;
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
	 
	 public function getDoctor(){
		 return $this->doctor;
	 }
	 
	 public function setDoctor($doctor){
		 $this->doctor = $doctor;
	 }
	 
	 
	  public function getPatient(){
		 return $this->patient;
	 }
	 
	 public function setPatient($patient){
		 $this->patient = $patient;
	 }


	 
 }