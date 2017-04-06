<?php
	include "patientModel.php";
	include "../database/dbconnect.php";
	include "../teste/funcoes.php";



	function addPatient(){
		$patient = new Patient();
		$erro = false;
		$cpf = $_POST['cpf'] ;
		$telefone_responsavel = $_POST['telefone_responsavel'] ;
		$nome_responsavel = $_POST['nome_responsavel'] ;
		$cep_paciente = $_POST['cep_paciente'] ;
		$data_paciente = $_POST['date_paciente'];	
		$sobrenome_paciente = $_POST['sobrenome_paciente'] ;
		$nome_paciente = $_POST['nome_paciente'] ;
		$endereco_paciente = $_POST['endereco_paciente'];
		$bairro_paciente = $_POST['bairro_paciente'];
		$cidade_paciente = $_POST['cidade_paciente'];
		$plano_de_saude = $_POST['plano_de_saude'];
		$paciente_uf =$_POST['paciente_uf'];
		$genero_paciente = isset($_POST['genero_paciente']) ? $_POST['genero_paciente'] : 0;
		$clinica = isset($_POST['clinica']) ? $_POST['clinica'] : 0;
		/**********************************************************************/
		echo"<style>
				body{
					background-color: lightgreen;
				}
	      		div {
	      			background-color: black;
	      			color: red;
	      			font-size: 18px;
	      			font-weight: bolder;
	      		}
	      		h3{
	      			color:blue;
	      		}
    		</style>";

		echo "------------------------------------------------------------------</br>";
		echo "nome_paciente : $nome_paciente</br>";
		echo "sobrenome_paciente : $sobrenome_paciente</br>";
		echo "cpf : $cpf</br>";	
		echo "data_paciente : $data_paciente</br>";
		echo "endereco_paciente : $endereco_paciente</br>";
		echo "bairro_paciente : $bairro_paciente</br>";
		echo "cidade_paciente : $cidade_paciente</br>";
		echo "cep_paciente : $cep_paciente</br>";
		echo "plano_de_saude : $plano_de_saude</br>";
		echo "nome_responsavel : $nome_responsavel</br>";	
		echo "telefone_responsavel : $telefone_responsavel</br>";
		echo "paciente_uf : $paciente_uf</br>";
		echo "genero_paciente : $genero_paciente</br>";
		echo "clinica : $clinica</br>";
		echo "------------------------------------------------------------------</br>";
		echo "Erros : </br></br>";
		echo "<div>";
		/***********************************************************************/

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
		
		if(!InvalidName($nome_responsavel)){
			$patient->setResponsibleName($_POST['nome_responsavel']);
		}
		else{
			$erro = true;
			echo "O nome do responsavel esta invalido</br>";
		}	
		if(isset($_POST['genero_paciente'])){
			$patient->setGender($_POST['genero_paciente']);
		}
		else
		{
			$erro = true;
			echo "O sexo nao foi escolhido</br>";
		}
		if ($cep_paciente != ""){
			if(!letra_na_str($cep_paciente)){
				$patient->setCep($_POST['cep_paciente']);
			}
			else{
				$erro = true;
				echo "cep invalido</br>";
			}
		}
		echo "</div>";
		echo "<h3>";
		$patient->setAddress($_POST['endereco_paciente']);
		$patient->setNeighborhood($_POST['bairro_paciente']);
		$patient->setCity($_POST['cidade_paciente']);
		$patient->setState($_POST['paciente_uf']);
		$patient->setHealthPlan($_POST['plano_de_saude']);
		$patient->setBirthdate($_POST['date_paciente']);
		
		$patient->setResponsiblePhone($_POST['telefone_responsavel']);
		$patient->setSocialSecurity($_POST['cpf']);
		//$patient->setClinic($_POST['clinica']);
		if(!$erro){
		$conn = new DBconnector();
		$result = $conn->addPatient($patient);
		echo "</h3>";
		return $result;
     	}
	}

	addPatient();
