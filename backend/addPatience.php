<?php
	include "userModel.php"
	include "../database/dbconnect.php"

	function addPatience(){
		$patience = new user();
		$patience->setName($_POST['name']);
		$patience->setAge($_POST['age']);
		$patience->setSex($_POST['sex']);
		$patience->setAddress($_POST['address']);
		$patience->setNeighborhood($_POST['neighborhood']);
		$patience->setCity($_POST['city']);
		$patience->setState($_POST['state']);
		$patience->setCep($_POST['cep']);
		$patience->setHospital($_POST['hospital']);
		$patience->setHealthPlan($_POST['healthPlan']);
		$patience->setResponsibleName($_POST['responsibleName']);
		$patience->setResponsiblePhone($_POST['responsiblePhone']);
		$patience->setClinic($_POST['clinic']);
		$conn = new DBconnect();
		$conn->addUser($patience);
     
	}

addUser();
