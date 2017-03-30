<?php
	include "patientModel.php";
	include "../database/dbpatient.php";

	function addPatient(){
		$patient = new Patient();
		$patient->setName($_POST['nome_paciente']);
		$patient->setSurname($_POST["sobrenome_paciente"]);
		$patient->setGender($_POST['genero_paciente']);
		$patient->setAddress($_POST['endereco_paciente']);
		$patient->setNeighborhood($_POST['bairro_paciente']);
		$patient->setCity($_POST['cidade_paciente']);
		$patient->setBirthdate($_POST['date_paciente']);
		$patient->setState($_POST['paciente_uf']);
		$patient->setCep($_POST['cep_paciente']);
		if(isset($_POST['social_security'])){
			$patient->setSocialSecurity($_POST['social_security']);
		}
		$patient->setHealthPlan($_POST['plano_de_saude']);
		$patient->setResponsibleName($_POST['nome_responsavel']);
		$patient->setResponsiblePhone($_POST['telefone_responsavel']);
		$patient->setClinic($_POST['clinica']);
		$conn = new DbPatient();
		$result = $conn->addPatient($patient);
		return $result;
     
	}

if(addPatient()){
	header("location: ../success_register.php");
}else{
	header("location: ../fail_register.php");
}
