<?php
	include "userModel.php"
	include "../database/dbconnect.php"

	function addUser(){
		$user = new user();
		$user->setName($_POST("name"));
		$user->setSurname($_POST("surname"));
		$user->setCro($_POST("cro"));
		$user->setDate($_POST("admdate"));
		$user->setNmat($_POST("nregistration"));
		$user->setCpf($_POST("cpf"));
		$user->setPhone($_POST("phone"));
		$user->setAdress($_POST("adress"));
		$user->setBank($_POST("bank"));
		$user->setPermission($_POST("permissiontype"));
		$user->setPass($_POST("pass"));
		$conn = new DBconnect();
		$conn->addUser($user);
	}

addUser();

