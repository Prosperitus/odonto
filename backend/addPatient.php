
<?php

        // 07/04/2017 *BUGS A SEREM CORRIGIDOS*
	include "patientModel.php";
	include "../database/dbpatient.php";

	function addPatient(){
		$patient = new Patient();
		$patient->setName($_POST['name']);
		$patient->setSurname($_POST['surname']);
		$patient->setGender($_POST['gender']);		
                $patient->setAddress($_POST['address']);
		$patient->setNeighborhood($_POST['neighborhood']);
		$patient->setCity($_POST['city']);
		$patient->setState($_POST['state']);
		$patient->setCep($_POST['cep']);
		if(isset($_POST['social_security'])){
			$patient->setSocialSecurity($_POST['social_security']);
		}
		$patient->setHealthPlan($_POST['healthPlan']);
		$patient->setHospital($_POST['hospital']);
		$patient->setResponsibleName($_POST['responsibleName']);
		$patience->setmedicalassistant($_POST['medicalassistant']);
		$patience->setmedicalRecords($_POST['medicalRecords']);
                $patient->setResponsiblePhone($_POST['responsiblePhone']);
		$patient->setClinic($_POST['clinic']);
		$conn = new DbPatient();
		$result = $conn->addPatient($patient);
		return $result;
     
	}

 if(addPatient()){
	header("location: ../success_register.php");
 }else{
	header("location: ../fail_register.php");
 }
