<?php
	session_start();
	function verifyLogUser(){
		return isset($_SESSION['emailEmployee']) && $_SESSION['emailEmployee'] != null;
	}
	
	function verifyLogRedirect(){
		if(!verifyLogUser()){
			header("location: ../index.php");
			die();
		}
	}