<?php
	include "patientModel.php";
	include "../database/dbconnect.php";
	include "funcoes.php";



	function addPatient(){
		$patient = new Patient();
		$erro = false;
		$cpf = $_POST['cpf'] ? $_POST['cpf'] : 0;
		$telefone_responsavel = $_POST['telefone_responsavel'] ? $_POST['telefone_responsavel'] : 0;
		$nome_responsavel = $_POST['nome_responsavel'] ? $_POST['nome_responsavel'] : 0;
		$cep_paciente = $_POST['cep_paciente'] ? $_POST['cep_paciente'] : 0;
		$data_paciente = $_POST['date_paciente'] ? $_POST['date_paciente'] : 0;	
		$sobrenome_paciente = $_POST['sobrenome_paciente'] ? $_POST['sobrenome_paciente'] : 0;
		$nome_paciente = $_POST['nome_paciente'] ? $_POST['nome_paciente'] : 0;
		

		echo "nome_paciente : $nome_paciente</br>";
		echo "sobrenome_paciente : $sobrenome_paciente</br>";
		echo "data_paciente : $data_paciente</br>";
		echo "cep_paciente : $cep_paciente</br>";
		echo "nome_responsavel : $nome_responsavel</br>";	
		echo "telefone_responsavel : $telefone_responsavel</br>";
		echo "cpf : $cpf</br>";	
		echo "------------------------------------------------------------------</br>";
		echo "Erros : </br></br>";


		if(!InvalidName($nome_paciente)){
			$patient->setName($_POST['nome_paciente']);
		}
		else{
			$erro = true;
			echo "Nome do paciente invalido</br>";
		}
		
		if(!InvalidName($sobrenome_paciente)){
			$patient->setSurname($_POST["sobrenome_paciente"]);
		}
		else{
			$erro = true;
			echo "Sobrenome do paciente invalido</br>";
		}
		
		if(!InvalidData($data_paciente)){
			$patient->setBirthdate($_POST['date_paciente']);
		}
		else{
			$erro = true;
			echo "A data de nascimento esta invalida</br>";
		}		
	
		if(!InvalidCEP($cep_paciente)){
			$patient->setCep($_POST['cep_paciente']);
		}
		else{
			$erro = true;
			echo "O CEP do paciente esta invalido</br>";
		}
		
		if(!InvalidName($nome_responsavel)){
			$patient->setResponsibleName($_POST['nome_responsavel']);
		}
		else{
			$erro = true;
			echo "O nome do responsavel esta invalido</br>";
		}
			
		if(!letra_na_str($telefone_responsavel) && !carac_na_str($telefone_responsavel)){
			$patient->setResponsiblePhone($_POST['telefone_responsavel']);
		}
		else{
			$erro = true;
			echo "O telefone do responsavel esta invalido</br>";
		}
			
		if(!InvalidCpf($cpf)){
			$patient->setSocialSecurity($_POST['cpf']);
		}
		else{
			$erro = true;
			echo "O cpf do paciente esta invalido</br>";
		}	

		$patient->setGender($_POST['genero_paciente']);
		$patient->setAddress($_POST['endereco_paciente']);
		$patient->setNeighborhood($_POST['bairro_paciente']);
		$patient->setCity($_POST['cidade_paciente']);
		$patient->setState($_POST['paciente_uf']);
		$patient->setClinic($_POST['clinica']);
		$patient->setHealthPlan($_POST['plano_de_saude']);

		if(!$erro){
		$conn = new DBconnector();
		$result = $conn->addPatient($patient);
		return $result;
     	}
	}

	addPatient();