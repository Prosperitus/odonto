<?php
	include "employeeModel.php";
	include "../database/dbconnect.php";

	function addEmployee(){
		$Employee = new Employee();
		$Employee->setName($_POST["funcionario_nome"]);
		$Employee->setSurname($_POST["funcionario_sobrenome"]);
		$Employee->setCro($_POST["funcionario_cro"]);

		$Employee->setAdmissionDate($_POST["funcionario_admissao"]);

		$Employee->setCpf($_POST["funcionario_cpf"]);
		$Employee->setPhone($_POST["funcionario_telefone"]);
		$Employee->setPhone2($_POST["funcionario_telefone2"]);
		$Employee->setAddress($_POST["funcionario_endereco"]);
		$Employee->setBank($_POST["funcionario_banco"]);
		$Employee->setPermission($_POST["funcionario_permissao"]);
		$Employee->setPassword($_POST["funcionario_senha"]);


		//novos

		$Employee->setEmail($_POST["funcionario_email"]);
		$Employee->setNumberOfAccount($_POST["funcionario_conta_banco"]);
		$Employee->setAgency($_POST["funcionario_agencia_banco"]);

		

		$conn = new DBconnector();
		$conn->addEmployee($Employee);
	}

addEmployee();



		
		
	
		
		

		




