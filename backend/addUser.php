<?php
	include "userModel.php"
	include "../database/dbconnect.php"

	function addUser(){
		$user = new user();
		$user->setName($_POST("name"));
		$user->setSurname($_POST("surname"));
		$user->setCro($_POST("cro"));
		$user->setPhone($_POST("phone"));
		$user->setEmail($_POST("email"));
		$user->setPass($_POST("pass"));
		$user->setBirthdate($_POST("birthdate"));
		$conn = new DBconnect();
		$conn->addUser($user);
	}

addUser();
