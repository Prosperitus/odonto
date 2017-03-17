<?php
	include "patientModel.php";
	include "../database/dbconnect.php";

	function addPatient(){
		$patient = new Patient();
		$patient->setName($_POST['nome_paciente']);
		$patient->setSex($_POST['genero_paciente']);
		$patient->setAddress($_POST['endereco_paciente']);
		$patient->setNeighborhood($_POST['bairro_paciente']);
		$patient->setCity($_POST['cidade_paciente']);
		$patient->setState($_POST['paciente_uf']);
		$patient->setCep($_POST['cep_paciente']);
		$patient->setHospital($_POST['hospital']);
		$patient->setHealthPlan($_POST['plano_de_saude']);
		$patient->setResponsibleName($_POST['nome_responsavel']);
		$patient->setResponsiblePhone($_POST['telefone_responsavel']);
		$patient->setClinic($_POST['clinica']);
		$conn = new DBconnect();
		$conn->addPatient($patient);
     
	}

addPatient();
