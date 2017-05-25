<?php
	include "userModel.php"
	//include "../database/dbconnect.php"
	include "funcoes.php";

	function addUser(){
		$user = new user();

		$user=$_POST("name"));
		if(InvalidName($nome)){
			return "Nome Inválido";
		}else{
			$user->setName($_POST("name"));
		}
		
		$user=$_POST("surname"));
		if(InvalidSurname($sobrenome)){
			return "Nome Inválido";
		}else{
			$user->setSurname($_POST("surname"));
		}

		$cro=$_POST["cro"]);
		if(letra_na_str($cro) || carac_na_str($cro)){
			return "CRO Inválido";
		}else{
			$user->setCro($_POST("cro"));
		}

		$admdate=$_POST("admdate"));
		if(InvalidAdmData($admdate)){
			return "Data Inválida";
		}else{
			$user->setDate($_POST("admdate"));
		}

		$user->setNmat($_POST("nregistration"));
		
		$cpf=$_POST("cpf"));
		if(InvalidCpf($cpf)){
			return "CPF Inválido";
		}else{
			$user->setCpf($_POST("cpf"));
		}

		$tel=$_POST("phone"));
		if(InvalidPhone($tel)){
			return "Telefone Inválido";
		}else{
			$user->setPhone($_POST("phone"));
		}
		
		$user->setAdress($_POST("adress"));
		$user->setBank($_POST("bank"));
		$user->setPermission($_POST("permissiontype"));
		
		$senha=$_POST("pass"));
		if(InvalidPassword($senha)){
			return "Senha Inválida";
		}else{
			$user->setPass($_POST("pass"));
		}
		
		$conn = new DBconnect();
		$conn->addUser($user);
	}

addUser();
