
<?php

      
	include "patientModel.php";
	include "../database/dbpatient.php";

	function addPatient(){
		$patient = new Patient();
		$patient ->setpacienteEmail($_POST['paciente_email']);
        $patient->setName($_POST['nome_paciente']);
		$patient->setSurname($_POST['sobrenome_paciente']);
		$patient->setGender($_POST['genero_paciente']);
		$patient->setBirthdate($_POST['date_paciente']);
        $patient->setAdress($_POST['endereco_paciente']);
		$patient->setNeighborhood($_POST['bairro_paciente']);
		$patient->setCity($_POST['cidade_paciente']);
		$patient->setState($_POST['paciente_uf']);
		$patient->setCep($_POST['cep_paciente']);
		$patient->setCpf($_POST['cpf']);
		$patient->setHealthPlan($_POST['plano_de_saude']);
		$patient->setResponsibleName($_POST['nome_responsavel']);
		$patient->setResponsibleName2($_POST['nome_responsavel_2']);
		$patient->setmedicalassistant($_POST['nome_medico_responsavel']);
		$patient->settelephone_phy_assistant($_POST['telefone_medico_responsavel']);
		$patient->setspeciality_phy_assistant($_POST['especialidade_medico_responsavel']);
		//$patient->setmedicalassistant($_POST['medicalassistant']);
		//$patient->setmedicalRecords($_POST['medicalRecords']);
        $patient->setResponsiblePhone($_POST['telefone_responsavel']);
	$patient->setResponsiblePhone2($_POST['telefone_responsavel_2']);
		$patient->setClinic($_POST['clinica']);
		$conn = new DbPatient();
		$result = $conn->addPatient($patient);
		return $result;
     
	}

 if(addPatient()){
	header("location: ../public/success_register.php");
 }else{
	die();
 }