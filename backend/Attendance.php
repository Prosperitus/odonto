<?php
	require_once "Hospitalmodel.php";
	require_once "employeeModel.php";
	require_once "patientModel.php";


 class Attendance{
	 private $dataAdmissaoUti;
	 private $dataFinalAtendimento;
	 private Hospital $hospital;
	 private Employee $employee;
	 private Patient $patient;
	 
	 public getDataAdmissaoUti(){
		 return $this->dataAdmissaoUti;
	 }
	 
	 public setDataAdmissaoUti($dataAdmissaoUti){
		 $this->dataAdmissaoUti = $dataAdmissaoUti;
	 }
	 
	 public getDataFinalAtendimento(){
		 return $this->dataFinalAtendimento;
	 }
	 
	 public setDataFinalAtendimento($dataFinalAtendimento){
		 $this->dataFinalAtendimento = $dataFinalAtendimento;
	 }
	 
	 public getHospital(){
		 return $this->hospital;
	 }
	 
	 public setHospital($hospital){
		 $this->hospital = $hospital;
	 }
	 
	 public getEmployee(){
		 return $this->employee;
	 }
	 
	 public setEmployee($employee){
		 $this->employee = $employee;
	 }
	 
	 
	  public getPatient(){
		 return $this->patient;
	 }
	 
	 public setPatient($patient){
		 $this->patient = $patient;
	 }
	 
 }