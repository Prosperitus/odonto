<?php
	require_once "Hospitalmodel.php";
	require_once "employeeModel.php";
	require_once "patientModel.php";


 class Attendance{
	 private $dataAdmissaoUti;
	 private $dataFinalAtendimento;
	 private $admissionCause;
	 private $attendanceStatus;
	 private $patientPicture;
	 private $medicalRecord;
	 private $photos;
	 private $uti;	
	 //--------------------------------
	 private Hospital $hospital;
	 private Employee $employee;
	 private Patient $patient;
	 //--------------------------------



	 function __construct(){

		}

	 public function getAdmissionCause(){
		 return $this->admissionCause;
	 }
	 
	 public function setadmissionCause($admissionCause){
		 $this->admissionCause = $admissionCause;
	 }

	 public function getUti(){
		 return $this->uti;
	 }
	 
	 public function setUti($uti){
		 $this->uti = $uti;
	 }

	 public function getPhotos(){
		 return $this->photos;
	 }
	 
	 public function setPhotos($photos){
		 $this->photos = $photos;
	 }

	 public function getMedicalRecord(){
		 return $this->medicalRecord;
	 }
	 
	 public function setMedicalRecord($medicalRecord){
		 $this->medicalRecord = $medicalRecord;
	 }

	 public function getPatientPicture(){
		 return $this->patientPicture;
	 }
	 
	 public function setPatientPicture($patientPicture){
		 $this->patientPicture = $patientPicture;
	 }

	 public function getAttendanceStatus(){
		 return $this->attendanceStatus;
	 }
	 
	 public function setAttendanceStatus($attendanceStatus){
		 $this->attendanceStatus = $attendanceStatus;
	 }

	 
	 public function getDataAdmissaoUti(){
		 return $this->dataAdmissaoUti;
	 }
	 
	 public function setDataAdmissaoUti($dataAdmissaoUti){
		 $this->dataAdmissaoUti = $dataAdmissaoUti;
	 }
	 
	 public function getDataFinalAtendimento(){
		 return $this->dataFinalAtendimento;
	 }
	 
	 public function setDataFinalAtendimento($dataFinalAtendimento){
		 $this->dataFinalAtendimento = $dataFinalAtendimento;
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