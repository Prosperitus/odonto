<?php
	include "employeeModel.php";
	//include "../database/dbconnect.php";
	include_once "funcoes.php";


	function addEmployee(){
		$Employee = new Employee();

		$name=$_POST["name"]);
		if(InvalidName($name)){
			return "Nome Inválido";
		}else{
			$Employee->setName($_POST["name"]);
		}

		$surname=$_POST["surname"]);
		if(InvalidSurname($surname)){
			return "Sobrenome Inválido";
		}else{
			$Employee->setSurname($_POST["surname"]);
		}

		$cro=$_POST["cro"]);
		if(letra_na_str($cro) || carac_na_str($cro)){
			return "CRO Inválido";
		}else{
			$Employee->setCro($_POST["cro"]);
		}

		$admdata=$_POST["admdate"]);
		if(InvalidAdmData($admdata)){
			return "Data Inválida";
		}else{
			$Employee->setDate($_POST["admdate"]);
		}
		
		$Employee->setNmat($_POST["nregistration"]);
		
		$cpf=$_POST["cpf"]);
		if(InvalidCpf($cpf)){
			return "CPF Inválido";
		}else{
			$Employee->setCpf($_POST["cpf"]);	
		}
		
		$tel=$_POST["phone"]);
		if(InvalidPhone($tel)){
			return "Telefone Inválido";
		}else{
			$Employee->setPhone($_POST["phone"]);
		}
		
		$Employee->setAdress($_POST["adress"]);
		$Employee->setBank($_POST["bank"]);
		$Employee->setPermission($_POST["permissiontype"]);

		$senha=$_POST["pass"]);
		if(InvalidPassword($senha)){
			return "Senha Inválida";
		}else{
			$Employee->setPass($_POST["pass"]);
		}

		$conn = new DBconnect();
		$conn->addEmployee($Employee);
	}

addEmployee();
