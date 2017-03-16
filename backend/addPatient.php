<?php
	include "patientModel.php"
	include "../database/dbconnect.php"

	function addPatient(){
		$patient = new Patient();
		$patient->setName($_POST['name']);
		$patient->setAge($_POST['age']);
		$patient->setSex($_POST['sex']);
		$patient->setAddress($_POST['address']);
		$patient->setNeighborhood($_POST['neighborhood']);
		$patient->setCity($_POST['city']);
		$patient->setState($_POST['state']);
		$patient->setCep($_POST['cep']);
		$patient->setHospital($_POST['hospital']);
		$patient->setHealthPlan($_POST['healthPlan']);
		$patient->setResponsibleName($_POST['responsibleName']);
		$patient->setResponsiblePhone($_POST['responsiblePhone']);
		$patient->setClinic($_POST['clinic']);
		$conn = new DBconnect();
		$conn->addPatient($patient);
     
	}

addPatient();
