<?php
	include "patientModel.php";
	include "../database/dbconnect.php";
	function addPatient(){
		$patient = new Patient();
		
		$nome_paciente = $_POST['nome_paciente'] ? $_POST['nome_paciente'] : 0;
		if(!InvalidName($nome_paciente)){
			$patient->setName($_POST['nome_paciente']);
		}
		else{
			return "O nome do paciente esta invalido ";
		}
		$sobrenome_paciente = $_POST['sobrenome_paciente'] ? $_POST['sobrenome_paciente'] : 0;
		if(!InvalidName($sobrenome_paciente)){
			$patient->setSurname($_POST["sobrenome_paciente"]);
		}
		else{
			return "O sobrenome do paciente esta invalido ";
		}
		
		$patient->setSex($_POST['genero_paciente']);
		$patient->setAddress($_POST['endereco_paciente']);
		$patient->setNeighborhood($_POST['bairro_paciente']);
		$patient->setCity($_POST['cidade_paciente']);
		
		$data_paciente = $_POST['date_paciente'] ? $_POST['date_paciente'] : 0;	
		if(!InvalidData($date_paciente)){
			$patient->setBirthdate($_POST['date_paciente']);
		}
		else{
			return "A data de nascimento esta invalida ";
		}		

		$patient->setState($_POST['paciente_uf']);

		$cep_paciente = $_POST['cep_paciente'] ? $_POST['cep_paciente'] : 0;	
		if(!InvalidCEP($cep_paciente){
			$patient->setCep($_POST['cep_paciente']);
		}
		else{
			return "O CEP do paciente esta invalido ";
		}
		
		if(isset($_POST['social_security'])){
			$patient->setSocialSecurity($_POST['social_security']);
		}
		$patient->setHealthPlan($_POST['plano_de_saude']);
		
		$nome_responsavel = $_POST['nome_responsavel'] ? $_POST['nome_responsavel'] : 0;	
		if(!InvalidName($nome_responsavel){
			$patient->setResponsibleName($_POST['nome_responsavel']);
		}
		else{
			return "O nome do responsavel esta invalido ";
		}
		$telefone_responsavel = $_POST['telefone_responsavel'] ? $_POST['telefone_responsavel'] : 0;
		if(!letra_na_str($telefone_responsavel) && !carac_na_str($telefone_responsavel)){
			$patient->setResponsiblePhone($_POST['telefone_responsavel']);
		}
		else{
			return "O telefone do responsavel esta invalido ";
		}
		$patient->setClinic($_POST['clinica']);
		$conn = new DBconnector();
		$conn->addPatient($patient);
     
	}
addPatient();
