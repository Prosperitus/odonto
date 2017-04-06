<?php
	require_once "employeeModel.php";
	require_once "generateRegistry.php";
	require_once "../database/dbemployee.php";
	include_once "funcoes.php";

	function addEmployee(){
		$Employee = new Employee();
		$error = false;

		$name = $_POST["funcionario_nome"] ? $_POST["funcionario_nome"] : 0;
		$surname =  $_POST["funcionario_sobrenome"] ? $_POST["funcionario_sobrenome"] : 0;
		$bank = $_POST["funcionario_banco"] ? $_POST["funcionario_banco"] : 0;
		$cro = $_POST["funcionario_conta_banco"] ? $_POST["funcionario_conta_banco"] : 0;
		$ag = $_POST["funcionario_agencia_banco"] ? $_POST["funcionario_agencia_banco"] : 0;
		$password = $_POST["funcionario_senha"] ? $_POST["funcionario_senha"] : 0;
		$cc = $_POST["funcionario_conta_banco"] ? $_POST["funcionario_conta_banco"] : 0;
		$cro = $_POST["funcionario_cro"] ? $_POST["funcionario_cro"] : 0;
		$cpf = $_POST["funcionario_cpf"] ? $_POST["funcionario_cpf"] : 0;

		echo "Nome: $name </br> Sobrenome: $surname </br> Banco: $bank </br> Cc: $cc </br> Ag: $ag </br> Senha: $password </br>";
		echo "</br>Teste Inválidos: </br>";

		if(InvalidName($name)){
			$error = true;
			echo "Nome</br>";
		}else{
			$Employee->setName($_POST["funcionario_nome"]);
		}
		
		if(InvalidSurname($surname)){
			$error =  true;
			echo "Sobrenome</br>";
		}else{
			$Employee->setSurname($_POST["funcionario_sobrenome"]);
		}

		if(InvalidName($bank)){
			$error =  true;
			echo "Nome do Banco</br>";
		}else{
			$Employee->setBank($_POST["funcionario_banco"]);
		}

		if(!letra_na_str($cc) || !carac_na_str($cc)){
			$error = true;
			echo "Conta do Banco</br>";
		}else{
			$Employee->setNumberOfAccount($_POST["funcionario_conta_banco"]);
		}

		if(!letra_na_str($ag) || !carac_na_str($ag)){
			$error = true;
			echo "Agencia</br>";
		}else{
			$Employee->setAgency($_POST["funcionario_agencia_banco"]);
		}

		if(InvalidPassword($password)){
			$error = true;
			echo "Senha</br>";
		}else{
			$Employee->setPassword(hash("sha256",($_POST["funcionario_senha"])));
		}



		$Employee->setCro($_POST["funcionario_cro"]);
		$Employee->setRegistration(generateRegistry(6));
		$Employee->setAdmissionDate($_POST["funcionario_admissao"]);
		$Employee->setCpf($_POST["funcionario_cpf"]);
		$Employee->setPhone($_POST["funcionario_telefone"]);
		$Employee->setPhone2($_POST["funcionario_celular"]);
		$Employee->setAddress($_POST["funcionario_endereco"]);
		$Employee->setPermission($_POST["permissao"]);
		$Employee->setEmail($_POST["funcionario_email"]);
		
		if(!$error){
		$conn = new DbEmployee();
		$result = $conn->addEmployee($Employee);
		return $result;
		}

	}


if(addEmployee()){
	header("location: ../success_register.php");
}else{
	header("location: ../fail_register.php");
}