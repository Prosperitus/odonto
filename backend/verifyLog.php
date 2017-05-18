<?php
	session_start();
	function verifyLogUser(){
		return isset($_SESSION['Employee']) && $_SESSION['Employee'] != null;
	}
	
	function verifyLogRedirect(){
		if(!verifyLogUser()){
			header("location: ../index.php");
			die();
		}
	}
