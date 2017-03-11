<?php
	include "userModel.php"
	include "../database/dbconnect.php"

	function addEmployee(){
		$Employee = new Employee();
		$Employee->setName($_POST["name"]);
		$Employee->setSurname($_POST["surname"]);
		$Employee->setCro($_POST["cro"]);
		$Employee->setDate($_POST["admdate"]);
		$Employee->setNmat($_POST["nregistration"]);
		$Employee->setCpf($_POST["cpf"]);
		$Employee->setPhone($_POST["phone"]);
		$Employee->setAdress($_POST["adress"]);
		$Employee->setBank($_POST["bank"]);
		$Employee->setPermission($_POST["permissiontype"]);
		$Employee->setPass($_POST["pass"]);
		$conn = new DBconnect();
		$conn->addUser($Employee);
	}

addUser();
