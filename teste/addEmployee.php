<?php
	include "employeeModel.php";
	//include "../database/dbconnect.php";
	include_once "../teste/funcoes.php";
	require_once "generateRegistry.php";

	function addEmployee(){
		$Employee = new Employee();
		$erro = false;

		$name = isset($_POST["funcionario_nome"]) ? $_POST["funcionario_nome"] : 0;
		if(InvalidName($name)){
			echo "Nome Inválido</br>";
			$erro = true;
		}else{
			$Employee->setName($_POST["funcionario_nome"]);
		}

		$surname=isset($_POST["funcionario_sobrenome"]) ? $_POST["funcionario_sobrenome"] : 0;
		if(InvalidSurname($surname)){
			echo "Sobrenome Inválido</br>";
			$erro = true;
		}else{
			$Employee->setSurname($_POST["funcionario_sobrenome"]);
		}

		
		$Employee->setCro($_POST["funcionario_cro"]);
		$Employee->setAdmissionDate($_POST["funcionario_admissao"]);
		$Employee->setRegistration(generateRegistry(6));
		$Employee->setCpf($_POST["funcionario_cpf"]);	
		$Employee->setPhone2($_POST["funcionario_celular"]);
		$Employee->setPhone($_POST["funcionario_telefone"]);
		$Employee->setAddress($_POST["funcionario_endereco"]);
		
		$banco = isset($_POST["bank"]) ? $_POST["bank"] : 0;
		if(InvalidName($banco)){
			echo "Banco Inválido</br>";
			$erro = true;
		}else{
			$Employee->setBank($_POST["bank"]);
		}
		if(isset($_POST["permissao"])){
			$Employee->setPermission($_POST["permissao"]);
		}	
		$senha=isset($_POST["funcionario_senha"]) ?$_POST["funcionario_senha"] :  0;
		if(InvalidPassword($senha)){
			echo "Senha Inválida</br>";
			$erro = true;
		}else{
			$Employee->setPass(hash("sha256",($_POST["funcionario_senha"])));
		}

		$email = isset($_POST["funcionario_email"]) ? $_POST["funcionario_email"] :  0;
		if(InvalidEmail($email)){
			echo "Email Inválido</br>";
			$erro = true;
		}
		else{
			$Employee->setEmail($_POST["funcionario_email"]);	
		}
		
		$cc = isset($_POST["funcionario_conta_banco"]) ? $_POST["funcionario_conta_banco"] : 0;
		if(!letra_na_str($cc) || !carac_na_str($cc)){
			echo "Cc Inválida</br>";
			$erro = true;
		}else{
			$Employee->setNumberOfAccount($_POST["funcionario_conta_banco"]);
		}

		$ag = isset($_POST["funcionario_agencia_banco"]) ? $_POST["funcionario_agencia_banco"] :  0;
		if(!letra_na_str($ag) || !carac_na_str($ag)){
			echo "Ag Inválida</br>";
			$erro = true;
		}else{
			$Employee->setAgency($_POST["funcionario_agencia_banco"]);
		}





		if(!$erro){
		$conn = new DBconnect();
		$conn->addEmployee($Employee);
		}
	}

addEmployee();
